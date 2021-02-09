
//Function for checking user mobile number.
var user_mobile_number_chk_flag=false;
var user_email_chk_flag=false;
var image_chk="undefined";


function check_user_mobile_number(){
	
	var user_mobile_number=$("#user_mobile_number").val();
	//console.log(employee_id);
	//var dataString = 'function_name= '+'check_mobile_number'+'user_mobile_number='+ user_mobile_number;
	var dataString= 'function_name= '+'check_mobile_number'+'&user_mobile_number='+ user_mobile_number;
	//alert(dataString)
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			//alert(result)
			if(result==0 && user_mobile_number.toString().length==10){				
				$("#id_okay").show();
				$("#id_not_okay").hide();
				user_mobile_number_chk_flag=true;
				user_email_chk_flag=true;
				registration_form_validation();
				}
			else{
				if(user_mobile_number.length<10){

					fire_message('error',"Please Enter the 10 digit mobile number !")
				}else{
					fire_message('error',"Mobile number already register!")
				}
				
				$("#id_okay").hide();
				$("#id_not_okay").show();
				user_mobile_number_chk_flag=false;
			}
	}
});
	return false;
}
function check_user_email(){
	var user_email=$("#user_email").val();
	//alert(isValidEmailAddress(user_email))
	if(user_email.length!=0 && isValidEmailAddress(user_email)==true){

		//console.log(employee_id);
	//var dataString = 'function_name= '+'check_mobile_number'+'user_mobile_number='+ user_mobile_number;
	var dataString= 'function_name= '+'check_email'+'&user_email='+ user_email;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==0){	
				$("#id_okay_email").show();
				$("#id_not_okay_email").hide();
				user_email_chk_flag=true;
				registration_form_validation();
			}
			else{
				$("#id_okay_email").hide();
				$("#id_not_okay_email").show();
				fire_message('error',"Email Id already register!")
				user_email_chk_flag=false;
			}
	}
});
	return false;
	}
	else{
		//alert(1);
		$("#id_okay_email").hide();
		$("#id_not_okay_email").show();
		user_email_chk_flag=false;
		fire_message('error',' Please fill all the details');
	}
	
}

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);

};

function registration_form_validation(){ 

	//check_image_upload();
	var first_name=$("#first_name").val();
	var last_name=$("#last_name").val();
	var roles=$("#roles").children("option:selected"). val();
	var user_email=$("#user_email").val();
	var user_Aadhar=$("#user_Aadhar").val();
	var user_mobile_number=$("#user_mobile_number").val();
	var pass_1=$("#pass_1").val();
	var pass_2=$("#pass_2").val();
	//alert(pass_1.length);
	if(pass_1!==pass_2){
		fire_message('error',"Your password and confirmation password do not match.");

	}else if(pass_1.length<=6){

		fire_message('error',"The password must contain at least six character or number");
	}else{


	if(first_name.length == 0 || last_name.length == 0 || roles ==0){
		fire_message('error',' Please fill all the details');
	}else{

		sendOTP();
	}
}
	

}
function sendOTP(){
	var user_mobile_number=$("#user_mobile_number").val();
var dataString= 'function_name= '+'sendOTP'+'&user_mobile_number= '+user_mobile_number;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			//alert(result);
			if(result==1){

				 jQuery("#OTP_BOX").modal('show');
				
			}
	}
});
	return false;

}
function verfyOTP(){

	var otp=$("#user_otp").val();
var dataString= 'function_name= '+'verfyOTP'+'&user_otp= '+otp;
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			//alert(result)
			if(result==1){
					if(typeof image_chk === "undefined"){
				//alert("enter");
				register_user("no_image");
				document.getElementById("user_registration").reset();
				 jQuery("#OTP_BOX").modal('hide');
				//fire_message('success','Registration completed with no image');
		}else{	
				//upload_image();
				register_user(user_mobile_number);
				document.getElementById("user_registration").reset();
				 jQuery("#OTP_BOX").modal('hide');
				//fire_message('success','Registration completed with image');
		}
			}else{
				alert("Please Enter The Correct OTP");

			}

	}
});
	return false;


						
	

}
//function seting the session for changing the file name of the image to be upload.
function settingSection(fname){
var dataString= 'file_name= '+fname
	$.ajax({
		type: "POST",
		url: "php_controller/setting_session.php",
		cache: false,
		data: dataString,
		success: function(result){
			
		//	alert("Session okay"+ result);
	}
});
	return false;

}
function check_image_upload(){

var file_data = $('#user_image').prop('files')[0]; 
image_chk=file_data;
//alert(image_chk);

}
//function for image upload 
function upload_image(){

	 var file_data = $('#user_image').prop('files')[0];  
	 //Image validation (size not mentioned)
	 if(file_data.type=="image/jpeg" || file_data.type=="image/jpg"){
	 	var form_data = new FormData();                  
    	form_data.append('file', file_data);
    	var user_mobile_number=$("#user_mobile_number").val();
		settingSection(user_mobile_number)                  
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
	 	alert("invalid file type. Please select .jpg or .jpeg format.");
	 }
    
}
//function for registering a user into the database.
function register_user(image_name){
	var user_mobile_number=$("#user_mobile_number").val();
	var first_name=$("#first_name").val();
	var last_name=$("#last_name").val();
	var roles=$("#roles").children("option:selected").val();
	var user_email=$("#user_email").val();
	var user_Aadhar=$("#user_Aadhar").val();
	var pass_1=$("#pass_1").val();
	var dataString= 'function_name= '+'register_user'+'&user_mobile_number= '+user_mobile_number+
	'&first_name='+ first_name+
	'&last_name='+ last_name+
	'&roles='+ roles+
	'&user_email='+user_email+
	'&user_Aadhar='+user_Aadhar+
	'&image_name='+image_name+
	'&pass_1='+pass_1;
	alert(dataString);
	$.ajax({
		type: "POST",
		url: "php_controller/controller.php",
		cache: false,
		data: dataString,
		success: function(result){
			if(result==1){
				fire_message('success','New User Added Successfully');
				//clearAll();
				window.location.replace("index.php");
			}
			else{

				fire_message('error','User already exist!');
			}
			
			
	}
});
	return false;

}

