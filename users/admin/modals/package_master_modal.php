  <div class="modal fade" id="package_master_modal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Package List> Create Package</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" id="master_reg_form">
            <!-- Modal Body -->
            <div class="row">
              <div class="col-md-1">
                ID<input id="package_ID" class="package_id_cls form-control" disabled="true" type="text" placeholder="">
              </div>
              <div class="col-md-4">
                Package Name<input id="package_Name" class="form-control mandat_fld"  type="text" placeholder="Package Name">
              </div>
              
              <div class="col-md-3">
                Disk Space<input id="disk_Space"class="form-control mandat_fld" type="text" placeholder="Disk Space">
              </div>
              
              <div class="col-md-3">
               Email IDs<input class="form-control mandat_fld" type="text" placeholder="Email IDs" id="email_IDs">
             </div>
              
            </div>
            <div class="row">
              
              <div class="col-md-3">
              Bandwidth<input class="form-control mandat_fld" type="email" placeholder="Bandwidth" id="bandwidth">
            </div>
              
             <div class="col-md-3">
                    <div class="form-group">
                    Database<select class="form-control mandat_fld selection_drop" id="database_drop">
                      <option value="1" selected>Yes</option>
                      <option value="0">No</option>
                     </select>
                    </div>                  

                  </div>
             <div class="col-md-3">
              Cost <input class="form-control mandat_fld" type="text" placeholder="Cost" id="cost">
            </div>
          
            <div class="col-md-3">
                    <div class="form-group">
                    Status<select class="form-control mandat_fld selection_drop" id="package_status_drop">
                      <option value="1" selected>Active</option>
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
        <button type="button" class="btn btn-primary" id="client_create_btn" onclick="register_new_package('create')">Save </button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>