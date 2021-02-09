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
          <h1 class="m-0 text-dark">Material Category Master</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Material Category Master</li>
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
              <h3 class="card-title">Material Category Master</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="master_reg_forms">
              <div class="card-body">
               
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Material Category Name</label>
                      <input type="text" id="MatCategory" class="form-control" placeholder="Name of Material Category">
                    </div> 
                    <div class="row"> <div class="col-sm-6"><div class="form-group">
                      <label>Short Name</label>
                      <input type="text" id="MatCatShort" class="form-control" placeholder="Short Name of Material Category">
                    </div></div>  
                    <div class="col-sm-6"><div class="form-group">
                      <label>Min Stock Level</label>
                      <input type="text" id="MinStockLevel" class="form-control" placeholder="Min Stock Level">
                    </div></div></div>
                   
                    <div class="row">

                      <div class="col-sm-6">
                      <div class="form-group">
                      <label>Max Stock Level</label>
                      <input type="text" id="MaxStockLevel" class="form-control" placeholder="Max Stock Level" >
                    </div> </div>
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Stock Unit</label>
                      <input type="text" id="StockUnit" class="form-control" placeholder="Stock Unit">
                    </div> 
                  </div>
                </div>

                     
                    <div class="form-group">
                      <label>Type</label>
                      <input type="text" id="MatType" class="form-control" placeholder="Type">
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
              <button id="reg_submit_btn" type="button" onclick="Material_master_reg();" class="btn btn-primary">+ Add</button> 
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
