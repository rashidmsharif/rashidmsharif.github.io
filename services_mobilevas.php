<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Mobile VAS Solutions</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mobile VAS, FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="Mobile VAS Solutions of FT Technologies" />
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
			    <h3>Mobile VAS Solutions</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">We help businesses take full advantage of mobile technologies in winning new 
	customers and unlocking new revenue streams.
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
				<h2  id="mobilevas" style="text-decoration: none; color: #333;">Perfect Solution</h2><br/>
			</div>
			<div class="delivery-bottom">
				
				<div class="col-md-6 delivery-right">
				<div class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
				We simply make sure your customers reach you wherever they are, whenever they need you. Connecting 
with the right mobile software solutions company, which can understand and 
	align your business needs to product features, is critical to implementing the perfect solution. 
</div>


<br/><br/>


	<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>New Business Eco-System</b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
Mobile  VAS  has  resulted   in  the  emergence  of  an   entirely   new  business eco-system giving rise to supporting industries such as content development and aggregation. 
There are multiple stakeholders playing across the Mobile VAS 
value chain many with overlapping roles and functions to enhance their pie of 
	revenue. A well demarcated value chain of VAS is yet to evolve in the ecosystem of this space. 

 
</div>

<br/><br/>
				
					
				</div>
				
				<div class="col-md-6 deliver-left">
				
			<img src="images/services/vas.jpg" alt="" style="margin-left: 10px; width:90%; border-radius: 10px; border: 2px solid #472a10" class="img-responsive wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s">
<br/>



				<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>Solutions for a variety of environments</b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
FT Technologies can provide mobile VAS solutions for the following user device environments: 

•  Android 

•  iPhone 

•  Windows Mobile 




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