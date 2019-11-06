<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $script;echo $style;?>
    <title>Unlock or Unlock</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/uoru.png">
	<style>
	.carousel-inner img{
		width:100%;
		height:100%;
	}
	</style>
</head>
<body>
    <?php echo $navbar;?>
    
    <!-- CAROUSEL -->
	<div id="demo" class="carousel slide" data-ride="carousel">
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo base_url()?>assets/resources/carosel1.png" alt="1" width="1700" height="700">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url()?>assets/resources/carosel2.png" alt="2" width="1700" height="700"> 
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url()?>assets/resources/carosel3.png" alt="3" width="1700" height="700">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
	</div>
	<!-- END CAROUSEL -->
    <?php echo $footer;?>
</body>
</html>
