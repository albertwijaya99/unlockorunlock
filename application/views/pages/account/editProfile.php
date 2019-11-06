<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $script;echo $style;?>
    <title>Edit Profile</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/ikon.png">
</head>
<body>

    <?php echo $navbar;?>
	<div class="container-fluid">
		<br><br><br>
		<!-- FORM -->
		<div class="col-md-12" style="padding-right: 15%; padding-left: 15%;">
			<form style=" border:2px; border-style: solid; border-color: #3399ff; border-radius: 5%; padding: 00px; padding-top: 20px;" action="<?php echo base_url();?>Login/editProfile" method="post">

				<!-- TEXT -->
				<div class="text-center">
					<img src="<?php echo base_url();?>assets/resources/uoru.png" class="img-fluid" style=" height: 55px; width:auto; border-radius:40%;">
					<h1 style="color:#3399ff;margin-left: %">Edit Profile</h1>
					<?php 
					if(isset($addr)){
						echo "<p style='margin-left: %;color:red;'>Please update your profile</p>";
					}
					?>
				</div>
				<!-- END TEXT -->
				<br>
				<!-- FORM COLUMN -->
				<!-- Buat Bungkus 2 kolom jadi 1 -->
				<div class="row col-md-12" style="margin:0px;">
					<!-- COLUMN 1 -->
					<div id="column1" class=" col-md-6" style="border-right: solid; border-color:#3399ff; ">
                    <div class="form-group">
				    <label for="firstName" style="color: #3399ff">First Name:</label>
				    <input type="text" class="form-control" id="firstName" placeholder="Input Your First Name" name="firstName" value="<?php echo $user['FirstName']?>" required>
					<div style="color:red;">
						<?php echo form_error('firstName'); ?>
					</div>
				</div>
				<div class="form-group">
				    <label for="lastName" style="color: #3399ff">Last Name:</label>
				    <input type="text" class="form-control" id="lastName" placeholder="Input Your Last Name" name="lastName" value="<?php echo $user['LastName']?>" required>
					<div style="color:red;">
						<?php echo form_error('lastName'); ?>
					</div>
				</div>
				<div class="form-group">
				    <label for="email" style="color: #3399ff">Email address:</label>
				    <input type="email" class="form-control" id="email" placeholder="Input Your Email Address" name="email" value="<?php echo $user['Email']?>" disabled>
					<div style="color:red;">
						<?php echo form_error('email'); ?>
					</div>
				</div>
				<div class="form-group">
				    <label for="dateOfBirth" style="color: #3399ff">Date of Birth:</label>
				    <input type="date" class="form-control" id="dateOfBirth" placeholder="Input Your Email Address" name="dateOfBirth" value="<?php echo $user['DateOfBirth']?>" required>
					<div style="color:red;">
						<?php echo form_error('dateOfBirth'); ?>
					</div>
				</div>
					</div>
					<!-- COLUMN 2 -->
				    <div id="column2" class="col-md-6">
				    	<div class="form-group">
						    <label for="address" style="color: #3399ff">Address:</label>
						    <textarea class="form-control" rows="5" style="resize:none;" id="address" placeholder="Input Your Address" name="address" required><?php echo $user['Address']?></textarea>
                            <div style="color:red;">
                                <?php echo form_error('address'); ?>
                            </div>
                        </div>
						<div class="form-group">
					        <label for="phone" style="color: #3399ff">Phone Number:</label>
					        <input type="text" class="form-control " id="phone" placeholder="Input Your Phone Number" name="phone" value="<?php echo $user['Phone']?>" required>
                            <div style="color:red;">
                                <?php echo form_error('phone'); ?>
                            </div>
                    	</div>
						<div>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpw"><h4>Change Password</h4></button>
						</div>
				    </div>
				</div>
				<!-- END FORM COLUMN -->
			    <br>
			    <div style="text-align: center;">
			    	<button type="submit" class="btn btn-primary" style="padding:6px 30px;" value="editProfile"><b>Save</b></button>
			    	<input type="button" class="btn btn-danger" value="Cancel" onclick="window.location='<?php echo base_url();?>'">
                    <br>
			    	<br>
			    </div>
			</form>
		</div>		
		<!-- END FORM -->
		<br>
		<br>
	</div>
	<div class="modal fade" id="modalpw" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!--  MODAL BODY -->
				<form method="post" action="<?php echo base_url();?>Login/updatePassword">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputPassword1">Current Password : </label>
							<input type="password" class="form-control" id="currPw" name="currPw" placeholder="Password" required>
							<div style="color:red;">
								<?php echo form_error('currPw'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">New Password :</label>
							<input type="password" class="form-control" id="newPw" name="newPw" placeholder="Password" required>
							<div style="color:red;">
								<?php echo form_error('newPw'); ?>
							</div>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Re-enter New Password :</label>
							<input type="password" class="form-control" id="conNewPw" name="conNewPw" placeholder="Password" required>
							<div style="color:red;">
								<?php echo form_error('conNewPw'); ?>
							</div>
						</div>
					</div>
					<!-- MODAL END BODY -->
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" value="changePw">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php echo $footer; 
	if(isset($pw)){
		?>
		<script>
		$(window).on('load',function(){
			$('#modalpw').modal('show');
		});
		</script>
		<?php
	}
	?>
</body>
</html>