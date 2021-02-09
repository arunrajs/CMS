  <div class="modal fade" id="edit_units_modal">
  <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Size Master</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

               <form role="form" id="master_reg_forms">
              <div class="card-body">
               
                <div class="row">
                  <div class="col-md-10">
                    <div class="form-group">
                      <label>ID</label>
                      <input type="text" id="Unit_id" class="form-control" placeholder="ID">
                    </div> 
                    <div class="form-group">
                      <label>Name of Unit</label>
                      <input type="text" id="Unit_name" class="form-control" placeholder="Name of Unit">
                    </div>  
                  </div>
                </div>
                   

                   <div class="col-md-10">
                    <div class="form-group">
                      <label>Status</label>
                     <select class="form-control" id="Unit_status_drop">
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                     </select>
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
              <button type="button" onclick="unit_master_reg('update')" class="btn btn-primary">Update </button>
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