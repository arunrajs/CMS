  <div class="modal fade" id="jobCard_modal">
  <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Home> Job Card> New Job Card</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form"  id="order_reg_forms"> 
            <div class="row">
            <div class="col-3">
             Job Card ID #<input class="form-control" id="JobCard_id" type="text" disabled="true" placeholder="00000">
           </div> 
           <div class="col-3">
             Date<input class="form-control mandat_fld" id="JobCard_date" type="datetime-local">
           </div> 
           <div class="col-3">
            <div class="row">
              <div class="col-md-12"> Machine<input class="form-control mandat_fld" id="new_order_Machine" type="text" placeholder="Machine"><input class="form-control mandat_fld" id="new_order_Machine_hidden" type="hidden" placeholder="Machine">

                <input class="form-control" id="Order_customer_id_hidden" type="hidden"></div>
           </div>
         </div> 
         <div class="col-3" style="padding-top: 1.2em;">
            <div class="row">
            
           <div class="col-md-7">  
             <button type="button" id="pre_order_btn" onclick="clearData();" class="btn btn-block bg-gradient-warning btn-sm" data-toggle="modal" data-target="#add_order_modal">Add Order</button>
           </div>
             </div>
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
              <th>Sl No</th>
              <th>Size</th>
              <th class="hidden_tbl">Size hidden</th>
              <th>Qty</th>
              <th>Unit</th>
              <th>TP</th>
              <th>Colour</th>
              <th>Remark</th>
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