<?php

include("../common/config/config.php");
$function_name=trim($_POST['function_name']);

//FUNCTION FOR CHECK THE MOBILE NUMBER IS Exist OR NOT.
if($function_name=="check_mobile_number"){
$user_mobile_number=trim($_POST['user_mobile_number']);
$query = "SELECT * FROM user_master WHERE mobile_number='$user_mobile_number'";
			$results = mysqli_query($db, $query);

		if(mysqli_num_rows($results)==1){

			echo "1"; //Exist 
		}else{

			echo "0"; //Not
		}

}else if($function_name=="check_email"){

$user_email=trim($_POST['user_email']);
$query = "SELECT * FROM user_master WHERE email='$user_email'";
			$results = mysqli_query($db, $query);

		if(mysqli_num_rows($results)==1){

			echo "1"; //Exist 
		}else{

			echo "0"; //Not
		}

}else if($function_name=="sendOTP"){
$user_mobile_number=trim($_POST['user_mobile_number']);
$GLBL_OTP= rand(100000,999999);
//echo $GLBL_OTP;
session_start();
$_SESSION['GLBL_OTP_SESSION'] =$GLBL_OTP;

      // $toname =$first_name." ".$last_name;
      //$toEmail =$email;
      $tophNumber =$user_mobile_number;
    //==============EMAIL AND SMS ===================================================== 
                        //mail new password 

        $smsMessage=$GLBL_OTP." This is the One Time Password For your Account Activation.";
                         // Declare the security credentials to use
        $username = "eraviperoor";
        $password_1 = "JcM9qb59gjPc1su9O57t";
                          // Set the attributes of the message to send
        $message  = $smsMessage;
        $type     = "txt";
        $senderid = "ERVPER";
        $mobile       = $tophNumber;

        $url = "http://sms.horizonlabs.in/api/sendsms.php?" .
        "user=" . $username . "&" .
        "apikey=" . $password_1 . "&" .
        "message="  . urlencode($message) . "&" .
        "type="     . $type . "&" .
        "senderid=" . urlencode($senderid) . "&" .
        "mobile="       . $mobile;    
        echo "1";
         $output = file($url);


}else if($function_name=="verfyOTP"){
  $user_otp=trim($_POST['user_otp']);
  session_start();
$genotp= $_SESSION['GLBL_OTP_SESSION'];
//echo $user_otp;

 if($genotp == $user_otp){

    echo 1;
  }else{
    echo 0;
  }

}
else if($function_name=="register_user"){

/*	
function password_generate($chars) 
{
  $data = '23456789ABCDEFGHJKLMNPQRSTUVWXYZabcefghjklmnpqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}*/
 // $password= password_generate(7);


	$user_mobile_number=trim($_POST['user_mobile_number']);
	$first_name=trim($_POST['first_name']);
	$last_name=trim($_POST['last_name']);
	$roles=trim($_POST['roles']);
	$image_name=trim($_POST['image_name']);
  $pass_1=trim($_POST['pass_1']);
  $user_Aadhar=trim($_POST['user_Aadhar']);
   $password=$pass_1;
	if($roles==1){
		$roles="puser";
	}
	$user_email=trim($_POST['user_email']);
    $creater_id =0;

	$result = mysqli_query($db,"SELECT * FROM user_master WHERE `mobile_number` ='$user_mobile_number' OR `email`= '$user_email'");
if (mysqli_fetch_row($result)==0) {

	
	$query = mysqli_query($db,"INSERT INTO `user_master`(`id`, `mobile_number`, `email`,`user_Aadhar`, `password`, `first_name`, `last_name`, `role`, `profile_img_name`, `login_status_as`,`profile_status`,`creater_id`) VALUES (NULL,'$user_mobile_number','$user_email','$user_Aadhar',MD5('$password'),'$first_name','$last_name','$roles','$image_name',1,0,'$creater_id')"); 

    $query_two =mysqli_query($db, "INSERT INTO `user_profile_master`(`id`, `user_mobile`, `house_number`, `address_line_one`, `address_line_two`, `state`, `district`, `village`, `panchayath`, `landmark`, `post_office`, `pincode`, `total_n_app_submitted`, `total_n_app_pending`, `total_n_app_rejected`, `total_n_app_approved`) VALUES (NULL,'$user_mobile_number','','','','','','','','','','','0','0','0','0')"); 
	   
		
      
        $toname =$first_name." ".$last_name;
      //$toEmail =$email;
      $tophNumber =$user_mobile_number;
    //==============EMAIL AND SMS ===================================================== 
                        //mail new password 

        $smsMessage="Hi ".$toname.", Your account has been created successfully! Username : ".$user_mobile_number." Password : ".$password;
                         // Declare the security credentials to use
        $username = "eraviperoor";
        $password_1 = "JcM9qb59gjPc1su9O57t";
                          // Set the attributes of the message to send
        $message  = $smsMessage;
        $type     = "txt";
        $senderid = "ERVPER";
        $mobile       = $tophNumber;

        $url = "http://sms.horizonlabs.in/api/sendsms.php?" .
        "user=" . $username . "&" .
        "apikey=" . $password_1 . "&" .
        "message="  . urlencode($message) . "&" .
        "type="     . $type . "&" .
        "senderid=" . urlencode($senderid) . "&" .
        "mobile="       . $mobile;

                      // Send the request
    mkdir ("../common/users/".$user_mobile_number, 0755);
    mkdir ("../common/users/".$user_mobile_number."/"."supporting_document", 0755);
    //$folder = date("Ymd");
    
        echo "1";
         $output = file($url);
        
//==============EMAIL AND SMS =====================================================
        

} else {
	echo "0";
	
}


}
else if($function_name=="global_delete"){

	$user_id=trim($_POST['user_id']);

if($result = mysqli_query($db,"DELETE FROM user_master WHERE `id`='$user_id'")){ 
    echo "Record was deleted successfully."; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. ". mysqli_error($link); 
} 
}
else if($function_name=="fetch_total_application_count"){ // function fro set count of user ragisted

	$sql="SELECT id FROM user_master";

	if ($result=mysqli_query($db,$sql))
  	{
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
}




mysqli_close($db); // Connection Closed*/
?>

