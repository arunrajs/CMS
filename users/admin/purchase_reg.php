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
          <h1 class="m-0 text-dark">Purchase Master</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Purchase Master</li>
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
              <h3 class="card-title">Purchase Master</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="master_reg_forms">
              <div class="card-body">
               
                <div class="row">
                  <div class="col-md-12">
                    
                    <div class="row"> 
                      <div class="col-sm-3">
                        <div class="form-group">
                      <label>Purchase ID</label>
                      <input type="text" id="PurchaseID" disabled="true" class="PurchaseID_counter form-control" placeholder="Purchase ">
                    </div> 
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                      <label>Supplier </label>
                      <input type="text" id="supplier_purchase_Master" class="supplier_purchase_Master_auto form-control" placeholder="Supplier"> 
                      <input type="hidden" id="supplier_purchase_Master_hidden" class="supplier_purchase_Master_hidden_auto  form-control" placeholder="Supplier">
                    </div></div> 
                    <div class="col-sm-3">
                        <div class="form-group">
                      <label>Material </label>
                      <input type="text" id="Material_purchase_Master" class="Material_purchase_Master_auto form-control" placeholder="Material"><input type="hidden" id="Material_purchase_Master_hidden" class="Material_purchase_Master_hidden_auto form-control" placeholder="Material">
                    </div></div>  
                    <div class="col-sm-3"><div class="form-group">
                      <label>Date</label>
                     <input type="date" id="Date_purchase_Master" class="form-control" >
                    </div></div></div>
                   
                    <div class="row">

                      <div class="col-sm-6">
                      <div class="form-group">
                      <label>Purchase Unit</label>
                      <input type="text" id="Purchase_Unit_purchase_Master" class="form-control" placeholder="Purchase Unit" >
                    </div> </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Purchase Quantity</label>
                      <input type="text" id="Purchase_Qty_purchase_Master" class="form-control" placeholder="Purchase Quantity" >
                    </div> </div>

                   
                    
                </div>

                  </div>
                </div>
                   

                
                  

                    
             </div>
             <!-- /.card-body -->

             <div class="card-footer" style="text-align: right;">
              <button id="btn_reg_purchase" type="button" onclick="purchase_main_master_reg('create');" class="btn btn-primary">+ Add</button> 
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
$("#edit_purchase_modal").remove();

</script>
