<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Concept Development</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Concept Development, FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="Concept Development services of FT Technologies" />
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
			    <h3>Concept Development</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">This service is more often offered as part of Project Management service and sometimes independently in order to assist customers to reach a higher creativity and innovative level.  
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
				<h2  id="concept" style="text-decoration: none; color: #333;">Higher Creativity </h2><br/>
			</div>
			<div class="delivery-bottom">
				
				<div class="col-md-6 delivery-right">
				<div class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
				We use a combination of brain forming techniques, tried and tested hand sketching methods and our own unique ways of 
				sourcing inspiration to wean the very finest ideas from the concept; starting with the wonderfully impractical and quickly moving to the sharp, 
				resolved and most importantly innovative ideas you expect. 
				
				</div>



<br/>

<img src="images/services/concept.jpg" alt="" style="margin-left: 10px; width:90%; border-radius: 10px; border: 2px solid #472a10" class="img-responsive wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s">


				
					
				</div>
				
				<div class="col-md-6 deliver-left">
			

<br/>
<!--
					<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>Higher Creativity</b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
This service is more often offered as part of Project Management service and sometimes independently in order to assist 
	customers to reach a higher creativity and innovative level. 



 
</div>

<br/><br/>
-->

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