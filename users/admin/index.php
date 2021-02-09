 <?php include 'loader.php';?>
 <!DOCTYPE HTML>
 <html>
 <link rel="shortcut icon" href="favicon.ico" />
 <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
 <link rel="icon" type="image/x-icon" href="favicon.ico">
 <link rel="icon" href="favicon.ico" />

 <?php
// Start the session
// session_start();
 //if ($_SESSION["user_name"] =="") {
 // session_destroy();
 // header("Location: ../../index.php");
 // exit();
//}
?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <div class="wrapper">
    <?php include 'modal_master.php';?>
    <!-- ================================================================/.navbar -->
    <?php include 'header_nav.php';?>
    <!--================================================================ /.navbar -->
    <!--  ====================================================================sidebar -->
    <?php include 'sidebar.php';?>
    <!--  ====================================================================sidebar -->
    <!-- Inner section included -->
    <?php
    error_reporting(0);
if ($_GET['f']) {include ($_GET['f'].".php");} //Include new paged in the main area.
    //include("dashboard.php");
?>
<!-- //Inner section included -->
<!-- Footer included -->

<div id="bind_hidden"></div>
</body>




<script type='text/javascript'>
  var user_id = "<?php echo $_SESSION['user_id'] ; ?>"; 
  //alert(user_id);
</script>
<script type="text/javascript" src="js_controller/validate.js"></script>
</html>
<script type="text/javascript">
  $(window).on('load', function(){ 
    $('#loader').fadeOut(1000,function(){
      $('.main-footer').show();
  }); // Loader function.
    //alert(1)
  });
var url_string = window.location.href
var url = new URL(url_string);
var param = url.searchParams.get("f");
if (param.indexOf('master') > -1)
{
  $("#master_list").addClass("menu-open");
  $("#menu_masters").addClass("active");
  $("#menu_"+param).addClass("active");

}else{
  $("#menu_"+param).addClass("active");
}

</script>

