<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- HEADER -->
<header style="background-color: #3399ff;">
	<nav class="navbar navbar-primary navbar-expand">
		<!-- DROP DOWN PRODUCT -->
		<div class="collapse navbar-collapse col-xl-4 col-md-4" style="padding: 0 0 0 0;" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<!-- DROP DOWN -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" data-toggle="dropdown" role="button">Product</a>
					<div class="dropdown-menu" aria-labelledy="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url();?>main/products/all">All Products</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url();?>main/products/1">Cook Ware</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url();?>main/products/2">Drink Collection</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url();?>main/products/3">Dry Storage</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url();?>main/products/4">Freezer</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url();?>main/products/5">Lunch Set</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url();?>main/products/6">Microwave Reheat</a>
						
					</div>
				</li>
				<!-- END DROP DOWN -->
			</ul>
		</div>
		<!-- END DROP DOWN PRODUCT -->
		<!-- LOGO -->
		<div class="pl-xl-4 pl-md-1">
			<a href="<?php echo base_url();?>">
			<div class="pl-xl-5 pl-md-2">
				<img src="<?php echo base_url();?>assets/resources/uoru.png" class="float-left mt-1 mr-2" width="60px;" style="border-radius: 35%">
				<div class="navbar-brand text-white mt-xl-1 mt-md-1"><h2>Unlock or Unlock</h2></div>
			</div>
			</a>
		</div>
		<!-- END LOGO -->
		<!-- RIGHT SIDE NAVBAR -->
		<div class="ml-auto">
			<ul class="navbar-nav">
				<!-- SHOPPING CART BTN -->
				<li class="nav-item">
					<a href="<?php echo base_url()?>main/shoppingCart" class="btn"><i class="fa fa-shopping-cart text-white" style="font-size: 1.5em"></i></a>
				</li>
				<!-- END SHOPPING CART BTN -->
				<!-- BTN LOGIN  OR -->
				<?php
					if($this->session->has_userdata('onlineUser')){					
						echo "<li class='nav-item dropdown' mr-xl-2 mr-md2>";
						echo "<a class='nav-link dropdown-toggle text-white' href='#' id='profileDropdown' data-toggle='dropdown' role='button'>".$name."</a>";
						echo "<div class='dropdown-menu' aria-labelledy='profileDropdown'>";
						echo "<a class='dropdown-item' href='".base_url()."main/editProfile'>Edit Profile</a>";
						echo "<div class='dropdown-divider'></div>";
						echo "<a class='dropdown-item' href='".base_url()."main/history'>History</a>";
						echo "<div class='dropdown-divider'></div>";
						echo "<a class='dropdown-item' href='".base_url()."login/logout'>Log Out</a>";
						echo "</div>";
						echo "</li>";
					}
					else{
						echo "<li class='nav-item'>";
						echo "<a href='".base_url()."main/login' class='btn text-white'>Log In</a>";
						echo "</li>";
					}
					?>
				<li class="pl-5"></li>
				<!-- END DROP DOWN USER -->
			</ul>
		</div>
		<!-- END RIGHT SIDE NAVBAR -->
	</nav>
	<style>
		.dropdown-menu{
			min-width: 1rem;
		}
		.dropdown-item{
		}
	</style>
</header>