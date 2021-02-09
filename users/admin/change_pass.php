<!-- gen header included -->
<?php include '../../common/user_header_footer/header.php';?>



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Change Your Password</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Password</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12" >
         <div class="card card-primary">
          <div class="card-header">
           <div class="row">
             <div class="col-md-12"> <h3 class="card-title">

              Please update the password.

            </h3>
          </div>


        </div>
      </div>
    </div>
  </div>
  <!-- =========================================== Main Section Start ====================================--> 

  <div class="col-8 col-sm-8 col-lg-8">
    <div class="card card-primary card-outline card-outline-tabs">
      <div class="card-header p-0 border-bottom-0">
        <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Reset Your Password!</a>
          </li>

        </ul>
      </div>
      <div class="card-body">
       <form role="form"> 
        <div class="tab-content" id="custom-tabs-three-tabContent">
          <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">

            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                 <div class="form-group">
                  <label> User ID </label>
                  <input type="text" class="form-control" disabled="true" placeholder="<?php echo $_SESSION['user_id'] ; ?>">
                </div>
              </div>

             
          </div>
          <div class="form-group">
            <label>Applicant name </label>
            <input type="text" class="form-control" disabled="true" placeholder="<?php echo $_SESSION['user_name'] ;echo " ".$_SESSION['last_name']; ?>">
          </div>


          <div class="form-group">
            <label>Mobile number </label>
            <input  type="number" class="form-control" disabled="true" placeholder="<?php echo $_SESSION['mobile_number'] ; ?>">
          </div>

          <div class="form-group">
            <label>Enter New Password </label>
            <input type="password" class="form-control" id="new_Password" placeholder="Enter New Password ">
          </div>
          <div class="form-group">
            <label>Confirm New Password </label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm New Password">
          </div>

         

        </div>
        <!-- /.card-body -->

        <div class="card-footer float-right">
 <button type="button" class="btn btn-primary" id="submit_btn" onclick="change_profile_password(<?php echo $_SESSION['mobile_number'] ; ?>)">Update</button>
        </div>

      </div>





    </div>
  </form>
</div>
<!-- /.card -->
</div>
</div>

<div class="col-md-4">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-text-width"></i>
        Instructions & Checklist 

      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <dl>
        <dt>Instruction </dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Time duration </dt>
        <dd>15/10/2020</dd>
        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
        <dt>Supporting documents to be submitted.</dt>
        <dd>Adhaar Card </dd>
        <dd>House Tax Receipts</dd>

      </dl>
    </div>
    <!-- /.card-body -->
  </div>

</div>


<!--================================ Main Section End ================================== -->
</div>

</div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- /.content-wrapper -->
<?php include '../../common/user_header_footer/footer.php';?>
<!-- Control Sidebar -->
<script src="js_controller/controller.js"></script>
<script type="text/javascript">
  fetch_applicant_profile_details(<?php echo $_SESSION['mobile_number'] ; ?>);

</script>
