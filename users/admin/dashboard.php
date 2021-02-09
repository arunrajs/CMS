<!-- gen header included -->
<?php include '../../common/user_header_footer/header.php';?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">

    <div class="container-fluid" style="clear: both;">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
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
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-external-link-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Clients</span>
              <span id="total_user_regstd" class="info-box-number">
              </span>
                <span class="info-box-number">256</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-globe"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Domain Registration</span>
              <span class="info-box-number">7</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-server"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Hosting Registration</span>
              <span class="info-box-number">3</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-box-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Packages</span>
              <span class="info-box-number">3</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col --> 

      </div>
      <!-- /.row -->
      <section class="content">
        <div class="container-fluid">

          <div class="row"> 
            <!-- BAR CHART -->
            <div class="col-md-6">
                <div class="card">
            <div class="card-header">
              <h3 class="card-title">Upcoming Renewals</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>                  
                  <tr>
                    <th style="width: 10px">#Ord</th>
                    <th>Customers</th>
                    <th>Product</th>
                    <th>Renewal Date </th>
                    <th style="width: 40px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>XXXXX</td>
                    <td>XXX</td>
                    <td>XXX</td>
                    <td><span class="badge bg-danger">View</span></td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>XXXXX</td>
                    <td>XXX</td>
                    <td>XXX</td>
                    <td><span class="badge bg-danger">View</span></td>
                  </tr>
                  <tr>
                    <td>1.</td>
                   <td>XXXXX</td>
                    <td>XXX</td>
                    <td>XXX</td>
                    <td><span class="badge bg-danger">View</span></td>
                  </tr>
                  <tr>
                    <td>1.</td>
                  <td>XXXXX</td>
                    <td>XXX</td>
                    <td>XXX</td>
                    <td><span class="badge bg-danger">View</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
            </div>
          <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Product wise Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

</div><!--/. container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include '../../common/user_header_footer/footer.php';?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<script type="text/javascript">

  $(function () {




    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
      'Hosting', 
      'Domain Registration', 
      ],
      datasets: [
      {
        data: [700,500],
        backgroundColor : ['#f56954', '#00a65a'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: {
         showAllTooltips: false,
        legend:{
          position:'right'
        }
      }
    })
  })
  function fetch_totla_application_count(){
   var dataString = 'function_name='+'fetch_total_application_count';
   $.ajax({
    type: "POST",
    url: "php_controller/controller.php",
    data: dataString,
    cache: false,
    success: function(result){
      $("#total_user_regstd").html(result);


    }
  });
   return false;
 }
 fetch_totla_application_count();
</script>
<script src="js_controller/controller.js"></script>




<script type="text/javascript">
  $(document).ready(function() {

  });  


</script>

