<?php
$file_name=trim($_POST['file_name']);
session_start();
$_SESSION['file_name']=$file_name;
//echo $_SESSION['file_name'];
?>  