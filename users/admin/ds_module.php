<!-- gen header included -->
<?php include '../../common/user_header_footer/header.php';?>
<!-- //gen header included -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Upate Digital Signature </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Digital Signature </li>
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

        <!-- =========================================== Main Section Start ====================================--> 

        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Enter The Digital Signature Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
              <div class="card-body">
                


                <div class="form-group">
                  <label>New Password </label>
                  <input type="password" id="new_pass" class="form-control" placeholder="New Password  ">
                </div>
                <div class="form-group">
                  <label>Confirm New Password </label>
                  <input type="password" id="confm_pass" class="form-control" placeholder="Confirm New Password">
                </div>

                <div class="form-group">
                  <label>Remark </label>
                  <textarea class="form-control" id="remark" placeholder="Last name"></textarea> 
                </div>

               
                
             </div>
             <!-- /.card-body -->

             <div class="card-footer" style="text-align: right;">
              <button id="reg_submit_btn" type="button" onclick="update_ds_details();" class="btn btn-primary">Submit</button> 
            <!--   <button id="reg_submit_btn" type="button" onclick="upload_image();" class="btn btn-primary">Submit</button> -->
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Instructions
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <dl>
              <dt>Employee ID</dt>
              <dd>A description list is perfect for defining terms.</dd>
              <dt>First Name</dt>
              <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd>Donec id elit non mi porta gravida at eget metus.</dd>
              <dt>Email ID</dt>
              <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
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
 <?php include '../../common/user_header_footer/footer.php';?>
  <!-- //Footer included -->
 <script src="js_controller/controller.js"></script>