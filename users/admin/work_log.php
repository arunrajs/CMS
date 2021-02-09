<!-- gen header included -->
<?php include '../../common/user_header_footer/header.php';?>
<!-- //gen header included -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Work Log</h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Work Log</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
       <!-- ============================= Main Section Start ====================================--> 

       <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List of Work Log </h3>
            <button type="button" style="float: right !important; width: 16%;" class="btn btn-block bg-gradient-success btn-sm" data-toggle="modal" data-target="#workLog_modal">+ New Work Log</button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row">

              <div class="col-sm-12">

            <!--  === -->
               <table id="jobcard_listTabel" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Card ID#</th>
              <th>Date</th>
              <th>Machine</th>
              <th>No Of Orders</th>
              <th>Total Qty</th>
              <th>Edit</th>
            </tr>
          </thead>
           <tbody>
                    <tr>
                      <td>1</td>
                      <td>XXXXX</td>
                      <td>XXX</td>
                      <td>XXX</td>
                      <td>XXX</td>
                      <td>XXX</td>
                      
                    </tr> 
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


        <!--================================ Main Section End ================================== -->
      </div>

    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Attention!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color: red;font-size: 1.5em;">Are you sure! you want to delete?</p> 
      </div>
      <div class="modal-footer">
        <button type="button" id="delete_btn" class="btn btn-primary" style="background-color: #ff0d24;border-color: #ff0d24;">Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- //Adde new zone modal -->

 <div class="modal fade" id="modal-lg">
      <?php include 'neworder_moal.php';?>
      </div>
      <!-- /.modal -->

<!-- /.content-wrapper -->

 <?php include '../../common/user_header_footer/footer.php';?>
  <!-- //Footer included --> 
  <script src="js_controller/controller.js"></script>
    <script src="js_controller/jobCard_controller.js"></script>
<script type="text/javascript">

  $(document).ready(function() {
  var user_id;
 
 // view_user();


    var table = $('#jobcard_listTabel').DataTable( {
       "ajax": "php_controller/list_jobcards.php",
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<i class='fas fa-edit'></i>"
        } ]
    } );




} );

</script>