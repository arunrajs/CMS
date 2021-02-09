  <div class="modal fade" id="edit_machine_modal">
  <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-body">
              <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Machine Master</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

               <form role="form" id="master_reg_forms">
              <div class="card-body">
               
                 
               
                <div class="card-body">
               
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>ID</label>
                      <input disabled="true" type="text" id="MID" class="form-control" placeholder="id">
                    </div> <div class="form-group">
                      <label>Machine Name</label>
                      <input type="text" id="Machine" class="form-control" placeholder="Name of Machines">
                    </div> 
                    <div class="row"> <div class="col-sm-6"><div class="form-group">
                      <label>Short Name</label>
                      <input type="text" id="MShortName" class="form-control" placeholder="Short Name of Machines">
                    </div></div>  
                    <div class="col-sm-6"><div class="form-group">
                      <label>Capacity Per Shift</label>
                      <input type="text" id="CapacityPerShift" class="form-control" placeholder="CapacityPerShift">
                    </div></div></div>
                   
                    <div class="row"><div class="col-sm-6">
                      <div class="form-group">
                      <label>Purch Date</label>
                      <input type="date" id="MPurchDate" class="form-control">
                    </div> </div>
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label>Next Service Date</label>
                      <input type="date" id="MNextServiceDate" class="form-control">
                    </div> 
                  </div></div>

                     
                    <div class="form-group">
                      <label> Machine Details</label>
                      <textarea class="form-control" id="MachineDetals"></textarea>
                    </div>  
                  </div>
                </div>
                   

                   <div class="col-md-12">
                    <div class="form-group">
                      <label>Status</label>
                     <select class="form-control" id="Machine_status_drop">
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
              <button type="button" onclick="Machine_master_reg('update')" class="btn btn-primary">Update </button>
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