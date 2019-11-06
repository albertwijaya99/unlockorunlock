<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $script;echo $style;?>
    <title>Check Out</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/ikon.png">
</head>
<body>
    <?php echo $navbar;?>
	<br><br>
    <div class="container-fluid">
		<!-- TEXT SHOPPING CART -->
		<div class="col-xl-12 col-md-12 row pl-md-5 pl-xl-5">
			<div class="rounded pl-md-5 pr-md-5 pt-md-1 pl-xl-5 pr-xl-5 pt-xl-1" style=" background-color: #3399ff">
				<h3 class="text-white">Check Out</h3>
			</div>
		</div>
		<!-- END TEXT SHOPPING CART -->
		<br><br>

		<div class="row col-xl-12 col-md-12 pl-md-5 pl-xl-5">
			<div class="col-xl-6 col-md-8 row pl-xl-3 pl-md-3">
				<div class="rounded pl-xl-2 pr-xl-2 pt-xl-1 pb-xl-1 pl-md-2 pr-md-2 pt-md-1 pb-md-1" style="background-color: #3399ff">
					<h5 class="text-white">Item Details</h5>
				</div>
			</div>
			<div class="col-xl-6 col-md-3 row">
				<div class="pl-xl-5 pl-md-5">
					<div class="rounded pl-xl-2 pr-xl-2 pt-xl-1 pb-xl-1 pl-md-2 pr-md-2 pt-md-1 pb-md-1" style="background-color: #3399ff">
						<h5 class="text-white">Order Data</h5>
					</div>
				</div>
			</div>
			
		</div>
		<br>

		<!-- LIST PRODUCT -->
		<div class="row col-xl-12 col-md-12 pl-md-5 pl-xl-5">
			<!-- PRODUCT ROW -->
			<div class="col-xl-6 col-md-8 pl-xl-3 pl-md-3" style="border-right: 1px solid lightgrey">
				<?php foreach($carts as $cart):?>
				<!-- PRODUCT 1 -->
				<div class="row">
					<div>
						<img src="<?php echo base_url()?>assets/uploads/pic/<?php echo $cart['Pic']?>" style="border: 1px solid lightgrey;" class="rounded img-fluid float-left zoom" width="150px">
		      		</div>
		      		<div class="pl-md-4 pl-xl-4">
		      			<div>
		      				<h4><?php echo $cart['Name']?></h4>
		      			</div>
	      				<div>
			      			<h4 style="color:red;">Rp <?php $price = $cart['Price'];echo number_format("$price",0,",",".");?>,-</h4>
			      		</div>
			      		<div>
			      			<h5>Quantity: <?php echo $cart['cartQty']?></h5>
			      		</div>
			      		<div class="form-group ">
						  <h5>Note: <?php echo $cart['Description']?></h5>	
						</div>
		      		</div>
		      		<br>
				</div>
				<!-- END PRODUCT 1 -->
				<br><!-- BUAT JARAK -->
			<?php endforeach;?>
				<!-- END ROW PRODUCT -->
			</div>
			
			<!-- DATA USER -->
			<div class="col-xl-6 col-md-4 pl-xl-5 pl-md-5">
				<div>
					<h5>Name: <?php echo $profile['FirstName'].' '.$profile['LastName']?> </h5>
					<hr>
				</div>
				<div>
					<h5>Address: <?php echo $profile['Address']?></h5>
					<hr>
				</div>
				<div>
					<h5>Phone Number: <?php echo $profile['Phone']?></h5>
					<hr>
				</div>
			</div>
		</div>
		
		<!-- END LIST PRODUCT IN CART -->

		<!-- List Total -->
		<div class="col-xl-12 col-md-12">
			<hr>
			<div class="justify-content-between row pr-xl-5 pr-md-5 pl-xl-5 pl-md-5">
				<div class="pt-xl-3 pt-md-3 pr-md-3">
					<h4>Sub Total : Rp <?php 
                        $price=0;
                        foreach($products as $product){
                            $price += $product['Price'] * $product['cartQty'];
                        }
                        echo number_format("$price",0,",",".");?>,-</h4>
				</div>
				<div class="pt-xl-2 pt-md-2">
					<a href="<?php echo base_url().'main/confirm';?>">
						<button class="btn btn-danger rounded pl-xl-3 pr-xl-3 pl-md-3 pr-md-3" data-toggle="modal" data-target="#exampleModalCenter"><h5>Confirm</h5></button>
					</a>
				</div>
			</div>
			
			<hr>
		</div>
	</div>
    <?php echo $footer;?>
</body>
</html>