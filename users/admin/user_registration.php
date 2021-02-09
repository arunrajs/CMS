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
          <h1 class="m-0 text-dark">User Registration</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Registration</li>
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
              <h3 class="card-title">Enter the new user details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
              <div class="card-body">

                 <div class="form-group">
                  <label>Role</label>
                  <select id="roles" class="form-control">
                    <option value="0">Select</option>
                    <option value="1">Admin</option>
                    <option value="2">Secretary</option>
                    <option value="3">Front office staff</option>
                    <option value="4">P2P Center</option>
                    <option value="5">Portal User</option>
                    <option value="6">JS</option> 
                    <option value="7">Finance</option>
                  </select>
                </div>

                 <div class="form-group" id="ptp_center_id_section">
                  <label>P2P Center ID <span style="color: red;">(Don't Uses 001 as P2P Center ID)</span><span style="color: green;">(Correct Formate : 010,011,012 etc..)</span></label>
                  <input  type="text" id="ptp_center_id" class="form-control" placeholder="P2P Center ID">
                </div>


                <div class="row">
                  <div class="col-md-2" style="padding-top: 5%;">
                    <div class="form-group">
                     
                      <input type="number" style="text-align: center;" disabled="true" class="form-control" placeholder="+91">
                    </div>                  

                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>Mobile number </label>
                      <input type="number" id="user_mobile_number" class="form-control" placeholder="Mobile number">
                    </div>                  

                  </div>
                  <div class="col-md-2" style="padding-top: 5%;">
                    <div class="form-group">
                    <i class="fas fa-check-circle" id="id_okay" style="color: green;"></i>
                    <i class="fas fa-times-circle" id="id_not_okay" style="color: red;"></i>
                  </div>
                  </div>

                </div>


                <div class="form-group">
                  <label>First name </label>
                  <input type="text" id="first_name" class="form-control" placeholder="First name ">
                </div>

                <div class="form-group">
                  <label>Last name </label>
                  <input type="text" id="last_name" class="form-control" placeholder="Last name">
                </div>

               
                 
                    <div class="form-group">
                  <label for="user_email_id">Aadhar Number</label>
                  <input type="test" class="form-control" id="user_Aadhar" placeholder="Aadhar Number">
                </div>    
                

                 

                <div class="row">
                  

                  <div class="col-md-10">
                    <div class="form-group">
                  <label for="user_email_id">Email address</label>
                  <input type="email" class="form-control" id="user_email" placeholder="Enter email">
                </div>                 

                  </div>
                  <div class="col-md-2" style="padding-top: 5%;">
                    <div class="form-group">
                    <i class="fas fa-check-circle" id="id_okay_email" style="color: green;"></i>
                    <i class="fas fa-times-circle" id="id_not_okay_email" style="color: red;"></i>
                  </div>
                  </div>

                </div>

                <!-- <div class="form-group">
                  <label for="exampleInputFile">Photo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="user_image">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div> -->
                
             </div>
             <!-- /.card-body -->

             <div class="card-footer" style="text-align: right;">
              <button id="reg_submit_btn" type="button" onclick="registration_trigger();" class="btn btn-primary">Submit</button> 
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