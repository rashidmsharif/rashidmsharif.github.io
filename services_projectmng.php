<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Project Management</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Project Management, FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="Project Management services of FT Technologies" />
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
			    <h3>Project Management</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">FT Technologies manages Information Technology (IT) projects from beginning to end.
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
				<h2  id="projectmng" style="text-decoration: none; color: #333;">All Phases of IT Project</h2><br/>
			</div>
			<div class="delivery-bottom">
				
				<div class="col-md-6 delivery-right">
				<div class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s">
				We work in all phases of IT project life cycles: organizing project teams,  preparing project needs assessments, drafting  Requests for Proposals for vendor services, directing vendor selection processes, integrating company and vendor teams, managing system tests, conducting independent quality assurance audits, preparing independent verification and 
validation reports, and running on-going  IT operations. We provide all of these services independently from 
	hardware and software vendors, with whom we have no business partnerships or alliances. 
</div>



<br/><br/>


<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>Getting  it  Right</b></h4>
<div class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s" style="margin-top: 10px;">
During the project management process we ensure : 

Getting  it  right from  the  outset :  FT Technologies  understand the  need  to  have  an  accurate  and  shared 
	understanding of the project goals and we achieve this through structured requirements-gathering  involving sponsor and stakeholders in a process that is inclusive and participatory. 


 
</div>

<br/><br/>

			
					
				</div>
				
				<div class="col-md-6 deliver-left">
				
				<img src="images/services/projectmng.jpg" alt="" style="margin-left: 10px; width:90%; border-radius: 10px; border: 2px solid #472a10" class="img-responsive wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s">
<br/>

				<h4 class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s"><b>A Transparent Process</b></h4>
<div class="wow fadeInUp" data-wow-offset="50" data-wow-delay="0.8s" style="margin-top: 10px;">				
	 Having defined the requirements, our clients enjoy good visibility of the development 
	process through our weekly feedback meetings and continuous engagement with the customer. Quality : Quality at FT Technologies is a continual process and it applies to all phases of the project and to all 
	artefacts and deliverables - including documentation and internal procedures.  Each project concludes with a post-project review in order to make best use of lessons learned. 

Support into the future : Our projects do not normally end with the final delivery and many of our clients require 
	on-going support and maintenance. 



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