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
<meta name="keywords" content="voip, network, FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="services of FT Technologies" />
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
			    <h3>VoIP Systems</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">Our voice services are aimed at making both small and
large   businesses   communicate   efficiently   using   on
premise call systems based either on traditional PBX
technology, IP based PBX's or VolP systems.
				</p>
			<div class="clearfix"> </div>
		</div>
		<br/>
	</div>


</div>

<!--deliver strat here-->
<div class="delivery-info">
	<div class="container">
		
		
		<div class="delivery-info-main">
			<div class="delivery-topX wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s" style="margin-left: 10px;">
				<h2>PBX and VolP Installation</h2><br/>
			</div>
			<div class="delivery-bottom">
				
				<div class="col-md-6 delivery-right">
				
				
				<div class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
				We provide full-service voice solutions including layout	
designing  and cabling for new offices,  installing  and	and   affordable  maintenance  plans  in   which   we
programming phone systems using our well equipped
and trained technicians who have more than 5 years of
hands-on experience in the field. 
</div>
<br/><br/>




<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>Supply of PBXs, Fixed Phones and Related Hardware</b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
In addition, we supply original PBX and VolP related
hardware     from     world     leading     brands     including
Grandstream, Polycom, Cisco, Digium and Avaya.
</div>
<br/><br/>					
					
				</div>
				
				<div class="col-md-6 deliver-left">
				
				<img src="images/services/voip2.jpg" alt="" style="margin-left: 10px; width:90%; border-radius: 10px; border: 2px solid #472a10" 
				class="img-responsive wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s">
				<br/>
				
				<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>Maintenance of PBX Systems</b></h4>
<div style="margin-top: 10px;" class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">				
				For existing VolP PBX's systems we provide flexible
and   affordable  maintenance  plans  in   which   we
perform a routine check of your hardware to make
sure   everything   works   perfectly   and   your   PBX is healthy and alive.
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