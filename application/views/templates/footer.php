<style>
	/* Footer */
	@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		#footer {
		    background: #3399ff !important;
		}
		#footer h5{
			padding-left: 10px;
		    border-left: 3px solid #eeeeee;
		    padding-bottom: 6px;
		    margin-bottom: 20px;
		    color:#ffffff;
		}
		#footer a {
		    color: #ffffff;
		    text-decoration: none !important;
		    background-color: transparent;
		    -webkit-text-decoration-skip: objects;
		}
		#footer ul.social li{
			padding:0px 0;
		}
		#footer ul.social li a i {
		    margin-right: 5px;
			font-size:30px;
			-webkit-transition: .5s all ease;
			-moz-transition: .5s all ease;
			transition: .5s all ease;
		}
		#footer ul.social li:hover a i {
			font-size:35px;
			margin-top:-10px;
		}
		#footer ul.social li a,
		#footer ul.quick-links li a{
			color:#ffffff;
		}
		#footer ul.social li a:hover{
			color:#eeeeee;
		}
		#footer ul.quick-links li{
			padding: 3px 0;
			-webkit-transition: .5s all ease;
			-moz-transition: .5s all ease;
			transition: .5s all ease;
		}
		#footer ul.quick-links li:hover{
			padding: 3px 0;
			margin-left:5px;
			font-weight:700;
		}
		#footer ul.quick-links li a i{
			margin-right: 5px;
		}
		#footer ul.quick-links li:hover a i {
		    font-weight: 700;
		}

		@media (max-width:767px){
			#footer h5 {
		    padding-left: 0;
		    border-left: transparent;
		    padding-bottom: 0px;
		    margin-bottom: 10px;
		}
	}
	.footeer {
	  position: absolute;
	  right: 0;
	  bottom: 0;
	  left: 0;
	  padding: 1rem;
	  background-color: #efefef;
	  text-align: center;
	}
</style>
<!-- Footer -->
<footer>
	<div id="footer" class="container-fluid footeer" style="margin: 0px; padding: 0px;">
		<div class="row" style="margin: 0px; padding: 0px;">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-1">
				<h2 class="text-center text-white pb-1">Follow Us</h2>
				<ul class="list-unstyled list-inline social text-center">
					<li class="list-inline-item"><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
					<li class="list-inline-item"><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
			</hr>
		</div>	
		<div class="row" style="margin: 0px; padding: 0px;">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-1">
				<h2 class="text-center text-white pb-1"><a href="javascript:void();">Customer Service</a></h2>
				<ul class="list-unstyled list-inline social text-center">
					<li class="list-inline-item"><a href="<?php echo base_url()?>main/about">About Us</a></li>
					<li class="list-inline-item"><a href="<?php echo base_url()?>main/contact">Contact Us</a></li>
					<li class="list-inline-item"><a href="<?php echo base_url()?>main/faq">FAQ</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- END FOOTER -->
