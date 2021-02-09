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
          <h1 class="m-0 text-dark">Employees Master</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Employees Master</li>
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

        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Employees Master</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="master_reg_forms">
              <div class="card-body">
               
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Employees Name</label>
                      <input type="text" id="EName" class="form-control" placeholder="Employees Name">
                    </div> 
                    <div class="row"> <div class="col-sm-6"><div class="form-group">
                      <label>Short Name</label>
                      <input type="text" id="EShortName" class="form-control" placeholder="Short Name of Employees">
                    </div></div>  
                    <div class="col-sm-6"><div class="form-group">
                      <label>Desig ID</label>
                      <input type="text" id="EDesigID" class="form-control" placeholder="Desig ID">
                    </div></div></div>
                   
                    <div class="row">

                      <div class="col-sm-6">
                      <div class="form-group">
                      <label>Date of Birth</label>
                      <input type="date" id="EDOB" class="form-control" >
                    </div> </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Address</label>
                      <textarea id="EAddress" class="form-control"></textarea>
                    </div> </div>
                    
                </div>
                 
                <div class="row">

                    <div class="col-sm-4">
                      <div class="form-group">
                      <label>Email</label>
                      <input type="email" id="EEmail" class="form-control" placeholder="Email" >
                    </div> </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <label>Mobile</label>
                      <input type="text" id="EMobile" class="form-control" placeholder="Mobile" >
                    </div> </div>
                    
                </div>

                <div class="row">

                      <div class="col-sm-6">
                      <div class="form-group">
                      <label>UserName</label>
                      <input type="text" id="UserName" class="form-control" placeholder="UserName" >
                    </div> </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Password</label>
                    <input type="password" id="Password" class="form-control" placeholder="Password" >
                    </div> </div>
                    
                </div>


                 <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Date of Joining</label>
                      <input type="date" id="EDOJ" class="form-control"  >
                    </div> </div>
                  </div>
  
                  </div>
                </div>
                   

                   <div class="col-md-12">
                    <div class="form-group">
                      <label>Status</label>
                     <select class="form-control" id="Mat_status_drop">
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                     </select>
                    </div>                  

                  </div>
                  

                    
             </div>
             <!-- /.card-body -->

             <div class="card-footer" style="text-align: right;">
              <button id="reg_submit_btn" type="button" onclick="Employees_main_master_reg();" class="btn btn-primary">+ Add</button> 
              <!--   <button id="reg_submit_btn" type="button" onclick="upload_image();" class="btn btn-primary">Submit</button> -->
            </div>
          </form>
        </div>
        <!-- /.card -->


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
<script type="text/javascript">
//fetch_country_drop();
</script>
