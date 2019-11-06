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
    <title>Register</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/uoru.png">
</head>
<body>
    <?php echo $navbar;?>

    <div class="container-fluid">
		<br><br>
		<!-- FORM -->
		<div class="col-md-12" style="padding-left: 33%;">
			<form class="col-md-6" style=" border:2px; border-style: solid; border-color: #3399ff; border-radius: 5%; padding: 30px; padding-top: 20px;" action="<?php echo base_url()?>login/register" method="post">
				<div class="text-center">
					<img src="<?php echo base_url();?>assets/resources/uoru.png" class="img-fluid" style=" height: 55px; width:auto; border-radius:40%;">
					<h1 style="color:#3399ff;">Sign Up</h1>
				</div>
				<br>
				<div class="form-group">
				    <label for="firstName" style="color: #3399ff">First Name:</label>
				    <input type="text" class="form-control" id="firstName" placeholder="Input Your First Name" name="firstName" required>
					<div style="color:red;">
						<?php echo form_error('firstName'); ?>
					</div>
				</div>
				<div class="form-group">
				    <label for="lastName" style="color: #3399ff">Last Name:</label>
				    <input type="text" class="form-control" id="lastName" placeholder="Input Your Last Name" name="lastName" required>
					<div style="color:red;">
						<?php echo form_error('lastName'); ?>
					</div>
				</div>
				<div class="form-group">
				    <label for="email" style="color: #3399ff">Email address:</label>
				    <input type="email" class="form-control" id="email" placeholder="Input Your Email Address" name="email" required>
					<div style="color:red;">
						<?php echo form_error('email'); ?>
					</div>
				</div>
				<div class="form-group">
			      <label for="password" style="color: #3399ff">Password:</label>
			      <input type="password" class="form-control " id="password" placeholder="Input Your Password" name="password" required>
				  <div style="color:red;">
						<?php echo form_error('password'); ?>
					</div>
				</div>
			    <div class="form-group">
			      <label for="confirmPW" style="color: #3399ff">Re-password:</label>
			      <input type="password" class="form-control " id="confirmPW" placeholder="Input Your Re-password" name="confirmPW" required>
				  <div style="color:red;">
						<?php echo form_error('confirmPW'); ?>
					</div>
				</div>
			    <div style="text-align: center;">
			    	<button type="submit" class="btn btn-primary" style="padding:6px 20px;">Sign Up</button>
			    	<p style="color:#3399ff;font-size: 0.75em;">Already have an account? <a href="<?php echo base_url();?>main/login" style="color: red;">Login</a></p>
			    </div>
			</form>
		</div>
		<!-- END FORM -->
		<br>
		<br>
	</div>

    <?php echo $footer;?>
</body>
</html>