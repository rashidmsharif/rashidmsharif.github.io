<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Contact FT Technologies</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="Use the form below to write to us, or make an inquiry." />
   <meta name="author" content="Hussein Farid">

<?php  include ("head.php");  ?>

</head>
<body>

<?php 

if (isset($_POST['email_user'])) {

if (count($errors) == 0) {
	
?>

<script type="text/javascript">
    $.notify({title :'Success!', content:'Your Email has been sent.', timeout:5000});
   // $.notify({title :'jQueryScript.Net', content:'A jQuery Plugin Website', timeout:0});
</script>

<?php	
	
} else {

?>

<script type="text/javascript">
    $.notify({title :'Error!', content:'There are errors in your email. Please correct and resend the email.', timeout:5000});
   // $.notify({title :'jQueryScript.Net', content:'A jQuery Plugin Website', timeout:0});
</script>

<?php	
	
} 

}

?>


<!--header start here-->
<div class="bann-two">
	<div class="container">
		<?php include ("top_socialLinks.php"); ?>
	  </div>
  <?php include ("navigation.php");  ?>
<!--
  <div class="bann-page">
		 	<div class="container">
		 		<ul>
			 	 <li><a href="index.php" class="active">Home</a></li> /
			 	 <li><h4>About</h4></li> 
			 	</ul>
		   </div>
</div>
-->

<div class="container">
		<div class="serv-strip-main wow bounceIn" data-wow-offset="50" data-wow-delay="0.4s" style="background-color: #ffffff; opacity: 0.8; font-weight: bold; margin-top: 70px; padding-top: 20px; border-radius: 10px; cursor: pointer; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.5);">
			    <h3>Contact Us</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">
						P. 0. Box 38373, Madela street, PLOT 183, Mikocheni B. Dar-es-Salaam, TZ.
					<br/><b>E-Mail : </b>info@ft.co.tz &nbsp;&nbsp;&nbsp;<b>Website : </b>www.ft.co.tz
					<br/><b>Phone : </b> (+255) 754 710 506 / 787 488 388 / 732 200 923 / 762 223 728
				</p>
			<div class="clearfix"> </div>
		</div>
		<br/>
	</div>

</div>
<!--header end here-->


<!--map start here-->

<div class="map">
  <div class="container" style="margin-top: 40px;">
  <div class="contact-topx wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s" style="margin-left: 20px; margin-bottom: 0px;">
				<h2>FT Technology HQ Location</h2>
				
			</div>
	 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15848.23778602739!2d39.2451401!3d-6.7626064!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9458b11ada9f243b!2sFT%20Technologies%20(T)%20Limited!5e0!3m2!1sen!2stz!4v1610444117385!5m2!1sen!2stz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 </div>
</div>

<!--map end here-->


<!--contact start here-->
<div class="conxtact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-topx wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s" style="margin-left: 20px; margin-bottom: 50px; ">
				<h2>Write to Us</h2>
				<h4>Use the form below to write to us, or make an inquiry.</h4>
			</div>
			<div class="contact-bottom">
				<div class="col-md-9 contact-left wow fadeInUp" data-wow-offset="50" data-wow-delay="1.2s">
					<form name="emailclientform" method="post" id='mc-embedded-subscribe-form' class='validate' novalidate action="">	
													
															
															<div class="input-groupx col-md-12"  style="margin-top: 0px; margin-bottom: 0px;">
																	<label class="control-label" for="inputSuccess4" >Full name<span class='errorFont'>**</span></label>
																	<input type='email' class='form-control' style="margin-top: -10px;" value='' name='fullname' class='email' placeholder='your name' required >
															</div>
															
															<div class="input-groupx col-md-6"  style="margin-top: 10px; margin-bottom: 0px;">
																	<label class="control-label" for="inputSuccess4">Phone number<span class='errorFont'>**</span></label>
																	<input type='email' class='form-control' style="margin-top: -10px;" value='' name='phone' class='email' placeholder='your phone number' required >
															</div>
															
															<div class="input-groupx col-md-6"  style="margin-top: 10px; margin-bottom: 0px;">
																	<label class="control-label" for="inputSuccess4">Email address<span class='errorFont'>**</span></label>
																	<input type='email' class='form-control' style="margin-top: -10px;" value='' name='email' class='email' placeholder='your email address' required >
															</div>
															
															<div class="input-groupx col-md-12"  style="margin-top: 10px; margin-bottom: 0px;">
																	<label class="control-label" for="inputSuccess4">Subject <span class='errorFont'>**</span></label>
																	<input type='text' class='form-control' style="margin-top: -10px;" value='' name='subject' class='email' placeholder='write subject' required>
															</div>
															
															<div class="input-groupx col-md-12"  style="margin-top: 10px; margin-bottom: 0px;">
																	<label class="control-label" for="inputSuccess4">Message <span class='errorFont'>**</span></label>
																	<textarea class='form-control' id='message' style="margin-top: -10px;" name='message' placeholder='Write your message here' maxlength='500' rows='5' required></textarea>
																	<!--<small><em><span class='help-block' id='characterLeft' style="color:#000">500 characters left</span></em></small>-->
															</div>	
																
															
															
															<div class="input-groupx col-md-12"  style="margin-top: 0px;">
																	<!--<<input type='submit' value='Send' name='email_user' class='button'>-->
																	<button type="submit" class="button-hf" style="width:115px; margin-top: 23px; margin-right:15px;" name='email_user'>
																		<!--<i class='glyphicon glyphicon-check icon-white'></i>&nbsp;-->
																		<i class="fa fa-envelope"></i> Send
																	</button>
																	
																	<button style="width:110px; margin-top: 16px; "  class="button-hf" data-dismiss="modal" aria-hidden="true">
																	<!--<i class='glyphicon glyphicon-remove icon-white'></i>&nbsp;-->
																	<i class="fa fa-times-circle"></i> Cancel
																	</button>
															</div>		
															
									
										
															
															<div style='clear:both'></div>
													
																			
																				
												</form>
				</div>
				
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div><br/><br/><br/>
</div>
<!--contact end here-->



<?php include("footer.php"); ?>
  
</body>
</html>