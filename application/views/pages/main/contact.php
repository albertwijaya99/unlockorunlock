<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $script;echo $style;?>
    <title>Contact</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/ikon.png">
	<style>
	.carousel-inner img{
		width:100%;
		height:100%;
	}
	</style>
</head>
<body>
<?php echo $navbar;?>

<div class="container-fluid">
		<!-- TEXT -->
		<br><br><br>
		<div class="row justify-content-around">
			<div class="rounded pl-md-5 pr-md-5 pt-md-1 pl-xl-5 pr-xl-5 pt-xl-1" style=" background-color: #3399ff;">
				<h1 class="text-white">CONTACT US</h1>
			</div>
		</div>
		<br><br>
		<div class="col-xl-12 col-md-12 text-center">
			<h2><i class="fa fa-envelope"></i>	Email : UnlockOrUnlock@gmail.com</h2>
			<h2><i class="fa fa-phone"></i>	021-123456 / 081212121212</h2>
			<h2><i class="fa fa-instagram"></i>	@UnlockOrUnlock</h2>
		</div>
	</div>
<br><br>
<?php echo $footer;?>
</body>
</html>