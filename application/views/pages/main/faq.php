<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $script;echo $style;?>
    <title>FAQ</title>
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

<br>
	<div class="col-xl-12 col-md-12 text-center">
		<div>
			<h1>FAQ! Need help?</h1>
			<h2>We've got you covered</h2>
		</div>
	</div>
	<br>
	<div class="container-fluid pl-xl-5 pr-xl-5">
		<div class="row col-xl-12 col-md-12 justify-content-between pl-xl-5 pr-xl-5 pl-md-5 pr-md-5">
			<div class="col-xl-3 col-md-3 text-center text-white mr-xl-4 mr-md-4 mt-xl-5 mt-md-5" style=" background-color: #3399ff;cursor: pointer;" data-toggle="modal" data-target="#order">
				<div>
					<h1 style="font-size:7.95rem;"><i class="fa fa-shopping-bag"></i></h1>
				</div>
				<br>
				<div>
					<h3>How to Order</h3>
				</div>
			</div>
			<div class="col-xl-3 col-md-3 text-center text-white mr-xl-4 mr-md-4 mt-xl-5 mt-md-5" style=" background-color: #3399ff;cursor: pointer;" data-toggle="modal" data-target="#password">
				<div>
					<h1 style="font-size:7.95rem;"><i class="fa fa-key"></i></h1>
				</div>
				<br>
				<div>
					<h3>How to Change My Password</h3>
				</div>
			</div>
			<div class="col-xl-3 col-md-3 text-center text-white mr-xl-4 mr-md-4 mt-xl-5 mt-md-5" style=" background-color: #3399ff;cursor: pointer;" data-toggle="modal" data-target="#address">
				<div>
					<h1 style="font-size:7.95rem;"><i class="fa fa-pencil"></i></h1>
				</div>
				<br>
				<div>
					<h3>How to Change My Address</h3>
				</div>
			</div>
		</div>	
	</div>


	<!-- MODAL -->
	<div class="modal fade" id="order" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="padding: 0 0 0 0;">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">
						<h3>How to Order</h3>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<!--  MODAL BODY -->
				<div class="modal-body">
					<div>
                        <h5>1. Fill out the <a href="<?php echo base_url()?>main/editProfile" style="color:#3399ff;">Account Information</a> needed to process delivery</h5>
						<h5>2. Click the <a href="<?php echo base_url()?>main/products/all" style="color:#3399ff;">Product</a> you want to buy</h5>
						<h5>3. Click buy now</h5>
                        <h5>4. You can update your product details by clicking update on your <a href="<?php echo base_url()?>main/shoppingCart" style="color:#3399ff;">Shopping Cart</a></h5>
                        <h5>5. Click Save</h5>
						<h5>6. Click Check out</h5>
                        <h5>7. Click Buy</h5>
					</div>
				</div>
                <div class="modal-footer">
                <h4>Need more help? <a href="<?php echo base_url()?>main/contact" style="color:#3399ff;">Contact Us</a></h4>
                </div>
				<!-- MODAL END BODY -->
			</div>
		</div>
	</div>

	<!-- MODAL -->
	<div class="modal fade" id="password" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="padding: 0 0 0 0;">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">
						<h3>How to Change My Password</h3>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<!--  MODAL BODY -->
				<div class="modal-body">
					<div>
						<h5>1. Click your profile on the upper right corner</h5>
						<h5>2. On the drop down, click <a href="<?php echo base_url()?>main/editProfile" style="color:#3399ff;">Edit Profile</a></h5>
						<h5>3. Click on the <a href="<?php echo base_url()?>main/editProfile/pw" style="color:#3399ff;">Change Password</a> button</h5>
						<h5>4. Enter your current password</h5>
						<h5>5. Enter your New Password</h5>
						<h5>6. Re-enter your new password</h5>
                        <h5>7. Click Save</h5>
					</div>
				</div>
                <div class="modal-footer">
                <h4>Need more help? <a href="<?php echo base_url()?>main/contact" style="color:#3399ff;">Contact Us</a></h4>
                </div>
				<!-- MODAL END BODY -->
			</div>
		</div>
	</div>

	<!-- MODAL -->
	<div class="modal fade" id="address" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="padding: 0 0 0 0;">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">
						<h3>How to Change My Address</h3>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<!--  MODAL BODY -->
				<div class="modal-body">
					<div>
						<h5>1. Click your profile on the upper right corner</h5>
						<h5>2. On the dropdown, click <a href="<?php echo base_url()?>main/editProfile" style="color:#3399ff;">Edit Profile</a></h5>
						<h5>3. On the address field, input your address</h5>
						<h5>4. Click Save</h5>
					</div>
				</div>
                <div class="modal-footer">
                <h4>Need more help? <a href="<?php echo base_url()?>main/contact" style="color:#3399ff;">Contact Us</a></h4>
                </div>
				<!-- MODAL END BODY -->
			</div>
		</div>
	</div>
	<br><br><br>

<?php echo $footer;?>
</body>
</html>