function fire_message(type,message){
//success,info,error,warning
	 Toast.fire({
	 	position: 'top-right',
        type: type,
        title: message,
        timer:15000,
      })
}
function registration_trigger(){
	check_user_mobile_number();
	
	//registration_form_validation()

}


function clearAll(){

	$("#user_mobile_number").val('').blur();
	$("#first_name").val('').blur();
	$("#last_name").val('').blur();
	$("#roles").prop('selectedIndex',0);
	$("#user_email").val('').blur();
	$("#id_okay").hide();
	$("#id_not_okay").hide();
	$("#id_okay_email").hide();
	$("#id_not_okay_email").hide();
	$('#user_image').val('');
}


function click_id(id){
  var dataString = 'selected_id='+ id;
 	  $.ajax({
    type: "POST",
    url: "php_controller/set_selected_user_id.php",
    data: dataString,
    cache: false,
    success: function(result){
    	if(result=="ok"){
    		window.location.href = "index.php?f=view_edit_delete_user";
    	}
     // alert(result);
     

     
    }
  });
 	  return false;
 }


 function fetch_user_data(user_id) {
	//alert(employee_id);
	var dataString = 'user_id='+ user_id;
 	  $.ajax({
    type: "POST",
    url: "php_controller/fetch_user_details.php",
    data: dataString,
    cache: false,
    success: function(result){

    		var resultfinal =JSON.parse(result);
			
$('#user_mobile_number').val(resultfinal[1]);
$('#first_name').val(resultfinal[3]);
$('#last_name').val(resultfinal[4]);
$('#user_email').val(resultfinal[2]);
if(resultfinal[5]=="admin"){
  $("#roles").prop('selectedIndex',1); 
  }else if(resultfinal[5]=="secretary"){
$("#roles").prop('selectedIndex',2);
  }else if(resultfinal[5]=="front_office"){
$("#roles").prop('selectedIndex',3);
  }else if(resultfinal[5]=="ptp_center"){
$("#roles").prop('selectedIndex',4);
  }else if(resultfinal[5]=="puser"){
$("#roles").prop('selectedIndex',5);
  }


/*$("#profile_name").html(resultfinal[0]);*/
/*$('#mobile_simple').text(resultfinal[5]);
$('#office_number_simple').text(resultfinal[6]);
$('#email_simple').text(resultfinal[7]);
$('#firm_simple').text(resultfinal[8]);
$('#designation_simple').text(resultfinal[9]);
$('#date_of_arvl_simple').text(resultfinal[10]);
$('#room_range_simple').text(resultfinal[11]);
$('#utr_number_simple').text(resultfinal[12]);
$('#status_simple').text(resultfinal[13]);
$('#date_of_reg_simple').text(resultfinal[14]);
$('#room_type_simple').text(resultfinal[15]);
$('#bank_name_simple').text(resultfinal[16]);*/

			
			    
    }
  });
 	  return false;
 }	
function global_delete(user_id) {
	//alert(user_id)
  $("#exampleModal").modal('hide');
  var dataString = 'function_name='+'global_delete'+'&user_id='+ user_id;
    $.ajax({
    type: "POST",
    url: "php_controller/controller.php",
    data: dataString,
    cache: false,
    success: function(result){
   // alert(result)
      
 location.reload();
     
    }
  });
    return false;
}
