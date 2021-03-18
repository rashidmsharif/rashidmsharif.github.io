<html>
<head>
<style>
/* Footer
================================================== */


/*- Footer common */

.footer {
    background-color: #0d0d0d;
    color: #999;
}


.footer-main {
    padding: 80px 0 60px;
}

.footer .widget-title {
    font-size: 16px;
    font-weight: 700;
    position: relative;
    margin: 0 0 30px;
    padding-left: 15px;
    text-transform: uppercase;
    color: #fff;
    border-left: 3px solid #0084D9;
}


.footerx .widget-title {
    margin: 0 0 30px;
	padding-left: 15px;
    text-transform: uppercase;
    color: #fff;
    border-left: 3px solid #0084D9;
}




/* Footer about us */

.footer-logo {
    margin-bottom: 25px;
}


/* Footer social */

.footer-social {
    margin-top: 15px;
}

.footer-social .widget-title {
    font-size: 14px;
    margin-bottom: 10px;
}

.footer-social ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.footer-social ul li {
    margin: 0 10px 0 0;
    display: inline-block;
}

.footer-social ul li a i {
    display: block;
    font-size: 18px;
    color: #999;
    background: none;
    -webkit-transition: 400ms;
    -moz-transition: 400ms;
    -o-transition: 400ms;
    transition: 400ms;
}

.footer-social ul li a i:hover {
    color: #0084D9;
}




/* Links */

.footer-widget ul.list-arrow li {
    border-bottom: 1px solid rgba(255, 255, 255, .07);
    padding: 8px 0;
	
	
}

.footer-widget ul.list-arrow li:last-child {
    border-bottom: 0;
}

.footer-widget ul.list-arrow li a,
.footer-widget ul.list-arrow li:before {
    color: #b5b5b5;
}

.footer-widget ul.list-arrow li:hover a,
.footer-widget ul.list-arrow li:hover {
    color: #0084D9;
}

.working-hours {
    padding-right: 10px;
}

.working-hours .text-right {
    float: right;
}


/*-- Copyright --*/

.copyright {
    background: #0084D9;
    color: #111;
    padding: 25px 0;
    position: relative;
    z-index: 1;
    font-weight: 600;
    font-size: 12px;
}

.footer-menu {
    float: right;
}

.footer-menu ul li {
    display: inline-block;
    line-height: 12px;
    padding-left: 15px;
}

.footer-menu ul.nav li a {
    background: none;
    color: #111;
    padding: 0;
}

.footer-menu ul li a:hover {
    color: #fff;
}

#back-to-top {
    right: 40px;
    top: auto;
    z-index: 10;
    -webkit-backface-visibility: hidden;
}

#back-to-top.affix {
    bottom: 20px;
}

#back-to-top .btn.btn-primary {
    width: 36px;
    height: 36px;
    line-height: 36px;
    background: rgba(0, 0, 0, 0.9);
    border-radius: 3px;
    color: #0084D9;
    font-weight: 700;
    font-size: 16px;
    padding: 0;
}

#back-to-top .btn.btn-primary:hover {
    color: #fff;
}


/* responsive styles for footer starts */


/* Medium Devices, Desktops */
@media (min-width: 992px) and (max-width:1199px){


	/* Footer */

	.footer-social ul li {
   	margin: 0 3px 0 0;
   }

   .footer-menu {
    	float: none;
	}

	#back-to-top.affix {
    	bottom: 35px;
	}

	#back-to-top {
    	right: 15px;
   }


}

/* Small Devices, Tablets */
@media (min-width : 768px) and (max-width: 991px) {

/* Footer */

	.action-box{
		margin-bottom: 30px;
	}

	.footer-widget{
		display: inline-block;
		margin-bottom: 30px;
	}

	.newsletter-form input{
		width: 90%;
	}

	#back-to-top{
		right: 20px;
	}
	
	
	}


@media (max-width : 767px){

/* Footer */

	.action-box{
		margin-bottom: 30px;
	}

	.footer-widget{
		display: inline-block;
		margin-top: 40px;
	}

	#back-to-top.affix {
	   bottom: 70px;
	}

	#back-to-top{
		right: 10px;
	}

	.copyright-info{
		font-size: 13px;
		text-align: center;
	}

	.footer-menu {
    	float: none;
    	text-align: center;
	}

	.footer-menu ul li{
		padding-left: 5px;
	}

	.footer-menu ul.nav li a{
		font-size: 12px;
	}
	
	
	}




#footer {
	
	background-color: #0d0d0d; color: #b5b5b5;
	
}

</style>
</head>
<body>


<footer id="footer" class="footerx bg-overlay" style="">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12 footer-widget footer-about wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
            <h3 class="widget-title">About Us</h3>
            <img class="footer-logo" src="images/footer-logo.png" alt="" />
			<!--
            <p>FT Technologies (T) Limited is a technically firm organization managed by people who have expert 
			  knowledge and experience in ICT industry.</p>
			   -->
			 <div class="working-hours">
              Email:  <span class="text-right">info@ft.co.tz </span>
              <br> Phone: <span class="text-right">+255 754 710 506</span>
              <br> Address: <span class="text-right">P.O.Box 38373, DSM, TZ</span>
			  <br> Location:&nbsp; <span class="text-right"> Madela st, Mikocheni B</span>
			  
            </div>
			
            <div class="footer-social">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-md-4 col-sm-12 footer-widget wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              Office opens from Monday to Saturday, public holidays excluded. 
              <br><br> Monday - Friday: <span class="text-right">09:00 - 16:300 </span>
              <br> Saturday: <span class="text-right">09:00 - 15:00</span>
              <br> Sunday & holidays: <span class="text-right">...</span>
			  
            </div>
          </div><!-- Col end -->

          <div class="col-md-4 col-sm-12 footer-widget wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s" >
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="services_voip">VoIP Systems</a></li>
              <li><a href="services_networking">Networking Solutions</a></li>
              <li><a href="services_zimbra">Zimbra Install. & Training</a></li>
              <li><a href="services_audit">IT Security Audit</a></li>
              <li><a href="services_mobilevas">Mobile VAS</a></li>
			  
			  
			  
												
												
												
            </ul>
          </div><!-- Col end -->


        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="copyright-info">
			<?php $yearCurrent = date("Y"); ?>
              <span>Copyright © <?php echo $yearCurrent; ?> by <a style="text-decoration: none; color: #000 !important;" href="http://ft.co.tz">FT Technologies</a></span>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6">
            <div class="footer-menu">
              <ul class="nav unstyled">
                <li><a href="about">About</a></li>
                <li><a href="projects">Projects</a></li>
                <li><a href="servicesoverview">Services</a></li>
                <li><a href="certs">Certifications</a></li>
                <li><a href="contact">Contact</a></li>
              </ul>
			  
			  
			  
			  
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
						<a href="#" id="toTop" style="display: block; margin-right: 20px;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!--
        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>
		-->
			  
			  
			  
			  
            </div>
			
          </div>
		  
		  
		
		  
		  
		  
		  
		  
		  
		  
        </div><!-- Row end -->

		
		

      </div><!-- Container end -->
    </div><!-- Copyright end -->

  </footer><!-- Footer end -->
  
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

  </body>
  </html>