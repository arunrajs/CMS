  <div class="modal fade" id="add_order_modal">
  <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Order</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form"  id="order_reg_forms"> 
            <div class="row">
            <div class="col-4">
              <div class="row">
                <div class="col-md-8">
                   Order ID #<input class="form-control mandat_fld" id="add_order_id" type="text" placeholder="00000"><input class="form-control mandat_fld" id="add_order_id_hidden" type="hidden" >
                </div>
                <div class="col-md-4">
                  <button style="margin-top: 36%;" type="button" id="pre_order_btn" class="btn btn-block bg-gradient-warning btn-sm">Choose</button>
                </div>
              </div>
             
           </div> 
           <div class="col-4">
              Customer :<input class="form-control " disabled="true" id="add_order_customer" type="text">
           </div> 
           <div class="col-4">
               Size: <input disabled="true" id="add_order_size" class="form-control"  type="text" placeholder="Size">
               <input disabled="true" id="add_order_sizeHidden" class="form-control"  type="hidden" placeholder="Size">
         </div> 
         
         </div>
         <div class="row">
           
           <div class="col-md-4">Qty: <input disabled="true" id="add_order_Qty" class="form-control"  type="text" placeholder="Qty"></div>
           <div class="col-md-4">Unit: <input disabled="true" id="add_order_Unit" class="form-control"  type="text" placeholder="Unit"></div>
           <div class="col-md-4">
                      T/P
                     <select class="form-control" id="tp_status_drop">
                      <option value="1">Treated</option>
                      <option value="2">Plain</option>
                     </select>                 
        </div>
         </div>
         <div class="row">
          <div class="col-6">
               Color: <input id="add_order_color" class="form-control"  type="text" placeholder="Color">
         </div>
           <div class="col-md-6">
             Remark: 
             <textarea class="form-control" id="add_order_remark"></textarea>
           </div>

         </div>

         <hr>
        
       
 </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" onclick="add_order_list();" class="btn btn-primary">Add </button>
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