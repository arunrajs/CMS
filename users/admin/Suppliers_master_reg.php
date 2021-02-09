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
          <h1 class="m-0 text-dark">Suppliers Master</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Suppliers Master</li>
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
              <h3 class="card-title">Suppliers Master</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="master_reg_forms">
              <div class="card-body">
               
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Suppliers Name</label>
                      <input type="text" id="Supplier" class="form-control" placeholder="Suppliers Name">
                    </div> 
                    <div class="row"> <div class="col-sm-6"><div class="form-group">
                      <label>Short Name</label>
                      <input type="text" id="SupShortName" class="form-control" placeholder="Short Name of Suppliers">
                    </div></div>  
                    <div class="col-sm-6"><div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" id="SupAddress"></textarea>
                    </div></div></div>
                   
                    <div class="row">

                      <div class="col-sm-6">
                      <div class="form-group">
                      <label>District</label>
                      <input type="text" id="SPDistrict" class="form-control" placeholder="District" >
                    </div> </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>State</label>
                      <input type="text" id="SPState" class="form-control" placeholder="State" >
                    </div> </div>
                    
                </div>
                <div class="row">

                      <div class="col-sm-6">
                      <div class="form-group">
                      <label>Country</label>
                      <input type="text" id="SPCountry" class="form-control" placeholder="Country" >
                    </div> </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Pin</label>
                      <input type="text" id="SPPin" class="form-control" placeholder="Pin" >
                    </div> </div>
                    
                </div>  
                <div class="row">

                      <div class="col-sm-4">
                      <div class="form-group">
                      <label>Contact No</label>
                      <input type="text" id="SPContactNo" class="form-control" placeholder="ContactNo" >
                    </div> </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <label>Email</label>
                      <input type="email" id="SPEmail" class="form-control" placeholder="Email" >
                    </div> </div>

                    <div class="col-sm-4">
                      <div class="form-group">
                      <label>Mobile</label>
                      <input type="text" id="SPMobile" class="form-control" placeholder="Mobile" >
                    </div> </div>
                    
                </div>
                 <div class="row">

                      <div class="col-sm-4">
                      <div class="form-group">
                      <label>GST</label>
                      <input type="text" id="SPGST" class="form-control" placeholder="GST Number" >
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
              <button id="reg_submit_btn" type="button" onclick="Suppliers_main_master_reg();" class="btn btn-primary">+ Add</button> 
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
