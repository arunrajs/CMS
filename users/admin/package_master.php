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
          <h1 class="m-0 text-dark">List of Package</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">List of Package</li>
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
            <h3 class="card-title">List of Package</h3>
            <a style="float: right;color: #ffffff;background-color: #dc3545;" class="page-link" href="?f=Clients_master_reg"  data-toggle="modal" data-target="#package_master_modal">Add New Package</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row">

              <div class="col-sm-12">

            <!--  === -->
               <table id="package_list_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Package</th>
              <th>Disk Space</th>
              <th>Email IDs</th>
              <th>Bandwidth</th>
              <th>Database</th>
              <th>Cost</th>
              <th>Action</th>
            </tr>
          </thead>
          
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

<!-- /.content-wrapper -->

 <?php include '../../common/user_header_footer/footer.php';?>
  <!-- //Footer included --> 
  <script src="js_controller/controller.js"></script>
  <script src="js_controller/setData.js"></script>
<script type="text/javascript">

  $(document).ready(function() {
  var user_id;
 
 // view_user();



    var table = $('#package_list_table').DataTable( {
        "ajax": "php_controller/list_packages.php",
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<a style='cursor:pointer;' href='#' id='view_id'>Edit</a> | <a style='color:red;' id='delete_id' href='#' >Delete</a>"
        } ]
    } );

    $('#package_list_table tbody').on( 'click', '#view_id', function () {
        var data = table.row( $(this).parents('tr') ).data();
        edit_me(data[0],'edit_product_modal','products','ProdID');
    } );

 $('#package_list_table tbody').on( 'click', '#delete_id', function () {
        var data = table.row( $(this).parents('tr') ).data();
        delete_me(data[0],'products','ProdID','Country_list_table','load_product_table');
    } );
  
   
} );

</script>