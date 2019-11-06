<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $script;echo $style;?>

    <title>Shopping Cart</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/ikon.png">
</head>
<body>

    <?php echo $navbar;?>
    <br>
    <div class="container-fluid">
		<div class="text-center">
			<a href="<?php echo base_url();?>"><h1><i class="fa fa-check-circle" style="color:#3399ff; font-size: 25rem"></i></h1></a>
		</div>
        <div class="text-center">
            <h1 style="color:#3399ff;">Your Transaction is Successful!</h1>
        </div>
	</div>
	<br>
    <?php echo $footer;?>
</body>
</html>