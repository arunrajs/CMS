<?php
session_start();
unset($_SESSION["user_name"]);
unset($_SESSION["user_id"]);
?>

<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" />

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vectorz -CMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo" style="text-align: center;">
    <img style="width: 37%;" src="dist/img/vectorz-logo.svg" class="logo img-responsive" />
  </br>
    <h4 style="font-size:0.45em;font-weight: 600;">Customer Management System</h4>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
     
      <form action="function.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email ID/Mobile Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="login_btn" class="btn btn-primary btn-block">Log Is</button>  
        <!--  <a class="btn btn-primary btn-block" href="users/admin?f=dashboard">Log In</a> --> 
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
       
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <!-- <p class="mb-0">
        <a href="user_registration.php" target="_blank" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<script type="text/javascript">
//session_start();
  var error_message_tokan='<?php echo $_SESSION["error_message_tokan"] ; ?>';
  var error_message='<?php echo $_SESSION["error_message"] ; ?>';
//alert(error_message);
if(error_message_tokan==1){
toastr.error(error_message);
'<?php unset($_SESSION['error_message']);?>';
'<?php unset($_SESSION['error_message_tokan']);?>';
}
 

</script>


</body>
</html>
