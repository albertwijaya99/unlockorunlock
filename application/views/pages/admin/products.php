<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php echo $style;echo $script;?>
    <?php foreach($crud['css_files'] as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($crud['js_files'] as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

    <title>Data Item</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/ikon.png">
    
</head>
<body>
    <?php echo $header;?>
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky pt-xl-4">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>admin/dashboard" >
                  <span class="fa fa-home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url();?>admin/products" >
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

    <div class="container-fluid">
    <?php echo $sidenav;?>
    <div id="main">
        <?php echo $crud['output'];?>
    </div>
    </div>

    
</body>
</html>