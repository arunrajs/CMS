

function validation_application(){

	var app_bard_number= $('#app_bard_number').val();	
	var app_building_number= $('#app_building_number').val();	
	var app_date= $('#app_date').val();
	if(app_bard_number.lenght==0 || app_building_number.lenght==0 ||app_date.lenght=0){

		alert("Please Enter the mandatory details!");
	}


}

function preview_application() {
		validation_application();



}

function upload_documents(){

	 var file_data_1 = $('#documents_aadhar').prop('files')[0];  
	 var file_data_2 = $('#documents_housetax').prop('files')[0];  
	 //Image validation (size not mentioned)
	 if(file_data_1.type=="application/pdf" ){
	 	var file_data_1 = new FormData();                  
    	file_data_1.append('file', file_data,"test.pdf");
    	//var user_mobile_number=$("#user_mobile_number").val();
		//settingSection(user_mobile_number)                  
    $.ajax({
        url: 'php_controller/upload.php', // point to server-side PHP script 
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            //alert(php_script_response); // display response from the PHP script, if any
        }
     });

	 }else{
	 	//alert("invalid file type. Please select .jpg or .jpeg format.");
	 }
    
}