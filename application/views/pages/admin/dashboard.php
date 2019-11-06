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
    <?php echo $sidenav;?>
</head>
<body>
    <?php echo $header;?>

    <div id="mySidenav" class="sidenav">
        <a id="dashboard" href="<?php echo base_url();?>admin/dashboard" style="background-color:#3399ff;color:#FFF"> <img src="<?php echo base_url();?>assets/resources/dashboard.png" alt="dashboard" width="45" height="45">Dashboard</a>
        <a id ="dataItem" href="<?php echo base_url();?>admin/products"><img src="<?php echo base_url();?>assets/resources/dataItem.png" alt="dataItem" width="40" height="40"> Data Item</a>
        <a id="salesReport" href="<?php echo base_url();?>admin/sales"><img src="<?php echo base_url();?>assets/resources/salesReport.png" alt="salesReport" width="40" height="40"> Sales Report</a>
        <a href="<?php echo base_url();?>login/logout"><img src="<?php echo base_url();?>assets/resources/logout.png" alt="dashboard" width="35" height="35"> Logout</a>
    </div>

    <div id="main" class="container">
        <button onclick="window.location='<?php echo base_url();?>admin/products'">Data Item</button>
        <button onclick="window.location='<?php echo base_url();?>admin/sales'">Sales Report</button>
    </div>

    
</body>

</html>
