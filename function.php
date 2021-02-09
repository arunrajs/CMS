<?php
include("common/config/config.php");
session_start();
$username = "";
$email    = "";
$errors   = array(); 
if (isset($_POST['login_btn'])) {
	login();
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}
// LOGIN USER
function login(){

	global $db, $email, $errors;
	$username = e($_POST['email']);
	$password = e($_POST['password']);
	
	// make sure form is filled properly
	if (empty($username)) {
		//array_push($errors, "Username is required");
		session_start();
		$_SESSION['error_message_tokan'] =1;
				$_SESSION['error_message']  = "Username is required";
			header('location: index.php');
			echo $_SESSION['error_message'];
	}
	if (empty($password)) {
		//array_push($errors, "Password is required");
		session_start();
			$_SESSION['error_message_tokan'] =1;
				$_SESSION['error_message']  = "Password is required";
			header('location: index.php');
			echo $_SESSION['error_message'];
	}
	if (count($errors) == 0) {

		$password = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";

		$results = mysqli_query($db, $query);
		//echo mysqli_num_rows($results);
		if (mysqli_num_rows($results) == 1) {
			//echo "done";
			$logged_in_user = mysqli_fetch_assoc($results);
			if($logged_in_user['login_status_as']== "0"){

					$_SESSION['username']=$username;
					//header('location: password_change.php');	
				}else{

					if ($logged_in_user['role'] == 'admin') {
					$_SESSION['user_role'] = $logged_in_user['role'];//session
					$_SESSION['username'] = $logged_in_user['username'];//session
					$user=$logged_in_user['first_name'];
					$_SESSION['user_name']  = $user;//session
					$_SESSION['user_id']  = $logged_in_user['id']; //session
					header('location: users/admin/index.php?f=dashboard');	
					}
					else if ($logged_in_user['role'] == 'puser')
					 {
					$_SESSION['user_role'] = $logged_in_user['role'];//session
					$_SESSION['username'] = $logged_in_user['username'];//session
					$user=$logged_in_user['first_name'];
					$_SESSION['user_name']  = $user;//session
					$_SESSION['first_name']  = $logged_in_user['first_name'];//session
					$_SESSION['last_name']  = $logged_in_user['last_name'];//session
					$_SESSION['email_id']  = $logged_in_user['email'];
					$_SESSION['user_id']  = $logged_in_user['id']; //session
					if($logged_in_user['profile_status']==0){

						header('location: users/ppl/index.php?f=new_applications');

					}else{
					header('location: users/ppl/index.php?f=dashboard');

					}

					}else if ($logged_in_user['role'] == 'ptp_center')
					 {
					$_SESSION['user_role'] = $logged_in_user['role'];//session
					//$_SESSION['usernames'] = $logged_in_user['username'];//session
					$_SESSION['usernames'] =  $logged_in_user['username'];//session
					$_SESSION['mob'] =  $logged_in_user['username'];//session
					$user=$logged_in_user['first_name'];
					$_SESSION['user_name']  = $user;//session
					//$_SESSION['first_name']  = $logged_in_user['first_name'];//session
					$_SESSION['last_name']  = $logged_in_user['last_name'];//session
					$_SESSION['email_id']  = $logged_in_user['email'];
					$_SESSION['user_id']  = $logged_in_user['id']; //session
					header('location: users/ptp/index.php?f=dashboard');	
					}else if ($logged_in_user['role'] == 'front_office')
					 {
					$_SESSION['user_role'] = $logged_in_user['role'];//session
					$_SESSION['username'] = $logged_in_user['username'];//session
					$user=$logged_in_user['first_name'];
					$_SESSION['user_name']  = $user;//session
					//$_SESSION['first_name']  = $logged_in_user['first_name'];//session
					$_SESSION['last_name']  = $logged_in_user['last_name'];//session
					$_SESSION['email_id']  = $logged_in_user['email'];
					$_SESSION['user_id']  = $logged_in_user['id']; //session
					header('location: users/front_office/index.php?f=dashboard');	
					}else if ($logged_in_user['role'] == 'secretary')
					 {
					$_SESSION['user_role'] = $logged_in_user['role'];//session
					$_SESSION['username'] = $logged_in_user['username'];//session
					$user=$logged_in_user['first_name'];
					$_SESSION['user_name']  = $user;//session
					//$_SESSION['first_name']  = $logged_in_user['first_name'];//session
					$_SESSION['last_name']  = $logged_in_user['last_name'];//session
					$_SESSION['email_id']  = $logged_in_user['email'];
					$_SESSION['user_id']  = $logged_in_user['id']; //session
					header('location: users/secretary/index.php?f=dashboard');	
					}
					else if ($logged_in_user['role'] == 'JS')
					 {
					$_SESSION['user_role'] = $logged_in_user['role'];//session
					$_SESSION['username'] = $logged_in_user['username'];//session
					$user=$logged_in_user['first_name'];
					$_SESSION['user_name']  = $user;//session
					//$_SESSION['first_name']  = $logged_in_user['first_name'];//session
					$_SESSION['last_name']  = $logged_in_user['last_name'];//session
					$_SESSION['email_id']  = $logged_in_user['email'];
					$_SESSION['user_id']  = $logged_in_user['id']; //session
					header('location: users/js/index.php?f=dashboard');	
					} else if ($logged_in_user['role'] == 'finance') {
					$_SESSION['user_role'] = $logged_in_user['role'];//session
					$_SESSION['username'] = $logged_in_user['username'];//session
					$user=$logged_in_user['first_name'];
					$_SESSION['user_name']  = $user;//session
					$_SESSION['user_id']  = $logged_in_user['id']; //session
					header('location: users/finance/index.php?f=dashboard');	
					}
				}
		}else {
			session_start();
			$_SESSION['error_message_tokan'] =1;
				$_SESSION['error_message']  = "Login Failed : You have entered an invalid username or password!";
			header('location: index.php');
			echo $_SESSION['error_message'];
				
			}
	}
}

?>