
function setData(data,target_name){

	if(target_name=="modal-lg"){

		$("#Order_id").val(data[0]);
		$("#Order_date").val(convet_date(data[1]));
		$("#Order_customer").val(data[2]);
		$("#Order_customer_id_hidden").val(data[22]);
		$("#Order_Products").val(data[3]);
		$("#Order_Products_id_hidden").val(data[23]);
		$("#Order_Type").val(data[4]);
		$("#Order_Type_id_hidden").val(data[24]);
		$("#Order_Size").val(data[5]);
		$("#Order_Size_id_hidden").val(data[25]);
		$("#order_kg").val(data[7]);
		$("#order_per").children("option:selected").val(data[8]);
		$("#Order_Committed_Date").val(convet_date(data[15]));
		$("#Order_Description").val(data[11]);
		$("#order_Total_Amount").val(data[12]);
		$("#order_Advance_Amount").val(data[13]);
		$("#order_Pending_Amount").val(data[14]);
		$("#order_number").val(data[6]);
		$("#order_per_rate").val(data[9]);
		loadStatus_on_modal(data[26]);
		$("#order_mdl_btn").html("Update");
		$("#order_mdl_btn").attr("onclick","create_new_order('update')");
	}else if(target_name=="edit_purchase_modal"){
		//alert(1)
		$("#PurchaseID").val(data[0]);
		$("#supplier_purchase_Master").val(data[12]);
		$("#supplier_purchase_Master_hidden").val(data[1]);

		$("#Material_purchase_Master").val(data[11]);
		$("#Material_purchase_Master_hidden").val(data[3]);

		$("#Date_purchase_Master").val(data[2]);
		$("#Purchase_Unit_purchase_Master").val(data[5]);
		$("#Purchase_Qty_purchase_Master").val(data[4]);
		
	}else if(target_name=="create_client_modal"){
		//alert(1)
		$("#client_reg_ID").val(data[0]);
		$("#client_name").val(data[2]);
		$("#client_short_name").val(data[3]);
		$("#client_Address").val(data[4]);
		$("#client_MobileNo").val(data[5]);
		$("#client_ContactPerson").val(data[6]);
		$("#client_email_id").val(data[7]);
		$("#client_wesite").val(data[8]);
		$("#client_create_btn").html("Update");
		$("#client_create_btn").attr("onclick","register_new_client('update')");
		
	}else if(target_name=="edit_product_modal"){
		//alert(1)
		$("#product_id").val(data[0]);
		$("#product_name").val(data[1]);
		$("#product_Description").val(data[2]);
		$("#product_status_drop").val(data[3]);

		//$("#client_create_btn").html("Update");
		//$("#client_create_btn").attr("onclick","register_new_client('update')");
		
	}else if(target_name=="edit_type_modal"){
	//alert(1)
		$("#type_id").val(data[0]);
		$("#type_name").val(data[1]);
		$("#Type_status_drop").val(data[2]);
		
		
	}else if(target_name=="edit_size_modal"){
	//alert(1)
		$("#master_size_forms").remove();
		$("#master_reg_formss").remove();
		$("#size_id").val(data[0]);
		$("#size_name").val(data[1]);
		$("#size_Height").val(data[2]);
		$("#size_Weight").val(data[3]);
		$("#size_Gage").val(data[4]);
		$("#Size_status_drop").val(data[5]);
	}else if(target_name=="edit_size_modal_self"){
	//alert(1)
		$("#master_reg_formss").remove();
		$("#size_id").val(data[0]);
		$("#size_name").val(data[1]);
		$("#size_Height").val(data[2]);
		$("#size_Weight").val(data[3]);
		$("#size_Gage").val(data[4]);
		$("#Size_status_drop").val(data[5]);
		$("#Size_unit_drop").val(data[6]);
		$("#reg_submit_btn").html("update");
		$("#reg_submit_btn").attr("onclick","size_master_reg('update')");

	}else if(target_name=="edit_units_modal"){

		$("#Unit_id").val(data[0]);
		$("#Unit_name").val(data[1]);
		$("#Unit_status_drop").val(data[2]);
		
	}else if(target_name=="edit_orderStatus_modal"){

		$("#OSID").val(data[0]);
		$("#OSShortName").val(data[1]);
		$("#OSName").val(data[2]);
		$("#OSValue").val(data[3]);
		$("#Order_Status__status_drop").val(data[4]);
		
	}else if(target_name=="edit_machine_modal"){

		$("#MID").val(data[0]);
		$("#Machine").val(data[1]);
		$("#MShortName").val(data[2]);
		$("#MPurchDate").val(data[3]);
		$("#MNextServiceDate").val(data[4]);
		$("#MachineDetals").val(data[5]);
		$("#CapacityPerShift").val(data[6]);
		$("#Machine_status_drop").val(data[7]);
	
		
	}

	if(target_name!="edit_size_modal_self"){
			jQuery("#"+target_name).modal('show');
	}
	




}
function convet_date(dateString){
	var dateVal = new Date(dateString);
    var day = dateVal.getDate().toString().padStart(2, "0");
        var month = (1 + dateVal.getMonth()).toString().padStart(2, "0");
        var hour = dateVal.getHours().toString().padStart(2, "0");
        var minute = dateVal.getMinutes().toString().padStart(2, "0");
        var sec = dateVal.getSeconds().toString().padStart(2, "0");
        var ms = dateVal.getMilliseconds().toString().padStart(3, "0");
        var inputDate = dateVal.getFullYear() + "-" + (month) + "-" + (day) + "T" + (hour) + ":" + (minute) + ":" + (sec) + "." + (ms);
        return inputDate;
}


