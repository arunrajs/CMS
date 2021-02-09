<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
   <!--  <img src="../../dist/img/government-of-kerala-logo-png-5.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8"> -->
    <span class="brand-text font-weight-light">Customer Management System</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="?f=dashboard" id="menu_dashboard" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
          
         
            <li class="nav-item">
                <a href="?f=orders" id="menu_orders" class="nav-link ">
                 <i class="fas fa-folder-open"></i>
                  <p>Domains</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="?f=job_card"  id="menu_job_card"  class="nav-link">
                 <i class="fas fa-cogs"></i>
                  <p>Hosting</p>
                </a>
              </li>

          <li class="nav-item has-treeview" id="master_list">
            <a href="#" id="menu_masters" class="nav-link">
             <i class="fas fa-brain"></i>
              <p>
                Masters
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

               <li class="nav-item">
                <a href="?f=client_master" id="menu_customer_master" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p>Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?f=package_master" id="menu_product_master" class="nav-link">
                  <i class="fas fa-download"></i>
                  <p> Packages </p>
                </a>
              </li>
            </ul>
          </li> 
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-sliders-h"></i>
                  <p> Settings</p>
                </a>
              </li>
           
        

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>