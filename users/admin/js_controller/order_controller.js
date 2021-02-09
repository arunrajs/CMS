function create_new_order(type){

	var list_status = [];
	var array_list =$('input[name="status_list"]:checked').each(function() {
		list_status.push(this.value)
	});
	//alert(list_values);
	var Order_id=$("#Order_id").val();
	var Order_date=$("#Order_date").val();
	var Order_customer=$("#Order_customer_id_hidden").val();
	var Order_Products=$("#Order_Products_id_hidden").val();
	var Order_Type=$("#Order_Type_id_hidden").val();
	var Order_Size=$("#Order_Size_id_hidden").val();

	//var Order_unit=$("#Order_unit").children("option:selected").val();
	//var order_Quantity=$("#order_Quantity").val();
	
	var Quentity_Type=$("#Quentity_Type").children("option:selected").val();
	var order_number=$("#order_number").val();
	var order_kg=$("#order_kg").val();

	var order_per=$("#order_per").children("option:selected").val();
	var order_per_rate=$("#order_per_rate").val();

	var Order_Committed_Date=$("#Order_Committed_Date").val();
	var Order_Description=$("#Order_Description").val();
	var order_Total_Amount=$("#order_Total_Amount").val();
	var order_Advance_Amount=$("#order_Advance_Amount").val();
	var order_Pending_Amount=$("#order_Pending_Amount").val();
	var function_name;

	if(Order_date==""||Order_customer==""||Order_Products==""||Order_Type==""||Order_Size==""||order_number==""||order_per==""||Order_Committed_Date==""||Order_Description==""||order_Total_Amount==""||order_Advance_Amount==""||order_kg==""||order_per_rate==""||order_Pending_Amount==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		if(type=="create_new_order"){
				function_name="create_new_order";
		}else if(type=="update"){
			function_name="update_order";
		}
		var dataString='function_name='+function_name+'&Order_date='+Order_date+'&Order_customer='+Order_customer+'&Order_Products='+Order_Products+'&Order_Type='+Order_Type+'&Order_Size='+Order_Size+'&order_number='+order_number+'&order_per='+order_per+'&Order_Committed_Date='+Order_Committed_Date+'&Order_Description='+Order_Description+'&order_Total_Amount='+order_Total_Amount+'&order_Advance_Amount='+order_Advance_Amount+'&order_Pending_Amount='+order_Pending_Amount+'&Order_id='+Order_id+'&order_kg='+order_kg+'&order_per_rate='+order_per_rate+'&list_status='+list_status;
		
		//alert(dataString);
		$.ajax({
			type: "POST",
			url: "php_controller/order_reg_controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				console.log(result);
				if(result==1){
					fire_message('error','Order Already registered!','Please Try Again');
				}else if(result==0){
					fire_message('success','New Order Created Successfully!','');
					$('#order_reg_forms').find(':input').val('');
					fetch_autoIncrmnt_value("orders",$('#Order_id'));
					jQuery("#modal-lg").modal('hide');
					refreshDataTable('order_list_table','load_order_table');
					reset_order_form();

				}else if(result==2){

					fire_message('success',' Order updated Successfully!','');
					jQuery("#modal-lg").modal('hide');
					refreshDataTable('order_list_table','load_order_table');
					reset_order_form();

				}
			}
		});
		return false;
	}
}


