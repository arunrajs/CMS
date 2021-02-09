  <div class="modal fade" id="edit_orderStatus_modal">
  <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Order Status Master</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

               <form role="form" id="master_reg_forms">
              <div class="card-body">
               
                 <div class="card-body">
               
                <div class="row">
                  <div class="col-md-10">
                    <div class="form-group">
                      <label>ID</label>
                      <input disabled="true" type="text" id="OSID" class="form-control" placeholder="ID">
                    </div>  
                    <div class="form-group">
                      <label>Short Name</label>
                      <input type="text" id="OSShortName" class="form-control" placeholder="Short Name of Order Status">
                    </div>   
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" id="OSName" class="form-control" placeholder="Name of Order Status">
                    </div>
                    <div class="form-group">
                      <label>Value</label>
                      <input type="text" id="OSValue" class="form-control" placeholder="Value of Order Status">
                    </div>  
                  </div>
                </div>
                   

                   <div class="col-md-10">
                    <div class="form-group">
                      <label>Status</label>
                     <select class="form-control" id="Order_Status__status_drop">
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                     </select>
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
              <button type="button" onclick="order_status_master_reg('update')" class="btn btn-primary">Update </button>
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