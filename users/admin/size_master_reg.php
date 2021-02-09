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
          <h1 class="m-0 text-dark">Size Master</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Size Master</li>
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
              <h3 class="card-title">Size Master</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="master_size_reg_forms">
              <div class="card-body">
               
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name of Size</label>

                   <input type="text" id="size_name" class="form-control" placeholder="Name of Size">
                    </div>  
                  </div>
                  <div class="col-md-6">
                          <div class="form-group">
                            <label>Unit</label>
                           <select class="form-control" id="Size_unit_drop">
                            <option value="inch">Inch</option>
                            <option value="centimeter">Centimeter</option>
                           </select>
                          </div>
                        </div>
                </div>
                     <div class="row">

                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Height</label>

                   <input type="text" id="size_Height" class="form-control" placeholder="Height">
                    </div>                  
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Weight</label>

                   <input type="text" id="size_Weight" class="form-control" placeholder="Weight">
                    </div>                  
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label>Gage</label>

                   <input type="text" id="size_Gage" class="form-control" placeholder="Gage">
                    </div>                  
                </div>
            </div>
                 

                   <div class="col-md-10">
                    <div class="form-group">
                      <label>Status</label>

                     <select class="form-control" id="Size_status_drop">
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                     </select>
                    </div>                  

                  </div>
                  

                    
             </div>
             <!-- /.card-body -->

             <div class="card-footer" style="text-align: right;">
              <button id="reg_submit_btn" type="button" onclick="size_master_reg('create');" class="btn btn-primary">+ Add</button> 
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
$("#edit_size_modal").remove();
$("#master_size_forms").remove();
</script>
