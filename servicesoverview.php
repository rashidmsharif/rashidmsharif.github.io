<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Services of FT Technologies</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="sharepoint, mobile apps, dashboard, FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="main services of FT Technologies" />
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
  <?php include ("navigation.php")  ?>
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
			    <h3>Our Services</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">Our core expertise and experience lies in providing services with Excellence and Professionalism.
				</p>
			<div class="clearfix"> </div>
		</div>
		<br/>
	</div>
	
	
</div>
<!--header end here-->
<!--services strat here-->
<div class="services">
	<div class="container">
		<div class="services-main"><br/>
			<div class="services-topx">
				<h2 style="padding: 10px;">Main Services</h2>
				<p style="line-height: 1.3em; padding: 10px;">
				
				We provide services mainly but not limited to the following fields of IT: 
<ul>
	<li>MS SharePoint Solutions</li>
	<li>Mobile apps</li>
	<li>VolP Services</li>
	<li>Software development</li>
	<li>Network, Operating Systems & Applications security auditing</li>
	<li>Oracle database support</li> 
	<li>IT project management</li>
	<li>ICT processes design and implementation</li> 
	<li>Zimbra Email and Collaboration suite installation & training services</li>
	<li>Installation and maintenance of workstations & servers hardware and software</li>
</ul>
				
				 
				
				<br/><br/>
				
				
				</p>
				<br/>
				
			</div>
			
			<div class="services-bottom" style="">
			
			<!--<h2 id="sharepoint" style="padding: 10px;">Other Services</h2>-->
			
				<div class="col-md-3 ser-grid">
					<img src="images/services/software.jpg" alt="" style="margin-left: 10px; border-radius: 10px; border: 2px solid #472a10" class="img-responsive">
					<h5 style="padding-left: 10px; ">Apps Developments</h5>
					<p style="line-height: 1.3em; padding-left: 10px; ">We design our systems to have "head-to-head"</p>
					
					<div class="col-md-4 bann-strip-right" style="width: 100px; margin-top: -10px; margin-bottom: 20px;">
					
						<?php $source = "apps"; ?>
						<a href="#apps" data-toggle="modal" data-target="#apps" style=";">More</a>
						 <br/>
					</div>
					<?php include('modal_profileclient.php'); ?>
				</div>
				<div class="col-md-3 ser-grid">
					<img src="images/services/oracle.jpg" alt="" style="margin-left: 10px; border-radius: 10px; border: 2px solid #472a10" class="img-responsive">
					<h5 style="padding-left: 10px; ">Oracle Database</h5>
					<p style="line-height: 1.3em; padding-left: 10px; ">We spray nutrients to flowers improve growth as well as</p>
					
					
					<div class="col-md-4 bann-strip-right" style="width: 100px; margin-top: -10px; margin-bottom: 20px;">
						<?php $source = "oracle"; ?>
						<a href="#oracle" data-toggle="modal" data-target="#oracle" style=";">More</a>
						
					</div>
					<?php include('modal_profileclient.php'); ?>
				</div>
				<div class="col-md-3 ser-grid">
					<img src="images/services/sharepoint.jpg" alt="" style="margin-left: 10px; border-radius: 10px; border: 2px solid #472a10" class="img-responsive">
					<h5 style="padding-left: 10px; ">MS SharePoint</h5>
					<p style="line-height: 1.3em; padding-left: 10px; ">We provide fumigation services to offices and residential</p>
					
					
					<div class="col-md-4 bann-strip-right" style="width: 100px; margin-top: -10px; margin-bottom: 20px;">
						<?php $source = "sharepoint"; ?>
						<a href="#sharepoint" data-toggle="modal" data-target="#sharepoint" style=";">More</a>
					</div>
					<?php include('modal_profileclient.php'); ?>
				</div>
				<div class="col-md-3 ser-grid">
					<img src="images/services/dashboard.jpg" alt="" style="margin-left: 10px; border-radius: 10px; border: 2px solid #472a10" class="img-responsive">
					<h5 style="padding-left: 10px; ">Dashboard Tools</h5>
					<p style="line-height: 1.3em; padding-left: 10px; ">We provide cleaning service to offices in and surroundings</p>
					
					
					<div class="col-md-4 bann-strip-right" style="width: 100px; margin-top: -10px; margin-bottom: 20px;">
						<?php $source = "dashboard"; ?>
						<a href="#dashboard" data-toggle="modal" data-target="#dashboard" style=";">More</a>
					</div>
					<?php include('modal_profileclient.php'); ?>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>


<?php include("footer.php"); ?>

</body>
</html>