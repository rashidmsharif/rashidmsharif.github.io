
<!--footer starts here

-->

<div class="footerx" style="background-color: #6C4019; padding-top: 20px; padding-bottom: 20px; background: url(images/serv-strip2.jpg)repeat-x;">	
	<div class="copyright">
				<div class="container">
					<div class="row">
					
					
						<div class="col-xs-12 col-xs-6">
							
							<div class="copyright-info" style="margin-top: 10px">
								<a style="text-decoration: none;" 
								href="#contact" data-toggle="modal" data-target="#contact"
								class="icoInstagram myLinks2" title="Email us"><i class="fas fa-at" style="color: #0084D9; padding: 3px 3px 3px 3px;"></i>
								<span style="">info@ft.co.tz</span>
								</a>
							</div>
							
							<div class="copyright-info" style="margin-top: 10px">
								<a style="text-decoration: none;" 
								href="#" 
								class="icoInstagram myLinks2" title="official website"><i class="glyphicon glyphicon-globe" style="color: #0084D9; padding: 3px 3px 3px 3px;"></i>
								<span style="">www.ft.co.tz</span>
								</a>
							</div>
							
						</div>
						
						<div class="col-xs-12 col-xs-6" style="text-align:right;">
							
							<div class="copyright-info" style="margin-top: 10px"> 
								<a style="text-decoration: none; text-align:right;" 
								href="#phone" data-toggle="modal" data-target="#phone"
								class="icoFacebook myLinks2" title="Call us">
								<span style="">0754 710 506</span> <i class="fa fa-phone" style="color: #0084D9; padding: 3px 3px 3px 3px;" ></i>
								</a>
							</div>
							
							<div class="copyright-info" style="margin-top: 10px">
								<a style="text-decoration: none; text-align:right;" 
								href="#"
								class="icoInstagram myLinks2" title="Postal address">
								<span style="">P. 0. Box 38373</span> <i class="fa fa-envelope" style="color: #0084D9; padding: 3px 3px 3px 3px;"></i>
								</a>
							</div>
							
						</div>
						
						<div class="col-xs-12 col-xs-12" style="margin: 30px 0px; text-align:center;">
							
							<div class="copyright-info" style="margin-top: 0px">
								<a style="text-decoration: none;" 
								href="#" 
								class="icoInstagram myLinks2" title="Phyisical address"><i class="glyphicon glyphicon-map-marker" style="color: #0084D9; padding: 3px 3px 3px 3px;"></i>
								<span style="">Madale st, Mikocheni B, , DSM, TZ</span>
								</a>
							</div>
							
							<?php $yearCurrent = date("Y"); ?>
							<div class="copyright-info" style="margin-top: 0px">
								<a style="text-decoration: none; " 
								href="#" 
								class="icoInstagram myLinks2" title="Copyright"><i class="fa fa-copyright" style="color: #0084D9; padding: 3px 3px 3px 3px;"></i>
								<span style="color: #ffffff !important;"> <?php echo $yearCurrent; ?>&nbsp; 
								<a style="text-decoration: none; color: #0084D9 !important;" href="http://ft.co.tz">FT Technologies</a></span>
								</a>
							</div>
							
						</div>

						<!--
						<div class="col-xs-12 col-sm-6">
							<div class="footer-menu">
								
							<?php //$yearCurrent = date("Y"); ?>
								<span style="color: #ffffff !important; padding-left: 15px;">Copyright © <?php //echo $yearCurrent; ?>&nbsp; <a style="text-decoration: none; color: #0084D9 !important" href="http://ft.co.tz">FT Technologies Limited</a></span>
							</div>
						</div>
						-->
					</div><!-- Row end -->

					<script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="#" id="toTop" style="display: block; "> <span id="toTopHover" style="opacity: 1;"> </span></a>

				</div><!-- Container end -->
			</div><!-- Copyright end -->

</div>
<!--footer end here-->

  <?php 
  
  
 include('modal_phone.php'); 
include('modal_insta.php'); 
include('modal_client-email.php'); 
include('modal_location.php'); 


  
  
  ?>		
  
  
  <!-- Javascript Library Files -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Slick Slider -->
<script src="plugins/slick/slick.js"></script>


<script src="js/script.js"></script>


