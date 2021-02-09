  <div class="modal fade" id="client_list_model">
  <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Home> Client List</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <!-- Modal Body -->
               <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List of Client </h3>
            <button type="button" style="float: right !important; width: 16%;" class="btn btn-block bg-gradient-success btn-sm" data-toggle="modal" data-target="#create_client_modal"  onclick="resetSaveBtns('client_create_btn','register_new_client','master_reg_form')" style="white-space: nowrap;">+ Add New </button>
          </div>
          <!-- /.card-header -->
          <div class="card-body" style="overflow-x:auto;">
            <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row">

              <div class="col-sm-12">

            <!--  === -->
               <table id="user_list_table" class="table table-striped table-bordered resposive" style="width:100%">
          <thead>
            <tr>
              <th>ID#</th>
              <th>Client Name</th>
              <th>Address</th>
              <th>MobileNo</th>
              <th>Email</th>
              <th>Status</th>
              <th>Edit</th>
            </tr>
          </thead>
           <tbody>
                    
                  </tbody>
          </table>
      
            <!--  === -->

            </div>
          </div>
          </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>

            <!--// Modal Body -->
           </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save </button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
