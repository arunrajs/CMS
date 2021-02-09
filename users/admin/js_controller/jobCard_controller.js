var list_name=1;
var list_arry=[];
var resultCount=0;
function add_order_list(){
	var add_order_id=$("#add_order_id").val();
	var add_order_customer=$("#add_order_customer").val();
	var add_order_size=$("#add_order_size").val();
	var add_order_sizeHidden=$("#add_order_sizeHidden").val();
	var add_order_Qty=$("#add_order_Qty").val();
	var add_order_Unit=$("#add_order_Unit").val();
	var tp_status_drop=$("#tp_status_drop").children("option:selected").val()
	var add_order_remark=$("#add_order_remark").val();
	var add_order_color=$("#add_order_color").val();
	

	if(add_order_id==""||add_order_customer==""||add_order_size==""||add_order_Qty==""||add_order_Unit==""||tp_status_drop==""||add_order_remark==""||add_order_color==""){
		fire_message('error','Please enter mandatory fields !','');
	}else{
		$("#jobcard_list_table").append("<tr role='row' class='odd' id='"+list_name+"'><td class='sorting_1'>"+add_order_id+"</td><td>"+add_order_customer+"</td><td>"+list_name+"</td><td>"+add_order_size+"</td><td class='hidden_tbl'>"+add_order_sizeHidden+"</td><td>"+add_order_Qty+"</td><td>"+add_order_Unit+"</td><td>"+tp_status_drop+"</td><td>"+add_order_color+"</td><td>"+add_order_remark+"</td><td><a href='#' class='remove_txt' id='"+list_name+"' onClick='removeTableCell("+list_name+")'>Remove</a></td></tr>");
		//list_arry.push(list_name,add_order_id,add_order_customer,add_order_Qty,add_order_Unit,tp_status_drop,add_order_remark)
		list_name++;
		//$("#add_order_modal").hide();
		jQuery("#add_order_modal").modal('hide');
		//alert(list_name);
		//alert(list_arry);
	}
	
}

function clearData(){
	$("#add_order_id").val("");
	$("#add_order_customer").val("");
	$("#add_order_size").val("");
	$("#add_order_Qty").val("");
	$("#add_order_Unit").val("");
	//var tp_status_drop=$("#tp_status_drop").children("option:selected").val()
	var add_order_remark=$("#add_order_remark").val("");

}

function create_new_job(){

	var JobCard_id=$("#JobCard_id").val();
	var JobCard_date=$("#JobCard_date").val();
	var new_order_Machine=$("#new_order_Machine").val();
	var new_order_Machine_hidden=$("#new_order_Machine_hidden").val();
	if(JobCard_date==""||new_order_Machine==""){

		fire_message('error','Please enter mandatory fields !','');

	}else if(list_name<2){
		fire_message('error','Please Add at least one order','');
	}else{
		$('#jobcard_list_table tbody>tr').each(function (i) {
			var RealrowCount = $('#jobcard_list_table tr').length;
			var CorrectedCount=RealrowCount-1;	
        	var $tds = $(this).find('td'),
            OrdId = $tds.eq(0).text(),
            Customer = $tds.eq(1).text(),
            SLNo = $tds.eq(2).text();
            Size = $tds.eq(3).text();
            Size_hidden = $tds.eq(4).text();
            Qty = $tds.eq(5).text();
            Unit = $tds.eq(6).text();
            TP = $tds.eq(7).text();
            Colour = $tds.eq(8).text();
            Remark = $tds.eq(9).text();
        var dataString='function_name='+'create_new_job'+'&JobCard_id='+JobCard_id+'&JobCard_date='+JobCard_date+'&new_order_Machine_hidden='+new_order_Machine_hidden+'&OrdId='+OrdId+'&Customer='+Customer+'&SLNo='+SLNo+'&Size='+Size+'&Size_hidden='+Size_hidden+'&Qty='+Qty+'&Unit='+Unit+'&TP='+TP+'&Colour='+Colour+'&Remark='+Remark;
      //  alert(dataString);

		$.ajax({
			type: "POST",
			url: "php_controller/create_new_job_controller.php",
			cache: false,
			data: dataString,
			success: function(result){
				resultCount++
				//alert("resultCount "+resultCount);
				//alert(CorrectedCount);
				if(resultCount==CorrectedCount){
					fire_message('success','New Job Card Created Successfully!','');
					jQuery("#jobCard_modal").modal('hide');
				}
			}


		});
		//return false;




    });

	}

	/*JobCard_id
	JobCard_date
	new_order_Machine
	*/  
    
}
function removeTableCell(id){
	$('table#jobcard_list_table tr#'+id).remove();
	list_name--;
}