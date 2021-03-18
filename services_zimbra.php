<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Zimbra Installation & Training</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="zimbra, FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="Zimbra Installation & Training services of FT Technologies" />
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
			    <h3>Zimbra Installation & Training</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">Deploy Zimbra for your organisation using our Zimbra install and training service. FT Technologies will 
	consult with you, install and configure Zimbra Collaboration Suite then provide administrator or End user training.
				</p>
			<div class="clearfix"> </div>
		</div>
		<br/>
	</div>


</div>

<!--deliver strat here-->
<div class="delivery-info">
	<div class="container">
		
		
			<div class="delivery-info-main" style="margin-top: 30px;">
			<div class="delivery-topX wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s" style="margin-left: 10px;">
				<h2  id="zimbra" style="text-decoration: none; color: #333;">Other Zimbra Usage</h2><br/>
			</div>
			<div class="delivery-bottom">
				
				<div class="col-md-6 delivery-right">
				<div class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
				As well as a rapid Zimbra deployment you can use this service for: 

Evaluation : if you wish to perform a Zimbra evaluation before committing to a purchase, planning and 
	roll-out. You can use FT Technologies's Zimbra skillset to quickly deploy an evaluation environment without investing time and staff to learning Zimbra administration upfront. 

Migration : if you are migrating from Microsoft Exchange, Lotus Domino or another IMAP-type email system, 
	again you can use this service to quickly deploy Zimbra and depending on your migration requirements move all mailboxes to Zimbra. 

</div>

<br/><br/>

<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>Requirements </b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
Configuration : Prior to installation, FT Technologies will consult with you and discuss your requirements. 
	Your requirements determine the Zimbra Collaboration Suite choice as well as any additional configuration that may be required. 

Zimbra software : Based on your requirements and budget FT Technologies will recommend a Zimbra 
	solution most suitable for your organisation. 

•  Zimbra Open Source Edition (free) 

•  Zimbra Starter Edition (for less 15 mailboxes or less, separate purchase) •  Zimbra Standard Edition (separate purchase) 

•  Zimbra Professional Edition (separate purchase) 

</div>
<br/><br/>					
					
				</div>
				
				<div class="col-md-6 deliver-left">
				
				<img src="images/services/zimbra.jpg" alt="" style="margin-left: 10px; width:90%; border-radius: 10px; border: 2px solid #472a10" class="img-responsive wow bounceIn" data-wow-offset="50" data-wow-delay="0.8s">
				
				<br/>
				<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>Installation and End User Training  </b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">				
				FT Technologies will install the platform for you onsite and later you can choose to either have onsite periodic 
	support or self-support which  will  require  administrator training to  be done for internal  staff.  Before  installation,  FT Technologies will do an analysis to 
	identify the setup, capacity and redundancy level of the hardware required. Administrator Training : After the installation and configuration process is complete, 
	FT Technologies will provide training for you to take you through the features of the Zimbra Administrator Client and Zimbra Web Client. 
	This is to familiarise you with the configuration options and answer any questions you may have. FT Technologies provide other administrator training, if required. 

End User Training : FT Technologies can deliver an end user training session at 
	your site. This training session is a presentation style review of the Zimbra Web Client and Zimbra Desktop. Other training for your end users can be provided, if required. 

	<br/>
	On-demand  Support  :  Once  Zimbra  is  deployed  for your  organisation;  FT 

Technologies can provide on-demand support at a special agreed rate for any	PARTNER


immediate post-install support issues or tasks. 


</div>
<br/><br/>

					
					
					
					
				
					
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
		
	</div>
</div>
<!--deliver end here-->

<?php include("footer.php"); ?>

</body>
</html>