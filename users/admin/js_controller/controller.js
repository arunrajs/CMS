// Init Functions 
fetch_country_drop();
fetch_state_drop();
fetch_district_drop(1);
fetch_Order_Frequency_drop();
fetch_Order_unit_drop();
fetch_autoIncrmnt_value("client_masters",$('.client_nexID'));
fetch_autoIncrmnt_value("package_master",$('.package_id_cls'));
load_order_table();
load_purchase_table();
//$("#size_list_table").DataTable().ajax.reload(null, false); 
 //$("#status_section [value=" + 1 + "]").attr("checked", "checked");

var Quentity_Type_flag="1";


//Nav Bar Clock 
setInterval(function() {
    var date = new Date(),
        time = date.toUTCString();
    $(".clock").html(time);
  }, 1000);

// Open Client List Modal.
$("#clients_list_btn").click(function(){
	jQuery("#client_list_model").modal('show');
	load_client_details()
});
//sweetalert2 
function fire_message(type,main_message,button_msg){
//success,info,error,warning
Swal.fire(
	main_message,
	button_msg,
	type
	)
}

//Country Master Registration 
function country_master_reg(){
	var Country=$("#Country").val();
	var CountryCode=$("#CountryCode").val();
	if(Country==""||CountryCode==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'country_master_reg'+'&Country='+Country+'&CountryCode='+CountryCode;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','County Already registered!','Please Try Again');
				}else{
					fire_message('success','New Country Added Successfully!','');
					$('#master_reg_form').find(':input').val('');
				}
			}
		});
		return false;
	}
}
// Fetch Country to drop down
function fetch_country_drop(){
	var dataString= 'function_name= '+'fetch_country_drop';
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			$(".country_drop").empty();
			$(".country_drop").html(result);
		}
	});
	return false;
}// Fetch State to drop down
function fetch_state_drop(){
	var CID=1;
	var dataString= 'function_name= '+'fetch_state_drop'+'&CID='+CID;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==""){
				$(".state_drop").html("<option>Select</option>");
			}else{
				$(".state_drop").empty();
				$(".state_drop").html(result);
			}
		}
	});
	return false;
}
//State Master Registration 
function state_master_reg(){
	var State=$("#State").val();
	var state_country_drop=$(".country_drop").children("option:selected").val();
	if(State==""||state_country_drop==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'state_master_reg'+'&State='+State+'&state_country_drop='+state_country_drop;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','State Already registered!','Please Try Again');
				}else{
					fire_message('success','New State Added Successfully!','');
					$('#master_reg_form').find(':input').val('');
				}
			}
		});
		return false;
	}
}
//State Master Registration 
function district_master_reg(){
	var District=$("#District").val();
	var district_reg_country_drop=$("#district_reg_country_drop").children("option:selected").val();
	var district_reg_state_drop=$("#district_reg_state_drop").children("option:selected").val();
	if(District==""||district_reg_country_drop==""||district_reg_state_drop==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'district_master_reg'+'&District='+District+'&district_reg_country_drop='+district_reg_country_drop+'&district_reg_state_drop='+district_reg_state_drop;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','District Already registered!','Please Try Again');
				}else{
					fire_message('success','New District Added Successfully!','');
					$('#District').val('');
				}
			}
		});
		return false;
	}
}
$(".country_drop").change(function(){
	var CID=$(this).val();
	var dataString= 'function_name= '+'fetch_state_drop'+'&CID='+CID;
	//alert(dataString);
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			//alert(result)
			$(".state_drop").empty();
			$(".state_drop").html(result);
			fetch_district_drop($(".state_drop").children("option:selected").val());
		}
	});
	return false;
})
$(".state_drop").change(function(){
	var STID=$(this).val();
	fetch_district_drop(STID);
})
//Order Frequency Master Registration 
function order_frequency_master_reg(){
	var Name_of_Order_Frequency=$("#Name_of_Order_Frequency").val();
	var Number_of_days=$("#Number_of_days").val();
	var Order_Frequency_status_drop=$("#Order_Frequency_status_drop").children("option:selected").val();
	if(Name_of_Order_Frequency==""||Number_of_days==""||Order_Frequency_status_drop==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'order_frequency_master_reg'+'&Name_of_Order_Frequency='+Name_of_Order_Frequency+'&Number_of_days='+Number_of_days+'&Order_Frequency_status_drop='+Order_Frequency_status_drop;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Order Frequency Already registered!','Please Try Again');
				}else{
					fire_message('success','New Order Frequency Added Successfully!','');
					$('#master_reg_form').find(':input').val('');
				}
			}
		});
		return false;
	}
}
//fetch District Drop down value
function fetch_district_drop(STID){
	var dataString= 'function_name= '+'fetch_district_drop'+'&STID='+STID;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==""){
				$(".district_drop").html("<option>Select</option>");
			}else{
				$(".district_drop").empty();
				$(".district_drop").html(result);
			}
		}
	});
	return false;
}
//fetch Order Frequency Drop down value
function fetch_Order_Frequency_drop(){
	var dataString= 'function_name= '+'fetch_Order_Frequency_drop';
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==""){
				$(".order_frequency_drop").html("<option>Select</option>");
			}else{
				$(".order_frequency_drop").empty();
				$(".order_frequency_drop").html(result);
			}			
		}
	});
	return false;
}
//Get the last Auto Increment value from the customer table
function fetch_autoIncrmnt_value(table,dome_id){
	var dataString= 'function_name= '+'fetch_autoIncrmnt_value'+'&table='+table;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			//alert(result)
			dome_id.empty();
			dome_id.val(result);		
		}
	});
	return false;
}
//Client Registration 
function register_new_client(type){
	var client_ID=$("#client_ID").val();
	var company_Name=$("#company_Name").val();
	var address=$("#address").val();
	var state=$("#state").val();
	var tel=$("#tel").val();
	var company_Email=$("#company_Email").val();
	var contact_Person=$("#contact_Person").val();
	var contact_Person_Email=$("#contact_Person_Email").val();
	var contact_Person_Mobile=$("#contact_Person_Mobile").val();
	var GSTN=$("#GSTN").val();
	var client_status_drop=$("#client_status_drop").children("option:selected").val();
	
	var function_name;
	if(client_ID=="" || company_Name=="" || address=="" || state=="" || tel=="" || company_Email=="" || contact_Person=="" || contact_Person_Email=="" || contact_Person_Mobile=="" || GSTN=="" ){

		fire_message('error','Please enter mandatory fields !','');
	}else{
		if(type=="create"){
			function_name="register_new_client";
		}else if(type=="update"){
			function_name="update_client";
		}
		//alert(client_nextExpecting_order);
	var dataString= 'function_name= '+function_name+'&client_ID='+client_ID+'&company_Name='+company_Name+'&address='+address+'&state='+state+'&tel='+tel+'&company_Email='+company_Email+'&contact_Person='+contact_Person+'&contact_Person_Email='+contact_Person_Email+'&contact_Person_Mobile='+contact_Person_Mobile+'&GSTN='+GSTN+'&client_status_drop='+client_status_drop;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			console.log(result)
			if(result==1){
					fire_message('error','Client Mobile Number already registered!','Please Try Again');
				}else if(result==2){

					fire_message('error','Client Email Number already registered!','Please Try Again');
				}else if(result==3){
					fire_message('success','New Client Registered Successfully!','');
					$('#master_reg_form').find(':input').val('');
					
					fetch_autoIncrmnt_value("client_masters",$('.client_nexID'));
					$("#user_list_tables").DataTable().ajax.reload(null, false); 
					jQuery("#create_client_modal").modal('hide');

				}else if(result==4){
					fire_message('success','Client Details Updated Successfully!','');
						 $("#user_list_tables").DataTable().ajax.reload(null, false); 
						 jQuery("#create_client_modal").modal('hide');
				}	
		}
	});
	return false;

	}
}//Client Packages 
function register_new_package(type){
	var package_ID=$("#package_ID").val();
	var package_Name=$("#package_Name").val();
	var disk_Space=$("#disk_Space").val();
	var email_IDs=$("#email_IDs").val();
	var bandwidth=$("#bandwidth").val();
	var database_drop=$("#database_drop").val();
	var cost=$("#cost").val();
	var package_status_drop=$("#package_status_drop").children("option:selected").val();
	var function_name;

	if(package_ID=="" || package_Name=="" || disk_Space=="" || email_IDs=="" || bandwidth=="" || database_drop=="" || cost=="" ){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		if(type=="create"){
			function_name="register_new_package";
		}else if(type=="update"){
			function_name="register_new_package_update";
		}
		//alert(client_nextExpecting_order);
	var dataString= 'function_name= '+function_name+'&package_ID='+package_ID+'&package_Name='+package_Name+'&disk_Space='+disk_Space+'&email_IDs='+email_IDs+'&bandwidth='+bandwidth+'&database_drop='+database_drop+'&cost='+cost+'&package_status_drop='+package_status_drop;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			console.log(result)
			if(result==1){
					fire_message('error','Packages Name already registered!','Please Try Again');
				}else if(result==3){
					fire_message('success','New Client Registered Successfully!','');
					$('#master_reg_form').find(':input').val('');
					
					fetch_autoIncrmnt_value("client_masters",$('.package_id_cls'));
					$('.selection_drop').prop('selectedIndex',0);

					$("#package_list_table").DataTable().ajax.reload(null, false); 
					jQuery("#package_master_modal").modal('hide');

				}else if(result==4){
					fire_message('success','Client Details Updated Successfully!','');
						 $("#package_list_table").DataTable().ajax.reload(null, false); 
						 jQuery("#package_master_modal").modal('hide');
				}	
		}
	});
	return false;

	}
}
//Order Frequency change function 
function orderFrequencyChange(selected_value,display_div){
	var dataString= 'function_name= '+'orderFrequencyChange'+'&selected_value='+selected_value.value;
	//alert(dataString);
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			var date = new Date();
				date.setDate(date.getDate() + parseInt(result));
				var formattedDate = date.toISOString().substr(0, 10);
				display_div.val(formattedDate);
		}
	});
	return false;
}

