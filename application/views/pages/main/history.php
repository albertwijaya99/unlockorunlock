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

    <br><br>
    <div class="container-fluid">
		<!-- TEXT SHOPPING CART -->
		<div class="col-xl-12 col-md-12 row pl-md-5 pl-xl-5">
			<div class="rounded pl-md-5 pr-md-5 pt-md-1 pl-xl-5 pr-xl-5 pt-xl-1" style=" background-color: #3399ff">
				<h3 class="text-white">History</h3>
			</div>
		</div>
		
        <?php $i=0; foreach ($sales as $sale):
            
            $i=1;?>
		<!-- LIST PRODUCT -->
        <hr>
		<div class="row col-xl-12 col-md-12 pl-md-5 pl-xl-5">
			<!-- PRODUCT ROW -->
            
            
			<div class="col-xl-6 col-md-8 pl-xl-3 pl-md-3" style="border-right: 1px solid lightgrey">
                <?php foreach($salesdetail as $saledetail):
                    if($saledetail['SalesID'] == $sale['SalesID']):    
                ?>
				<!-- PRODUCT 1 -->
				<div class="row">
					<div>
						<img src="<?php echo base_url()?>assets/uploads/pic/<?php echo $saledetail['Pic']?>" style="border: 1px solid lightgrey;" class="rounded img-fluid float-left zoom" width="150px">
		      		</div>
		      		<div class="pl-md-4 pl-xl-4">
		      			<div>
		      				<h4><?php echo $saledetail['Name']?></h4>
		      			</div>
	      				<div>
			      			<h4 style="color:red;">Rp <?php $price = $saledetail['Price'];echo number_format("$price",0,",",".");?>,-</h4>
			      		</div>
			      		<div>
			      			<h5>Quantity: <?php echo $saledetail['Quantity']?></h5>
			      		</div>
			      		<div class="form-group ">
						  <h5>Note: <?php echo $saledetail['Description']?></h5>	
						</div>
		      		</div>
				</div>
                    <?php endif;?>
				<!-- END PRODUCT 1 -->
			<?php endforeach;?>
				<!-- END ROW PRODUCT -->
			</div>
			
			<!-- DATA USER -->
			<div class="col-xl-6 col-md-4 pl-xl-5 pl-md-5">
                <div>
					<h5>Order ID: <?php echo $sale['SalesID'];?> </h5>
					<hr>
				</div>
                <div>
					<h5>Date: <?php $date=date_create($sale['Date']);echo date_format($date,"d F Y");?></h5>
					<hr>
				</div>
				<div>
					<h5>Name: <?php echo $sale['FirstName'].' '.$sale['LastName']?> </h5>
					<hr>
				</div>
				<div>
					<h5>Address: <?php echo $sale['Address']?></h5>
					<hr>
				</div>
				<div>
					<h5>Phone Number: <?php echo $sale['Phone']?></h5>
					<hr>
				</div>
                <div style="color:red;">
					<h5>Sub Total : Rp <?php 
                        $price=$sale['Total'];
                        echo number_format("$price",0,",",".");
                    ?>,-</h5>
					<hr>
				</div>
			</div>
		</div>
        <hr><br><br>
        <?php endforeach;?>
        <?php if(!$i){
            echo "<br><br><br><br>
            <div class='col-xl-12 col-md-12 pl-md-5 pl-xl-5 row justify-content-around'><div class='text-center'><h1>You Have no History.<br>Let's <a href='".base_url()."main/products/all' style='color:#3399ff;text-decoration:none;'>Make History</a> with us!</h1></div></div>";
        }?>
		<!-- END LIST PRODUCT IN CART -->

		<!-- List Total -->
		
    <?php echo $footer;?>
</body>
</html>