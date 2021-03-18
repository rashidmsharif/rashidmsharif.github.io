<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>IT Security Audit</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Security Audit, FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="IT Security Audit services of FT Technologies" />
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
			 	 <li><h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">About</h4></li> 
			 	</ul>
		   </div>
</div>
-->


<div class="container">
		<div class="serv-strip-main wow bounceIn" data-wow-offset="50" data-wow-delay="0.4s" style="background-color: #ffffff; opacity: 0.8; font-weight: bold; margin-top: 70px; padding-top: 20px; border-radius: 10px; cursor: pointer; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.5);">
			    <h3>IT Security Audit</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">FT Technologies provides IT Security Auditing service designed to assess the security risks facing your business and the controls or countermeasures you can adopt to mitigate those risks.
				</p>
			<div class="clearfix"> </div>
		</div>
		<br/>
	</div>

</div>

<!--deliver strat here-->
<div class="delivery-info">
	<div class="container">
		
		
		<div class="delivery-info-main" style="margin-top: 40px;">
			<div class="delivery-topX wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s" style="margin-left: 10px;">
				<h2  id="audit" style="text-decoration: none; color: #333;">Professionals with Business Knowledge</h2><br/>
			</div>
			<div class="delivery-bottom">
				
				<div class="col-md-6 delivery-right">
				<div class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
				 The IT Security Audit is typically a human process, performed by a team of professionals with 
				technical and business knowledge of 
the company's information technology assets and business processes. 
</div>



<br/><br/>

<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>Auditing Steps</b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
As part of 
	any audit, our team will interview your key personnel and conduct vulnerability assessments through: 

•  Process Audit 

•  Systems Audit including Penetration Testing 
	Network Audit 

Application Audit 

	Our Process Audit will not only assess compliance, but also assess the very nature and  quality of the  policies and  controls themselves.  In  many cases, security policies become rapidly obsolete with the release of new technologies or process overhauls. Security audits are the most effective tool for determining the 
validity of those policies.


 
</div>


				
					
				</div>
				
				<div class="col-md-6 deliver-left">
				
				<img src="images/services/audit.jpg" alt="" style="margin-left: 10px; width:90%; border-radius: 10px; border: 2px solid #472a10" class="img-responsive wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s">
<br/>

			

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