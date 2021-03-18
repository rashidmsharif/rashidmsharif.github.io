<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>

<head>
<title>About FT Technologies</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="about FT Technologies" />
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
			    <h3>About Us</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">FT  Technologies (T) Limited is a technically firm 
				   organization  managed by people who have expert knowledge and experience in ICT applications, database, networking and hardware.
				   </p>
			<div class="clearfix"> </div>
		</div>
		<br/>
	</div>

</div>
<!--header end here-->
<!--about strat here-->
<div class="about" id="about">
	<div class="container">
		<div class="about-main">
			   <div class="about-topx wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s" style="padding: 10px;">
			   	   <h2>Where We Are</h2>
			   	   <p><b>The company's offices are located alongside 
Madela Road, at Mikocheni B, in the city of Dar-es-salaam, Tanzania</b></p>
			   </div>
			   <br/>
			   <div class="about-bottom">
			   	 
			   	 <div class="col-md-7 about-grid" style="padding: 10px;">
				 <div class="wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.8s">
			   		<h2>Our History</h2>
			   		<p style="color: #393939;">FT Technologies Limited was registered in 2nd of February 2010. 
					The company started operating in small scale, mainly for supporting small companies manage their IT infrastructures.
					</p>
					</div>
<br/> <br/> 
<div class="wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.8s">
<p style="color: #393939;">
Currently FT Technologies still maintain the connection with the old customers while building large Corporate customer segment and expertise, 
specialization & capacity to engage with any sized company. Our Team currently includes 3 highly experienced technical experts, 2 highly   
qualified technical-sales personnel and one office administrator. 
</p>
</div>
			   	 </div>
				 
				 <div class="col-md-5 about-grid-left" style="padding: 10px;">
			   	 	<a href="#"><img style="border-radius: 10px; border: 2px solid #472a10; " src="images/ab.jpg" alt="" class="img-responsive wow bounceIn" data-wow-offset="50" data-wow-delay="0.8s"></a>
			   	 </div>
				 
			   	 <div class="clearfix"> </div>
				 <br/>
			 </div>
		</div>
	</div>
</div>
<!--about end here-->
<!--team start here-->
<div class="team-mem">
	<div class="container">
	   <div class="team-mem-main">
	   	<div class="team-topX wow bounceIn" data-wow-offset="50" data-wow-delay="0.8s">
	   		<h2>Board of Directors</h2><br/>
	   	</div>
	   	 <div class="team-bottom">
	   	   <div class="col-md-4 team-grid wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.8s">
	   	   	 <div class="col-md-6 team-imgXXXXXXXXXX">
	   	   	 	<img src="images/t1.jpg" alt="" class="img-responsive">
	   	   	 </div>
	   	   	 <div class="col-md-6 team-text">
	   	   	 	<h4>Secretary</h4>
	   	   	 	<h5>xxx vvv</h5>
	   	   	 	<p>- legal advisor<br/>- compliance </p>
	   	   	 </div>
	   	   	<div class="clearfix"> </div><br/>
	   	   </div>
	   	   <div class="col-md-4 team-grid wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
	   	   	 <div class="col-md-6 team-imgXXXXXXXXXX">
	   	   	 	<img src="images/t2.jpg" alt="" class="img-responsive">
	   	   	 </div>
	   	   	 <div class="col-md-6 team-text">
	   	   	 	<h4>Site</h4>
	   	   	 	<h5>vv bbb</h5>
	   	   	 	<p>- marketing<br/>- sales</p>
	   	   	 </div>
	   	   	<div class="clearfix"> </div><br/>
	   	   </div>
	   	   <div class="col-md-4 team-grid wow fadeInRight" data-wow-offset="50" data-wow-delay="0.8s">
	   	   	 <div class="col-md-6 team-imgXXXXXXXXXX">
	   	   	 	<img src="images/t3.jpg" alt="" class="img-responsive">
	   	   	 </div>
	   	   	 <div class="col-md-6 team-text">
	   	   	 	<h4>Admin</h4>
	   	   	 	<h5>pp yy</h5>
	   	   	 	<p>- network<br/>- ict</p>
	   	   	 </div>
	   	   	<div class="clearfix"> </div><br/>
	   	   </div>
	   	 <div class="clearfix"> </div>
	    </div>
	   </div>
	</div>
</div>
<!--team end here-->


<?php include("footer.php"); ?>

</body>
</html>