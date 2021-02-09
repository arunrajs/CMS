  <div class="modal fade" id="create_client_modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Client List> Create Client</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" id="master_reg_form">
            <!-- Modal Body -->
            <div class="row">
              <div class="col-md-1">
                ID<input id="client_ID" class="client_nexID form-control" disabled="true" type="text" placeholder="">
              </div>
              <div class="col-md-4">
                Company Name<input id="company_Name" class="form-control mandat_fld"  type="text" placeholder="Company Name">
              </div>
              <div class="col-md-4">
                Address<textarea id="address" placeholder="Address " class="form-control mandat_fld"> </textarea> 
              </div>
              <div class="col-md-3">
                State<input id="state"class="form-control mandat_fld" type="text" placeholder="State">
              </div>
              
              
            </div>
            <div class="row">
              <div class="col-md-3">
               Telephone Number<input class="form-control mandat_fld" type="text" placeholder="Telephone Number" id="tel">
             </div>
              <div class="col-md-3">
              Company Email <input class="form-control mandat_fld" type="email" placeholder="Company Email" id="company_Email">
            </div>
              
             <div class="col-md-3">
               Contact Person<input class="form-control mandat_fld" type="text" placeholder="Contact Person" id="contact_Person">
             </div>
             <div class="col-md-3">
              Contact Person Email <input class="form-control mandat_fld" type="text" placeholder=" Contact Person Email" id="contact_Person_Email">
            </div>
            <div class="col-md-3">
              Contact Person Mobile <input class="form-control mandat_fld" type="text" placeholder=" Contact Person Mobile" id="contact_Person_Mobile">
            </div>
            <div class="col-md-3">
             GSTN <input class="form-control mandat_fld" type="text" placeholder="GSTN" id="GSTN">
            </div>
            <div class="col-md-4">
                    <div class="form-group">
                    Status<select class="form-control" id="client_status_drop">
                      <option value="1">Active</option>
                      <option value="0">Disable</option>
                     </select>
                    </div>                  

                  </div>

          </div>
        </form>
        <!--// Modal Body -->
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="client_create_btn" onclick="register_new_client('create')">Save </button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>