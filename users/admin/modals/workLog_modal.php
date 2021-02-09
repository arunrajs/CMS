  <div class="modal fade" id="workLog_modal">
  <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Home> Work Log> New </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form"  id="order_reg_forms"> 
            <div class="row center_me">
            <div class="col-3">
             Wrok Log ID #<input class="form-control" id="JobCard_id" type="text" disabled="true" placeholder="00000">
           </div> 
           <div class="col-36">
             Date<input class="form-control mandat_fld" id="JobCard_date" type="datetime-local">
           </div> 
           
         <div class="col-2" style="padding-top: 1.2em;">
            <div class="row">
            
           <div class="col-md-7">  
             <button type="button" id="pre_order_btn" class="btn btn-block bg-gradient-warning btn-sm" data-toggle="modal" onclick="setInFront('modal-lg');" data-target="#modal-lg">Add Order</button>
           </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-8">
             Machine<input class="form-control" id="worklog_machine_name" type="text" placeholder="Machine"><input class="form-control" id="worklog_machine_name_hidden" type="hidden">
           </div>  
           <div class="col-4">
              <button style="margin-top: 11%;" type="button" id="pre_order_btn" onclick="clearData();" class="btn btn-block bg-gradient-warning btn-sm" data-toggle="modal" data-target="#add_order_modal">:: Load From Job Card</button>
           </div> 
         </div>
         <div class="row">
           <div class="col-6">
             Operator<input class="form-control" id="worklog_machine_name" type="text" placeholder="Operator"><input class="form-control" id="worklog_machine_name_hidden" type="hidden">
           </div>  
           <div class="col-6">
             Helper<input class="form-control" id="worklog_machine_name" type="text" placeholder="Helper"><input class="form-control" id="worklog_machine_name_hidden" type="hidden">
           </div> 
         </div>
         <hr>
        
        <div class="col-sm-12">

            <!--  === -->
               <table id="jobcard_list_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Ord#</th>
              <th>Customer</th>
              <th>Size</th>
              <th>Roll Weihgt</th>
              <th>Taken Time</th>
              <th>Action</th>
            </tr>
          </thead>
           <tbody>
                    
                  </tbody>
          </table>
      
            <!--  === -->

            </div>

 </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" id="save_BTN_newJob" onclick="create_new_job();" class="btn btn-primary">Save </button>
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