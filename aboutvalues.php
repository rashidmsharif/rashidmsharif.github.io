<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>

<head>
<title>Core values of FT Technologies</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="core values of FT Technologies" />
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
			    <h3>Our Core Values</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">We work with great people and we work as a team. We are passionate and committed. We are competitive and consistently innovate. We strive for Client/customer satisfactions to be our pride.
				</p>
			<div class="clearfix"> </div>
		</div>
		<br/>
	</div>
	
</div>
<!--header end here-->

<!--advantages start here-->
<div class="advantagea">
	<div class="container">
		<div class="advantages-main">
			  
			  
			 
			  
			  
			 
			  
			  <div class="col-md-8 advantages-right">
			  <div class="wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.8s">
			  <h2 style="margin-top: 0px">Our Commitment</h2>
			  	
			  	<ul>
<li>Best service and full support to your success. </li>
<li>Excellence and Professionalism in delivering our services.</li>
</ul>
				
				
</div>


<br/>



<img src="images/ad.jpg" alt="" style="margin-top: 20px; margin-bottom: 20px; border-radius: 10px; border: 2px solid #472a10" class="img-responsive wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s">



			 </div>
			 
			 
			 
			  <div class="col-md-4 advantages-left">
			  	  <div class="accordion-section">
    
    <div class="accordion-holder">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default wow fadeInRight" data-wow-offset="50" data-wow-delay="0.8s">
                <div class="panel-heading" role="tab" id="headingOne" style="background-color: #0084D9; color: #ffffff;">   
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           <i class="glyphicon glyphicon-road"></i> Mission  
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                    "To bridge the gap between solutions and the
challenges our esteemed customers face in their daily lives through innovation and consistent engagement with our customers." 

                    </div>
                </div>
            </div>
            <div class="panel panel-default wow fadeInRight" data-wow-offset="50" data-wow-delay="0.8s">
                <div class="panel-heading" role="tab" id="headingTwo"  style="background-color: #0084D9; color: #ffffff;">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            <i class="glyphicon glyphicon-eye-open"></i> Vision
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
"To be the best ICT value generating
company to its customers."

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


			  </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--advantages end here-->

<?php include("footer.php"); ?>

</body>
</html>