<?php
//$form_data=trim($_GET['form_data']);
session_start();
 //echo $_SESSION["file_name"];
 if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        move_uploaded_file(
        	$_FILES['file']['tmp_name'],
        	'../../../common/upload_center/user_images/'.  $_SESSION["file_name"].".jpg");
        echo "ok";
    }

?>