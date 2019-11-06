<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $style;echo $script;?>
    <title>Login</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/uoru.png">
</head>
<body>
	<?php echo $navbar;?>
	<div class="container-fluid">
	<br><br>
			<!-- FORM -->
			<div class="col-md-12" style="padding-left: 33%;">
				<form class="col-md-6" style=" border:2px; border-style: solid; border-color: #3399ff; border-radius: 5%; padding: 30px; padding-top: 20px;" action="<?php echo base_url();?>login/login" method="post">
					<div style="text-align: center;">
						<img src="<?php echo base_url();?>assets/resources/uoru.png" class="img-fluid" style="padding:auto; height: 55px; width:auto; border-radius:40%;">
						<br>
						<h1 style="color:#3399ff">Login</h1>
							<?php 
								if (isset($error)){
									echo "<div style='color:red;'>$error</div>";
								}			 
							?>
					</div>
					<div class="form-group">
					    <label for="email" style="color: #3399ff">Email address:</label>
					    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
					</div>
					<div class="form-group">
				      <label for="password" style="color: #3399ff">Password:</label>
				      <input type="password" class="form-control " id="password" placeholder="Password" name="password" required>
				    </div>
				    <br>
				    <div style="text-align: center;">
				    	<button type="submit" class="btn btn-primary" style="padding:6px 20px;">Log in</button>
				    	<p style="color:#3399ff;font-size: 0.75em;">Don' have an account? <a href="<?php echo base_url();?>main/register" style="color: red;">Sign Up</a></p>
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