<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $script;echo $style;?>

    <title>Shopping Cart</title>
    <link rel="icon" href="<?php echo base_url()?>assets/resources/uoru.png">
</head>
<body>

    <?php echo $navbar;?>
    <br><br>
    <!-- BODY -->
	<div class="container-fluid">
		<!-- TEXT SHOPPING CART -->
		<div class="col-xl-12 col-md-12 row pl-md-5 pl-xl-5">
			<div class="rounded pl-md-5 pr-md-5 pt-md-1 pl-xl-5 pr-xl-5 pt-xl-1" style=" background-color: #3399ff">
				<h3 class="text-white"><i class="fa fa-shopping-cart"></i>	Shopping Cart</h3>
			</div>
		</div>
		<!-- END TEXT SHOPPING CART -->

		<br><br>
		<!-- LIST PRODUCT IN CART -->
        
        <?php 
          if(isset($error)){
              echo "<div class='col-xl-12 col-md-12 pl-md-5 pl-xl-5' style='color:red;'><div class='row'>".$error."</div></div>";
          }
            $i=0;
            foreach($products as $product): ?>
		<div class="col-xl-12 col-md-12 pl-md-5 pl-xl-5">
			<div class="row">
				<div>
					<img src="<?php echo base_url()?>assets/uploads/pic/<?php echo $product['Pic']?>" style="border: 1px solid lightgrey;" class="rounded img-fluid float-left zoom" width="200px">
	      		</div>
	      		<div class="pl-md-4 pl-xl-4">
	      			<div>
	      				<h3><?php echo $product['Name']?></h3>
	      			</div>
      				<div>
		      			<h3 style="color:red;">Rp <?php $price = $product['Price'];echo number_format("$price",0,",",".");?>,-</h3>
		      		</div>
		      		<div>
			      		<div>
                          <h3 style="color:red;">Quantity: <?php echo $product['cartQty'];?></h3> 
                        </div>
		      		</div>
                      <div>
			      		<div>
                          <button class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $product['ProductID']?>">Update</button>
                        </div>
		      		</div>
	      		</div>
			</div>
      		<hr>
		</div>
        
        <?php $i +=1;
        endforeach; ?>
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
                        echo number_format("$price",0,",",".");
                    ?>
                    ,-</h4>
				</div>
				<div class="pt-xl-2 pt-md-2">
					<div class="">
					<a href="<?php 
					if(isset($address)){
						echo base_url().'main/checkOut';
					}
					else{
						echo base_url().'main/editProfile';
					}?>"><button class="btn btn-danger rounded pl-xl-3 pr-xl-3"><h5>Check Out</h5></button></a>
					</div>
				</div>
			</div>
			<hr>
		</div>
	</div>
	<!-- END BODY -->
	<br><br><br>
    <?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    $i=0;
    foreach($products as $product): ?>
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
	      		
	      		<div class="row">
	      			<div class="btn"  id="minus<?php echo $i?>">
		      			<h5 ><i class="fa fa-minus-circle" style="color:red;"></i></h5>
		      		</div>
		      		<div>
                      <p class="text-center" name='qty' id="qty<?php echo $i?>"style="padding-top:6px;margin-left:10px;margin-right:10px;"><?php echo $product['cartQty'];?></p>
		      		</div>
		      		<div class="btn"  id="plus<?php echo $i?>">
		      			<h5 ><i class="fa fa-plus-circle" style="color: lightgreen;"></i></h5>
		      		</div>
	      		</div>

	      		<div class="form-group">
	      			<label for="note">Catatan Untuk Penjual: (Opsional)</label>
	      			<textarea  class="form-control" id="desc<?php echo $i?>"placeholder="Contoh : Warna Putih, Ukuran XL, Edisi ke-2" class="rounded" style="height:5rem; width:28rem; resize: none;"maxlength="120"><?php if(isset($product['Description'])){echo $product['Description'];}?></textarea>
	      		</div>
	      	</div>
	      	<div class="modal-footer">
	      		<div class="row">
	      			<div class="mr-xl-3 mr-md-3">
	      				<button class="btn btn-primary btn-lg" id="save<?php echo $i?>">Save</button>
	      			</div>
	      			
	      		</div>
	      	</div>
	    </div>
	  </div>
	</div>
    <?php $i +=1;
        endforeach; ?>
	<!-- END MODAL -->
    <?php echo $footer;
        if(isset($update)){
            ?>
            <script>
            $(window).on('load',function(){
                $('#modal<?php echo $update?>').modal('show');
            });
            </script>
            <?php
        }
    ?>
    <script>
    <?php 
        $i=0;
        foreach($products as $product): ?>
            var qty<?php echo $i?> = ($('#qty<?php echo $i?>').text()*1);
            $('#minus<?php echo $i?>').click(function(){
                if(qty<?php echo $i?> > 0 ){
                    qty<?php echo $i?> -= 1; 
                }
                $('#qty<?php echo $i?>').text(qty<?php echo $i?>);
            });
            $('#plus<?php echo $i?>').click(function(){
                if(qty<?php echo $i?> < <?php echo $product['Quantity']?> ){
                    qty<?php echo $i?> += 1; 
                }
                $('#qty<?php echo $i?>').text(qty<?php echo $i?>);
            });
            $('#qty<?php echo $i?>').change(function(){
                var qty<?php echo $i?> =  $('#qty<?php echo $i?>').text();
                $('#minus<?php echo $i?>').click(function(){
                    if(qty<?php echo $i?> > 0 ){
                        qty<?php echo $i?> -= 1; 
                    }
                    $('#qty<?php echo $i?>').text(qty<?php echo $i?>);
                });
                $('#plus<?php echo $i?>').click(function(){
                    qty<?php echo $i?> +=1;
                    $('#qty<?php echo $i?>').text(qty<?php echo $i?>);
                });
            });
            $('#save<?php echo $i?>').click(function(){
                $.post("<?php echo base_url()?>main/updateCart",{
                    CartID : <?php echo $product['CartID'];?>,
                    Quantity :  $('#qty<?php echo $i?>').text(),
                    Description : $('#desc<?php echo $i?>').val()
                });
                window.location.reload();
            });
        <?php $i +=1;
        endforeach; ?>
    </script>
</body>
</html>