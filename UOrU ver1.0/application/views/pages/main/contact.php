<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $script;echo $style;?>
    <title>Contact</title>
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

<div class="container-fluid">
		<br><br>
		<!-- TEXT -->
		<div class="col-xl-12 col-md-12 text-center">
			<div>
				<h1>CONTACT US</h1>
			</div>
		</div>
		<br>
		<!-- END TEXT -->
		<!-- FORM -->
		<div class="col-md-12 col-xl-12" style="padding-right: 15%; padding-left: 15%;">
			<form style=" border:2px; border-style: solid; border-color: #3399ff; border-radius: 3%; padding: 00px; padding-top: 15px;">
				<div class=" pl-xl-4 pl-md-4 text-center" style="border-bottom: 1px solid #3399ff;">
					<h1>Input Information</h1>
				</div>
				<br>
				<!-- FORM COLUMN -->
				<!-- Buat Bungkus 2 kolom jadi 1 -->
				<div class="row col-md-12" style="margin:0px;">
					<!-- COLUMN 1 -->
					<div id="column1" class=" col-md-6" style="border-right: solid; border-color:#3399ff; ">
						<div class="form-group">
						    <label for="email" style="color: #3399ff">First Name:</label>
						    <input type="text" class="form-control" id="email" placeholder="Input Your Name">
						</div>
						<div class="form-group">
						    <label for="email" style="color: #3399ff">Last Name:</label>
						    <input type="text" class="form-control" id="email" placeholder="Input Your Name">
						</div>
						<div class="form-group">
					      <label for="phoneNumber" style="color: #3399ff">Phone Number:</label>
					      <input type="text" class="form-control " id="phoneNumber" placeholder="Input Your Phone Number" name="pswd">
					    </div>
					    <div class="form-group">
						    <label for="email" style="color: #3399ff">Email:</label>
						    <input type="email" class="form-control" id="email" placeholder="Input Your Name">
						</div>
					</div>
					<!-- COLUMN 2 -->
				    <div id="column2" class="col-md-6">
				    	<div class="form-group">
						    <label for="email" style="color: #3399ff">Subject:</label>
						    <input type="text" class="form-control" id="email" placeholder="Input Your Name">
						</div>
				    	<div class="form-group">
						    <label for="address" style="color: #3399ff">Content:</label>
						    <textarea class="form-control" rows="5" style="resize:none;" id="address" placeholder="Input Your Address"></textarea>
						</div>
						<div class="custom-file" >
						  <input type="file" class="custom-file-input" id="customFile" >
						  <label class="custom-file-label" for="customFile">Choose file</label>
						</div>
				    </div>
				</div>
				<!-- END FORM COLUMN -->
			    <br>
			    <div style="text-align: center;">
			    	<button type="submit" class="btn btn-primary" style="padding:6px 30px;"><b>Submit</b></button>
			    	<br>
			    	<br>
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