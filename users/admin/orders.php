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
          <h1 class="m-0 text-dark">Orders</h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Orders</li>
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
            <h3 class="card-title">List of Orders </h3>
            <button type="button" style="float: right !important; width: 16%;" class="btn btn-block bg-gradient-success btn-sm" data-toggle="modal" id="newOrder_btn" onclick="loadStatus_on_modal('all');" data-target="#modal-lg">+ New Order</button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row">

              <div class="col-sm-12">

            <!--  === -->
               <table id="order_list_table" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Ord#</th>
              <th>Date</th>
              <th>Customer</th>
              <th>Product</th>
              <th>Type</th>
              <th>Weight</th>
              <th>Amount</th>
              <th>Status</th>
              <th>Edit</th>
            </tr>
          </thead>
             <tbody id="order_tableBody">
          
          
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




      <!-- /.modal -->

<!-- /.content-wrapper -->

 <?php include '../../common/user_header_footer/footer.php';?>
  <!-- //Footer included --> 
  <script src="js_controller/controller.js"></script>
  <script src="js_controller/order_controller.js"></script>
  <script src="js_controller/setData.js"></script>
<script type="text/javascript">

  $(document).ready(function() { 
    $('#order_list_table').DataTable();
  });

</script>