function load_client_details(){
var table = $('#user_list_table').DataTable( {
	 destroy: true,
        "ajax": "php_controller/list_client_details.php",
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<a style='cursor:pointer;' id='view_id'>Edit</a>"
        } ]
    } );

    $('#user_list_table tbody').on( 'click', '#view_id', function () {
        var data = table.row( $(this).parents('tr') ).data();
         edit_me(data[0],'create_client_modal','client_masters','CustID')
    } );

   
}

//Product 
function product_master_reg(type){
	var product_name=$("#product_name").val();
	
	var product_Description=$("#product_Description").val();
	var product_status_drop=$("#product_status_drop").children("option:selected").val();
	var function_name;
	var product_id;
	if(product_name==""||product_Description==""||product_status_drop==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		//alert(type)
		if(type=="create"){

			function_name="product_master_reg";
			product_id=0;
		}else if(type=="update"){
			function_name="product_master_updade";
			var product_id=$("#product_id").val();
		}
		var dataString= 'function_name= '+function_name+'&product_name='+product_name+'&product_Description='+product_Description+'&product_status_drop='+product_status_drop+'&product_id='+product_id;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Product Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success',' Product Updated Successfully!','');
					
				}else{
					fire_message('success','New Product Added Successfully!','');
					$('#master_reg_form').find(':input').val('');
				}
			}
		});
		return false;
	}
}
//Type
function type_master_reg(type){
	var type_name=$("#type_name").val();
	var Type_status_drop=$("#Type_status_drop").children("option:selected").val();
	var function_name;
	if(type_name==""||Type_status_drop==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		if(type=="update"){
			function_name="type_master_upate";
			var type_id=$("#type_id").val();

		}else if(type=="create"){
			function_name="type_master_reg";
			var type_id=0;
		}
		var dataString= 'function_name= '+function_name+'&type_name='+type_name+'&Type_status_drop='+Type_status_drop+'&type_id='+type_id;
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Type Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success','Type Updated Successfully!','');
					
				}else{
					fire_message('success','New Type Added Successfully!','');
					$('#master_reg_form').find(':input').val('');
				}
			}
		});
		return false;
	}
}
//Size
function size_master_reg(type){
	var size_name=$("#size_name").val();
	var size_Height=$("#size_Height").val();
	var size_Weight=$("#size_Weight").val();
	var size_Gage=$("#size_Gage").val();
	var size_unit=$("#Size_unit_drop").children("option:selected").val();
	var Size_status_drop=$("#Size_status_drop").children("option:selected").val();
	var function_name;

	if(size_name==""||size_Height==""||size_Weight==""||size_Gage==""||size_unit==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		//alert(type)
		if(type=="create"){
			function_name="size_master_reg";
			var size_id=0;
		}else if(type=="update"){
			function_name="size_master_update";
			var size_id=$("#size_id").val();
		}
		var dataString= 'function_name= '+function_name+'&size_name='+size_name+'&size_Height='+size_Height+'&size_Weight='+size_Weight+'&size_Gage='+size_Gage+'&Size_status_drop='+Size_status_drop+'&size_id='+size_id+'&size_unit='+size_unit;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Size Already registered!','Please Try Again');
				}else if(result==2){
					$("#size_list_table").DataTable().ajax.reload(null, false); 
					fire_message('success','Size updated Successfully!','');
					
				}else{
					$("#size_list_table").DataTable().ajax.reload(null, false); 
					fire_message('success','New Size Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');

				}
			}
		});
		return false;
	}
}//Unit
function unit_master_reg(type){
	var Unit_name=$("#Unit_name").val();
	
	var Unit_status_drop=$("#Unit_status_drop").children("option:selected").val();
	var function_name;

	if(Unit_name==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{

		if(type=="create"){
			function_name="unit_master_reg"
			var Unit_id=0;
		}else if(type=="update"){
			function_name="unit_master_upate"
			var Unit_id=$("#Unit_id").val();
		}
		var dataString= 'function_name= '+function_name+'&Unit_name='+Unit_name+'&Unit_status_drop='+Unit_status_drop;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Unit Already registered!','Please Try Again');
				}else{
					fire_message('success','New Unit Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}//Order Status
function order_status_master_reg(type){
	var OSShortName=$("#OSShortName").val();
	var OSName=$("#OSName").val();
	var OSValue=$("#OSValue").val();
	var Order_Status__status_drop=$("#Order_Status__status_drop").children("option:selected").val();
	var function_name;

	if(OSShortName==""||OSName==""||OSValue==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{


		if(type=="create"){
			function_name="order_status_master_reg"
			var OSID=0;
		}else if(type=="update"){
			function_name="order_status_master_update"
			var OSID=$("#OSID").val();
		}
		var dataString= 'function_name= '+function_name+'&OSShortName='+OSShortName+'&OSName='+OSName+'&OSValue='+OSValue+'&Order_Status__status_drop='+Order_Status__status_drop+'&OSID='+OSID;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Order Status Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success','Order Status Updated Successfully!','');
					$('#master_reg_forms').find(':input').val('');
					$("#Order_Status_list_table").DataTable().ajax.reload(null, false); 
					jQuery("#edit_orderStatus_modal").modal('hide');
				}else{
					fire_message('success','New Type Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
					$("#Order_Status_list_table").DataTable().ajax.reload(null, false); 

				}
			}
		});
		return false;
	}
}//Machine
function Machine_master_reg(type){
	var Machine=$("#Machine").val();
	var MShortName=$("#MShortName").val();
	var CapacityPerShift=$("#CapacityPerShift").val();
	var MPurchDate=$("#MPurchDate").val();
	var MNextServiceDate=$("#MNextServiceDate").val();
	var MachineDetals=$("#MachineDetals").val();
	var Machine_status_drop=$("#Machine_status_drop").children("option:selected").val();
	var function_name;

	if(Machine==""||MShortName==""||CapacityPerShift==""||MPurchDate==""||MNextServiceDate==""||MachineDetals==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{

		if(type=="create"){
			function_name="Machine_master_reg"
			var MID=0;
		}else if(type=="update"){
			function_name="Machine_master_update"
			var MID=$("#MID").val();
		}
		var dataString= 'function_name= '+function_name+'&Machine='+Machine+'&MShortName='+MShortName+'&CapacityPerShift='+CapacityPerShift+'&MPurchDate='+MPurchDate+'&MNextServiceDate='+MNextServiceDate+'&MachineDetals='+MachineDetals+'&Machine_status_drop='+Machine_status_drop+'&MID='+MID;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Machine Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success','Machine Details Updated!','');
				}else{
					fire_message('success','New Machine Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}
function colours_master_reg(){
	var Colour=$("#Colour").val();
	var CLShort=$("#CLShort").val();
	var colours_status_drop=$("#colours_status_drop").children("option:selected").val();


	if(Colour==""||CLShort==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'colours_master_reg'+'&Colour='+Colour+'&CLShort='+CLShort+'&colours_status_drop='+colours_status_drop;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Colour Already registered!','Please Try Again');
				}else{
					fire_message('success','New Colour Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}//Material
function Material_master_reg(){
	var MatCategory=$("#MatCategory").val();
	var MatCatShort=$("#MatCatShort").val();
	var MinStockLevel=$("#MinStockLevel").val();
	var MaxStockLevel=$("#MaxStockLevel").val();
	var StockUnit=$("#StockUnit").val();
	var MatType=$("#MatType").val();
	var Mat_status_drop=$("#Mat_status_drop").children("option:selected").val();


	if(MatCategory==""||MatCatShort==""||MinStockLevel==""||MaxStockLevel==""||StockUnit==""||MatType==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name= '+'Material_master_reg'+'&MatCategory='+MatCategory+'&MatCatShort='+MatCatShort+'&MinStockLevel='+MinStockLevel+'&MaxStockLevel='+MaxStockLevel+'&StockUnit='+StockUnit+'&MatType='+MatType+'&Mat_status_drop='+Mat_status_drop;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Machine Already registered!','Please Try Again');
				}else{
					fire_message('success','New Machine Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}//Material
function Material_main_master_reg(){
	var MaterialItem=$("#MaterialItem").val();
	var MatCatShort=$("#MatCatShort").val();
	var MatCatID=$("#MatCatID").val();
	var Unit=$("#Unit").val();
	var Mat_status_drop=$("#Mat_status_drop").children("option:selected").val();

	if(MaterialItem==""||MatCatShort==""||MatCatID==""||Unit==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name='+'Material_main_master_reg'+'&MaterialItem='+MaterialItem+'&MatCatShort='+MatCatShort+'&MatCatID='+MatCatID+'&Unit='+Unit+'&Mat_status_drop='+Mat_status_drop;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Machine Already registered!','Please Try Again');
				}else{
					fire_message('success','New Machine Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}function purchase_main_master_reg(types){

//	alert(types)
	var PurchaseID=$("#PurchaseID").val();
	var supplier_purchase_Master=$("#supplier_purchase_Master_hidden").val();
	var Material_purchase_Master=$("#Material_purchase_Master_hidden").val();
	var Date_purchase_Master=$("#Date_purchase_Master").val();
	var Purchase_Unit_purchase_Master=$("#Purchase_Unit_purchase_Master").val();
	var Purchase_Qty_purchase_Master=$("#Purchase_Qty_purchase_Master").val();
	var function_name;
	if(supplier_purchase_Master==""||Material_purchase_Master==""||Date_purchase_Master==""||Purchase_Unit_purchase_Master==""||Purchase_Qty_purchase_Master==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		if(types=="create"){
			function_name="purchase_main_master_reg";

		}else{
			function_name="purchase_main_master_update";

		}
	//	alert(function_name);
		var dataString= 'function_name='+function_name+'&supplier_purchase_Master='+supplier_purchase_Master+'&Material_purchase_Master='+Material_purchase_Master+'&Date_purchase_Master='+Date_purchase_Master+'&Purchase_Unit_purchase_Master='+Purchase_Unit_purchase_Master+'&Purchase_Qty_purchase_Master='+Purchase_Qty_purchase_Master+'&PurchaseID='+PurchaseID;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				//alert(result);
				if(result==1){
					fire_message('error','Machine Already registered!','Please Try Again');
				}else if(result==2){
					fire_message('success',' Purchase Details Updated Successfully!','');
				}else{
					fire_message('success','New Machine Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}//Material
function Suppliers_main_master_reg(){
	var Supplier=$("#Supplier").val();
	var SupShortName=$("#SupShortName").val();
	var SupAddress=$("#SupAddress").val();
	var SPDistrict=$("#SPDistrict").val();
	var SPState=$("#SPState").val();
	var SPCountry=$("#SPCountry").val();
	var SPPin=$("#SPPin").val();
	var SPContactNo=$("#SPContactNo").val();
	var SPEmail=$("#SPEmail").val();
	var SPMobile=$("#SPMobile").val();
	var SPGST=$("#SPGST").val();
	
	var Mat_status_drop=$("#Mat_status_drop").children("option:selected").val();

	if(Supplier==""||SupShortName==""||SupAddress==""||SPDistrict==""||SPState==""||SPCountry==""||SPPin==""||SPContactNo==""||SPEmail==""||SPMobile==""||SPGST==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name='+'Suppliers_main_master_reg'+'&Supplier='+Supplier+'&SupShortName='+SupShortName+'&SupAddress='+SupAddress+'&SPDistrict='+SPDistrict+'&SPState='+SPState+'&SPCountry='+SPCountry+'&SPPin='+SPPin+'&SPContactNo='+SPContactNo+'&SPEmail='+SPEmail+'&SPMobile='+SPMobile+'&SPGST='+SPGST+'&Mat_status_drop='+Mat_status_drop;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Machine Already registered!','Please Try Again');
				}else{
					fire_message('success','New Machine Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}//Material
function Employees_main_master_reg(){
	var EName=$("#EName").val();
	var EShortName=$("#EShortName").val();
	var EDesigID=$("#EDesigID").val();
	var EDOB=$("#EDOB").val();
	var EAddress=$("#EAddress").val();
	var EEmail=$("#EEmail").val();
	var EMobile=$("#EMobile").val();
	var UserName=$("#UserName").val();
	var Password=$("#Password").val();
	var EDOJ=$("#EDOJ").val();
	var Mat_status_drop=$("#Mat_status_drop").children("option:selected").val();

	if(EName==""||EShortName==""||EDesigID==""||EDOB==""||EAddress==""||EEmail==""||EMobile==""||UserName==""||Password==""||EDOJ==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		var dataString= 'function_name='+'Employees_main_master_reg'+'&EName='+EName+'&EShortName='+EShortName+'&EDesigID='+EDesigID+'&EDOB='+EDOB+'&EAddress='+EAddress+'&EEmail='+EEmail+'&EMobile='+EMobile+'&UserName='+UserName+'&Password='+Password+'&EDOJ='+EDOJ+'&Mat_status_drop='+Mat_status_drop;
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				if(result==1){
					fire_message('error','Machine Already registered!','Please Try Again');
				}else{
					fire_message('success','New Machine Added Successfully!','');
					$('#master_reg_forms').find(':input').val('');
				}
			}
		});
		return false;
	}
}

 $("#Order_Products").autocomplete({
      source: "php_controller/product_search.php",
      minLength: 0,
      select: function( event, ui ) {
      //	alert(ui.item.CustID)
            event.preventDefault();
            $("#Order_Products_id_hidden").val(ui.item.ProdID);
            $("#Order_Products").val(ui.item.value);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });; 

 $("#Order_customer").autocomplete({
      source: "php_controller/customer_search.php",
       minLength: 0,
      select: function( event, ui ) {
      //	alert(ui.item.CustID)
            event.preventDefault();
            $("#Order_customer_id_hidden").val(ui.item.CustID);
            $("#Order_customer").val(ui.item.value);
            $("#pre_order_btn").prop( "disabled", false );

        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });
 $("#Order_Type").autocomplete({
      source: "php_controller/types_search.php",
      minLength: 0,
      select: function( event, ui ) {
      //	alert(ui.item.CustID)
            event.preventDefault();
            $("#Order_Type_id_hidden").val(ui.item.TypeCode);
            $("#Order_Type").val(ui.item.value);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     })

 $("#Order_Size").autocomplete({
      source: "php_controller/size_search.php",
      minLength: 0,
      select: function( event, ui ) {
      //	alert(ui.item.CustID)
            event.preventDefault();
            $("#Order_Size_id_hidden").val(ui.item.SID);
            $("#Order_Size").val(ui.item.value);
            $("#Order_Size_hidden_Height").val(ui.item.Height);
            $("#Order_Size_hidden_Weight").val(ui.item.Weight);
            $("#Order_Size_hidden_Gage").val(ui.item.Gage);
            $("#Order_Size_hidden_unit").val(ui.item.unit);
            $("#Quentity_Type").prop( "disabled", false );
		  	$("#order_number").prop( "disabled", false );
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });

  	$("#add_order_id").autocomplete({
      source: "php_controller/order_id_search.php",
      minLength: 0,
      select: function( event, ui ) {
      	//alert(ui.item.OrdID)
            event.preventDefault();
            //alert(ui.item.customer_id);
           // alert(ui.item.customer_name);
            $("#add_order_id_hidden").val(ui.item.OrdID);
            $("#add_order_id").val(ui.item.value);
            $("#add_order_customer").val(ui.item.customer_name);
            $("#add_order_size").val(ui.item.size_name);
            $("#add_order_sizeHidden").val(ui.item.size_id_hd);
            $("#add_order_Qty").val(ui.item.Qty);
            $("#add_order_Unit").val(ui.item.Unit);
           // $("#order_kg").prop( "disabled", false );

        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });
  	$("#new_order_Machine").autocomplete({
      source: "php_controller/machine_search.php",
      minLength: 0,
      select: function( event, ui ) {
      	//alert(ui.item.OrdID)
            event.preventDefault();
            //alert(ui.item.customer_id);
           // alert(ui.item.customer_name);
            $("#new_order_Machine").val(ui.item.value);
            $("#new_order_Machine_hidden").val(ui.item.MID);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });
    $("#worklog_machine_name").autocomplete({
      source: "php_controller/machine_search.php",
      minLength: 0,
      select: function( event, ui ) {
      	//alert(ui.item.OrdID)
            event.preventDefault();
            //alert(ui.item.customer_id);
           // alert(ui.item.customer_name);
            $("#worklog_machine_name").val(ui.item.value);
            $("#worklog_machine_name_hidden").val(ui.item.MID);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });
 $(".supplier_purchase_Master_auto").autocomplete({
      source: "php_controller/supplier_search.php",
      minLength: 0,
      select: function( event, ui ) {
      	//alert(ui.item.OrdID)
            event.preventDefault();
            //alert(ui.item.customer_id);
           // alert(ui.item.customer_name);
            $(".supplier_purchase_Master_auto").val(ui.item.value);
            $(".supplier_purchase_Master_hidden_auto").val(ui.item.SPID);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });
     $(".Material_purchase_Master_auto").autocomplete({
      source: "php_controller/material_search.php",
      minLength: 0,
      select: function( event, ui ) {
      	//alert(ui.item.OrdID)
            event.preventDefault();
            //alert(ui.item.customer_id);
           // alert(ui.item.customer_name);
            $(".Material_purchase_Master_auto").val(ui.item.value);
            $(".Material_purchase_Master_hidden_auto").val(ui.item.MINo);
        }
    }).focus(function(){    
    //alert($(this).val())        
       $(this).autocomplete('search', $(this).val())
     });

 

 function loadStatus_on_modal(data){
 	if(data=='all'){
 		reset_order_form()
 		
 	}
 	
 	$("#order_mdl_btn").html("Save");
	$("#order_mdl_btn").attr("onclick","create_new_order('create_new_order')");
//	$('#order_reg_forms').find(':input').val('');
 	var dataString= 'function_name='+'loadStatus_on_modal';
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				$("#status_section").html(result)
				if(data!="all"){
					for (var i=0; i < data.length ;i++) {
			 		$("#status_section").find('[value=' + data[i] + ']').prop("checked", true);
					}
						
				}
				
			}
		});
		return false;
 }
 function fetch_Order_unit_drop(){

 	var dataString= 'function_name= '+'fetch_Order_unit_drop';
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==""){
				$("#Order_unit").html("<option>Select</option>");
			}else{
				$("#Order_unit").empty();
				$("#Order_unit").html(result);
			}			
		}
	});
	return false;


 } 

 function load_order_table(){
 	var dataString= 'function_name= '+'load_order_table';
	$.ajax({
		type: "POST",
		url: "php_controller/list_order.php",
		cache: false,
		data: dataString,
		success: function(result){
			//console.log(result); 
			$("#order_tableBody").html(result);		
		}
	});
	return false;

 } 

 function load_purchase_table(){

 	var dataString= 'function_name= '+'load_purchase_table';
	$.ajax({
		type: "POST",
		url: "php_controller/list_purchase.php",
		cache: false,
		data: dataString,
		success: function(result){
			console.log(result); 
			$("#purchase_tableBody").html(result);		
		}
	});
	return false;

 }
function calculate_order_Pending_Amount(){
	var order_Total_Amount=$("#order_Total_Amount").val();
	var order_Advance_Amount=$("#order_Advance_Amount").val();
	var pending_amount=order_Total_Amount-order_Advance_Amount;
	$("#order_Pending_Amount").val(pending_amount);
}

function setInFront(element){

	$("#"+element).css({"z-index":"9999999"});
}
function edit_me(id,target_name,table,key){


	var dataString= 'id='+id;
	$.ajax({
		type: "POST",
		url: "php_controller/getData_"+table+".php",
		cache: false,
		data: dataString,
		success: function(result){
			var resultfinal =JSON.parse(result);
			setData(resultfinal,target_name);
		}
	});
	return false;

	
}
function delete_me(id,table,key,dataTable_name,functionName){

Swal.fire({
  title: 'Do you want to delete the entry?',
  showDenyButton: true,
  showCancelButton: true,
  denyButtonText: `Delete`,
  showConfirmButton: false,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  var dataString= 'function_name='+'delete_me'+'&table='+table+'&key='+key+'&id='+id;
  if (result.isDenied) {
  	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==1){
				Swal.fire('Your entry has been removed!', '', 'success');
        		 //$('#order_list_table').dataTable( ).api().ajax.reload();
        		 //$('#order_list_table').clear();
        		 refreshDataTable(dataTable_name,functionName);
				
			}else{
					Swal.fire('Something went wrong!', '', 'info');
			}
			
		}
	});
	return false;
    
  } 
})
	

	
}
function refreshDataTable(tableName,function_name){

				 if(function_name=="load_order_table"){
				 	load_order_table();
				 }else if(function_name=="load_purchase_table"){
				 	load_purchase_table();
				 }else if(function_name=="load_customer_table"){
				 	$("#user_list_tables").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_product_table"){
				 	$("#Country_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_types_table"){
				 	$("#Country_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_size_table"){
				 	$("#size_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_uits_table"){
				 	$("#unit_list_table").DataTable().ajax.reload(null, false); 
				 }else if(function_name=="load_orderStatus_table"){
				 	$("#Order_Status_list_table").DataTable().ajax.reload(null, false); 
				 }
}


function resetSaveBtns(btn_id,function_name,form_name){
	//alert(btn_id+function_name);
	$("#"+btn_id).html("save");
	$("#"+btn_id).attr("onclick",""+function_name+"('create')");
	$('#master_reg_form').find(':input').val('');
	fetch_autoIncrmnt_value("client_masters",$('.client_nexID'));
	//$('#'+form_name).find(':input').val('');

}

//Function for set current date and time in order section
$.fn.setNow = function (onlyBlank) {
  var now = new Date($.now())
    , year
    , month
    , date
    , hours
    , minutes
    , seconds
    , formattedDateTime
    ;

  year = now.getFullYear();
  month = now.getMonth().toString().length === 1 ? '0' + (now.getMonth() + 1).toString() : now.getMonth() + 1;
  date = now.getDate().toString().length === 1 ? '0' + (now.getDate()).toString() : now.getDate();
  hours = now.getHours().toString().length === 1 ? '0' + now.getHours().toString() : now.getHours();
  minutes = now.getMinutes().toString().length === 1 ? '0' + now.getMinutes().toString() : now.getMinutes();
  seconds = now.getSeconds().toString().length === 1 ? '0' + now.getSeconds().toString() : now.getSeconds();

  formattedDateTime = year + '-' + month + '-' + date + 'T' + hours + ':' + minutes + ':' + seconds;

  if ( onlyBlank === true && $(this).val() ) {
    return this;
  }

  $(this).val(formattedDateTime);

  return this;
}

$(function () {
    // Handler for .ready() called.
    $('#Order_date').setNow();

});


/*
$('#order_kg').on('input', function() {
   $("#order_kg").prop( "disabled", false );
    $("#order_number").prop( "disabled", true );
});*/

$("#Quentity_Type").change(function(){
	$("#Order_weight_total").val("");
	var Quentity_Type=$(this).val();
	if(Quentity_Type==0){
		$("#order_kg").prop( "disabled", true );
		$("#order_kg").val("");
		$("#order_number").val("");
		$("#order_number").prop( "disabled", false );
		Quentity_Type_flag=1;

	}else{
		$("#order_kg").prop( "disabled", false );
		$("#order_number").prop( "disabled", true );
		$("#order_number").val("");
		$("#order_kg").val("");
		Quentity_Type_flag=2;
	}
	//alert(Quentity_Type);
	
});

$('#order_number').on('input', function() {
  calculate_oder_weight();
  calculate_total_amount();
});

$('#order_kg').on('input', function() {
  calculate_oder_weight();
  calculate_total_amount();
});


function calculate_oder_weight(){
	var Order_Size_Height =$("#Order_Size_hidden_Height").val();
	var Order_Size_Weight =$("#Order_Size_hidden_Weight").val();
	var Order_Size_Gage =$("#Order_Size_hidden_Gage").val();
	var Order_Size_unit =$("#Order_Size_hidden_unit").val();
	if(Quentity_Type_flag==1){
		if(Order_Size_unit=="centimeter"){

			Order_Size_Height=Order_Size_Height/2.54;
			Order_Size_Weight=Order_Size_Weight/2.54;
			Order_Size_Gage=Order_Size_Gage/2.54;
		}
		var order_number=$("#order_number").val();
		var bag_weight_for_thousand=(parseInt(Order_Size_Height)*parseInt(Order_Size_Weight)*parseInt(Order_Size_Gage))/3300;
		var weight_of_one_bag=bag_weight_for_thousand/1000;
		var reqd_number=weight_of_one_bag*parseInt(order_number);
		$("#order_kg").val(reqd_number.toFixed(2));
	}else{
		var order_kg=$("#order_kg").val();
		var bag_weight_for_thousand=(parseInt(Order_Size_Height)*parseInt(Order_Size_Weight)*parseInt(Order_Size_Gage))/3300;
		var weight_of_one_bag=bag_weight_for_thousand/1000;
		var weight_of_orderd_bag=weight_of_one_bag*order_kg;
		$("#order_number").val((weight_of_orderd_bag*100).toFixed(1));

		//alert(1)
	}
	/* 1000bags = (Width x Height x Gage)/3300 
	 Weight of Bag = Kilo of weight/1000*/
}


$('#order_per_rate').on('input', function() {
	var order_kg= $("#order_kg").val();
	if(order_kg==''){
			alert("Product weight can't be empty");
			$("#order_per_rate").val("");
			

	}else{
		 calculate_total_amount();
	}
 
});
$('#order_per_rate').on('input', function() {
  calculate_total_amount();
});

function calculate_total_amount(){
	var order_kg= $("#order_kg").val();
	var order_rate=$("#order_per_rate").val();
	var totalAmount=order_kg*order_rate;
	$("#order_Total_Amount").val(totalAmount.toFixed(1))
}

function reset_order_form(){
	$('#order_reg_forms').find(':input').val('');
	
	//fetch_autoIncrmnt_value("orders",$('#Order_id'));
	 $('#Order_date').setNow();
	  $('#Quentity_Type').val(0);
	  $('#order_per').val('kg');
	  $("#Quentity_Type").prop( "disabled", true );
	$("#order_number").prop( "disabled", true );
	var today = new Date().toLocaleString('sv-SE').slice(0, 16).replace(' ', 'T');
	var Order_date = $("#Order_date").val();
	document.getElementById('Order_Committed_Date').setAttribute("min", Order_date);
	fetch_autoIncrmnt_value("orders",$('.Order_id_class'));
}




// Load size datatable on order master 
$("#modal-lga").on('shown.bs.modal', function () {
         var table = $('#size_list_table').DataTable( {
         //	destroy: true,
        "ajax": "php_controller/list_size.php",
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<a style='cursor:pointer;' href='#'  id='view_id'>Edit</a> | <a style='color:red;' id='delete_id' href='#' >Delete</a>"
        } ]
    } );

    $('#size_list_table tbody').on( 'click', '#view_id', function () {
        var data = table.row( $(this).parents('tr') ).data();
        //alert(data[0]);
        //alert( data[0] +"'s salary is: "+ data[ 5 ] );
       edit_me(data[0],'edit_size_modal_self','size','SID');
    } );

    $('#size_list_table tbody').on( 'click', '#delete_id', function () {
        var data = table.row( $(this).parents('tr') ).data();
        delete_me(data[0],'size','SID','size_list_table','load_size_table')
    });
   });

$("#create_client_modal").on('shown.bs.modal', function () {  
	$('#company_Name').focus();
});
