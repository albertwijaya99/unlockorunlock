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
    <title>Products</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/uoru.png">
    <style>
		.zoom {
		  padding: 50px;
		  transition: transform .2s;
		  width: 300px;
		  height: auto;
		  margin: 0 auto;
		}

		.zoom:hover {
		  -ms-transform: scale(1.5); /* IE 9 */
		  -webkit-transform: scale(1.5); /* Safari 3-8 */
		  transform: scale(1.5); 
		}
	</style>
</head>
<body>
    <?php echo $navbar;?>
    <br><br>
	<div class="row col-xl-12 col-md-12 pl-md-5 pl-xl-5">
		<div class="rounded pl-md-5 pr-md-5 pt-md-1 pl-xl-5 pr-xl-5 pt-xl-1" style=" background-color: #3399ff">
            <h3 class="text-white"><?php 
            if(isset($category['Description'])){
                echo $category['Description'];
                
            }else{
                echo "All Products";
    }?></h3>
		</div>
	</div>
    <br><br>

        <!-- MODAL -->
	

    <div class="container">
        <div class="row" id="produk" align="middle" class="text-center">
            <?php 
            $i=0;
            foreach($products as $product): 
                if($product['Quantity'] == 0){
                    continue;
                }
            ?>
            <div class="col-xl-4 col-md-4 col-sm-4 rounded" data-toggle="modal" data-target="#modal<?php echo $product['ProductID']?>">
                    <div></div><img src="<?php echo base_url()?>assets/uploads/pic/<?php echo $product['Pic']?>" class="rounded img-fluid zoom" width="300px">
                    <h5><?php echo $product['Name']?> <br> Rp <?php $price = $product['Price'];echo number_format("$price",0,",",".");?>,-<br>Stock: <?php echo $product['Quantity']?></h5>
            </div>
            <?php $i +=1;
        endforeach; ?>
		</div>
	</div>

    <?php 
            $i=0;
            foreach($products as $product): 
            if($product['Quantity'] == 0){
                continue;
            }
            ?>
    <div id="modal<?php echo $product['ProductID']?>" class="modal fade bd-example-modal-lg" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	    	<div class="modal-header">
	    		<div class="modal-title"><h2>Detail Information</h2></div>
	    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	    			<span aria-hidden="true">&times;</span>
        		</button>
	    	</div>
	      	<div class="modal-body" id="modall">
	      		<div class="">
	      			<img src="<?php echo base_url()?>assets/uploads/pic/<?php echo $product['Pic']?>" class="rounded img-fluid float-left" width="300px">
	      		</div>
	      		<div>
	      			<h3><?php echo $product['Name']?></h3>
	      		</div>
	      		<br>
	      		<div>
	      			<h4 style="color:red;">Rp <?php $price = $product['Price'];echo number_format("$price",0,",",".");?>,-</h4>
	      		</div>
                  <div>
                    <h4 style="color:red;">Stock: <?php echo $product['Quantity']?></h4>
                  </div>
	      		<br>
                <br>
                <br>
                <br>
	      	</div>
	      	<div class="modal-footer">
	      		<div class="row">
	      			<div class="mr-xl-3 mr-md-3">
	      				<button class="btn btn-primary btn-lg" id="cart<?php echo $i?>"> <i class="fa fa-cart-plus"></i> Add to Cart</button>
	      			</div>
	      			<div class="mr-xl-3 mr-md-3">
	      				<button class="btn btn-success btn-lg"id="buy<?php echo $i?>">Buy Now</button>
	      			</div>
	      			
	      		</div>
	      	</div>
	    </div>
	  </div>
	</div>
    <?php $i +=1;
        endforeach; ?>
	<!-- END MODAL -->
    <br><br>
    <?php echo $footer;?>
    <style>
	.produk img{
		width:100%;
		height:100%;
	}
</style>
<script>
        <?php 
        $i=0;
        foreach($products as $product): 
            if($product['Quantity'] == 0){
                continue;
            }
        ?>
           
            $('#cart<?php echo $i?>').click(function(){
                if(<?php
                        if($this->session->has_userdata('onlineUser')){
                            echo 0;
                        }
                        else {
                            echo 1;
                        }
                        ?>){
                    window.location="<?php echo base_url()?>main/shoppingCart";
                }
                else if(<?php 
                $temp=0;
                    foreach($carts as $cart){   
                        if($product['ProductID']==$cart['ProductID']){
                            $temp=1;
                            break;
                        }
                    }
                    if($temp){
                        echo 1;
                    }
                    else{
                        echo 0;
                    }
                    ?>){
                    window.location="<?php echo base_url().'main/shoppingCart/'.$product['ProductID']?>";
                }
                else{
                    $.post("<?php echo base_url()?>main/addToCart",
                    {
                        ProductID : <?php echo $product['ProductID']?>,
                        Quantity :  1,
                        Description : ''
                    });
                    window.location.reload();
                }
                    
            });
            $('#buy<?php echo $i?>').click(function(){
                if(<?php 
                $temp=0;
                    foreach($carts as $cart){
                        if($product['ProductID']==$cart['ProductID']){
                            $temp=1;
                            break;
                        }
                    }
                    if($temp){
                        echo 1;
                    }
                    else{
                        echo 0;
                    }
                    ?>){
                    window.location="<?php echo base_url().'main/shoppingCart'?>";
                }
                else{
                    $.post("<?php echo base_url()?>main/addToCart",
                    {
                        ProductID : <?php echo $product['ProductID']?>,
                        Quantity :  1,
                        Description : ''
                    });
                    window.location="<?php echo base_url()?>main/shoppingCart";
                }
            });
           
        <?php $i +=1;
        endforeach; ?>
</script>
</body>
</html>