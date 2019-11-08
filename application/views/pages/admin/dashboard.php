<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- home.php -->
<!DOCTYPE html>
<html>
<head>
    <?php echo $style; echo $script;?>
	<title>Dashboard</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/ikon.png">
    
</head>
<body>
    <?php echo $header;?>

    <div class="container-fluid">
        
    <?php echo $sidenav;?>
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky pt-xl-4">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url();?>admin/dashboard" >
                  <span class="fa fa-home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/products" >
                  <span class="fa fa-shopping-cart"></span>
                  Data Item
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/sales" >
                  <span class="fa fa-file"></span>
                  Sales Report
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>login/logout" >
                  <span class="fa fa-user"></span>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </nav>
    <br>
        <main id="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <div class="row col-xl-12 col-md-12 pl-xl-5 pr-xl-5 pl-md-5 pr-md-5" >
            <div class="pl-xl-5 mr-xl-5">
              <div class=" mr-xl-5">
              </div>
            </div>
            <div class="col-xl-3 col-md-3 text-center text-white mr-xl-4 mr-md-4 mt-xl-5 mt-md-5 rounded" style=" background-color: #3399ff;cursor: pointer;" onclick="window.location='<?php echo base_url();?>admin/products'">
              <div>
                <h1 style="font-size:7.95rem;"><i class="fa fa-shopping-cart"></i></h1>
              </div>
              <br>
              <div>
                <h3>Data Item</h3>
              </div>
            </div>
            <div class="pl-xl-5 mr-xl-5">
            </div>
            <div class="col-xl-3 col-md-3 text-center text-white mr-xl-4 mr-md-4 mt-xl-5 mt-md-5 rounded" style=" background-color: #3399ff;cursor: pointer;" onclick="window.location='<?php echo base_url();?>admin/sales'">
              <div>
                <h1 style="font-size:7.95rem;"><i class="fa fa-file"></i></h1>
              </div>
              <br>
              <div>
                <h3>Sales Report</h3>
              </div>
            </div>
          </div>
            
        </main>
    </div>
</body>

    
</body>

</html>
