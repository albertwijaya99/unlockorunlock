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
    <link rel="icon" href="<?php echo base_url()?>assets/resources/uoru.png">
    <?php echo $sidenav;?>
</head>
<body>
    <?php echo $header;?>
    

    <div id="mySidenav" class="sidenav">
        <a id="dashboard" href="<?php echo base_url();?>admin/dashboard" > <img src="<?php echo base_url();?>assets/resources/dashboard.png" alt="dashboard" width="45" height="45">Dashboard</a>
        <a id ="dataItem" href="<?php echo base_url();?>admin/products" style="background-color:#3399ff;color:#FFF"><img src="<?php echo base_url();?>assets/resources/dataItem.png" alt="dataItem" width="40" height="40"> Data Item</a>
        <a id="salesReport" href="<?php echo base_url();?>admin/sales"><img src="<?php echo base_url();?>assets/resources/salesReport.png" alt="salesReport" width="40" height="40"> Sales Report</a>
        <a href="<?php echo base_url();?>login/logout"><img src="<?php echo base_url();?>assets/resources/logout.png" alt="dashboard" width="35" height="35"> Logout</a>
    </div>

    <div id="main">
        <?php echo $crud['output'];?>
    </div>
</body>
</html>