<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Software and mobile apps Development</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Software Development, FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="Software and mobile apps Development services of FT Technologies" />
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
			    <h3>Software Development</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">We are committed to deliver a turn-key software solution taking on all and every aspect of your IT needs starting with strategy consulting  and  concept development,  design  and  architecture,  up to deployment,  training,  maintenance  and future 
	enhancement. 
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
				<h2  id="software" style="text-decoration: none; color: #333;">Profound Technical Skills</h2><br/>
			</div>
			<div class="delivery-bottom">
				
				<div class="col-md-6 delivery-right">
				<div class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
				A trusted business partner and adviser to our customers,  FT Technologies leverages a powerful blend of the best 
	industry-proven practices and leading standards, refined business acumen and deep market understanding, profound technical skills and extensive hands-on experience to meet the toughest challenges that our clients face, help them compete successfully in the dynamically changing IT marketplace and achieve the maximum return on investment. 
</div>

<br/><br/>


<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>Our software development services include</b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
• Custom Software Design & Development 

•  Custom Web Application Design & Development •  Custom Database Design, Development & Management •   Information Technology Consulting 
 
</div>

<br/><br/>

<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>Our skillset includes but not limited to: </b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
•  Java and J2EE, Spring 

•  C#.NET and ASP.NET •  SOA and Web Services 

•   Database - Oracle, Microsoft SQL, PostgreSQL, Informix and MySQL •   Database Design and Web Applications 

</div>
<br/><br/>					
					
				</div>
				
				<div class="col-md-6 deliver-left">
				<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>We provide turnkey solutions that include: </b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">				
				Understanding your BusinessProcess 

•   Preparing Requirement Specifications 

	Planning & Designing the Solution Offering to meet the requirements •   Developing the application as per the need 

•  QA/Testing the application to ensure it works perfect 

•   Real time deployment and implementation of the solution with your business •  Training & Support

</div>
<br/><br/>

					<img src="images/services/accessories.jpg" alt="" style="margin-left: 10px; width:90%; border-radius: 10px; border: 2px solid #472a10" class="img-responsive wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s">
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