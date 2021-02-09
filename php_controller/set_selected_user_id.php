<?php 
session_start();
$selected_id=trim($_POST['selected_id']);
$_SESSION['set_user_id']=$selected_id;
echo "ok";
exit();
 ?>