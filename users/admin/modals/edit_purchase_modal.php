  <div class="modal fade" id="edit_purchase_modal">
  <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-body">
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
                      <input type="text" id="PurchaseID" disabled="true" class="form-control" placeholder="Purchase Name">
                    </div> 
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                      <label>Supplier </label>
                      <input type="text" id="supplier_purchase_Master" class="form-control" placeholder="Supplier"> 
                      <input type="hidden" id="supplier_purchase_Master_hidden" class="form-control" placeholder="Supplier">
                    </div></div> 
                    <div class="col-sm-3">
                        <div class="form-group">
                      <label>Material </label>
                      <input type="text" id="Material_purchase_Master" class="form-control" placeholder="Material"><input type="hidden" id="Material_purchase_Master_hidden" class="form-control" placeholder="Material">
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

             
          </form>
        </div>
        <!-- /.card -->


      </div>

      
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" onclick="purchase_main_master_reg('update')" class="btn btn-primary">Save </button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!-- <script>
$(function() {
  alert(1)

});
</script> -->