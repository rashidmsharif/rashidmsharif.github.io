<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
	
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Official site of FT Technologies</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="Official website of FT Technologies" />
   <meta name="author" content="Hussein Farid">

<?php  include ("head.php");  ?>

<style>
@media(min-width:1200px) {
	
	.hfclassing2 {
		
		margin-top: -80px !important; 
		
	}
	
}
</style>

</head>
<body style="background-image: url(images/kitchen.jpg); min-height: 500px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">

<?php 

if (isset($_POST['email_user'])) {

if (count($errors) == 0) {
	
?>

<script type="text/javascript">
    $.notify({title :'Success!', content:'Your Email has been sent.', timeout:5000});
</script>

<?php	
	
} else {

?>

<script type="text/javascript">
    $.notify({title :'Error!', content:'There are errors in your email. Please correct and resend the email.', timeout:5000});
</script>

<?php	
	
} 

}

?>


<!--header start here-->
<div class="bannerXXXXX  bann-mask">
	<div class="container" style="">
		<?php include ("top_socialLinks.php"); ?>
	  </div>
 <?php 
 
 include ("navigation.php")

 ?>
		 <div class="banner-bottom">
		 	<div class="container">
			
			   
	<?php include ("slick.php"); ?>
		
			   
			   
			   
			  
			   
			   
			   
			   
			   
			   
			   
			   
		   </div>
		</div>
</div>
<!--header end here-->




<div class="bann-stripx" style="">
	<div class="container" style="width: 90%; margin-bottom: 30px; background-color: #ffffff; font-weight: bold; padding-top: 20px; border-radius: 10px; border: 1px solid #c9c7c7;">
		
		
		<div class="bann-strip-main wow fadeInUp" data-wow-offset="50" data-wow-delay="0.3s" style="" >
			<div class="col-md-12 bann-strip-left">
				<h2 class="titleBounce wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.5s">CERTIFIED <span>EXPERTS</span></h2><br/>
				<p style="line-height: 1.3em; padding: 0 0x 10px 0px;">
				FT Technologies (T) Limited is a technically firm organization managed by people who have <a href="certs" style="color:#0084D9; text-decoration: none;">expert</a> knowledge and experience in ICT applications, database, networking and hardware.
				</p>
				
				<div class="titleBounceHolderContainer">
		<h2 class="titleBounce wow bounceIn text-center" data-wow-offset="50" data-wow-delay="0.7s" style="">
		<span><em>"build your competitive advantage with our experts"</em></span>
		</h2>
		</div>
		
		
				
			<br/>
			</div>
		
			
		</div>
		<div style="clear: both"></div>
		
		
		
		
		<div class="bann-strip-main">
			<div class="col-md-8 bann-strip-left wow fadeInUp" data-wow-offset="50" data-wow-delay="0.5s">
				<!--<h2 class="titleBounce wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.5s">RECENT <span>PROJECTS</span></h2><br/>-->
				<p style="line-height: 1.3em; padding: 0 0x 10px 0px;">Our certifications include:
				</p>
				<div class="advantages-right advantage-list">
					<ul class="ad-list-left col-md-6">
						<li><a href="projects">MS Solutions Expert: SharePoint</a></li>
						<li><a href="projects">MS Solutions Expert: Productivity</a></li>
						<li><a href="projects">MS Windows Server: MCSA</a></li>
						<li><a href="projects">Certified Ethical Hacker: CEH</a></li>
					</ul>
					<ul class="ad-list-right col-md-6">
						<li><a href="projects">MS: Server Virtualization</a></li>
						<li><a href="projects">EC Council Security Analyst: ECSA</a></li>
						<li><a href="projects">Oracle Database 10g & 12c Admin</a></li>
						<li><a href="projects">CISCO CCNA: Routing & Switching</a></li>
						<!--
						<li><a href="projects">Core billing system's oracle 9i database configuration to increase storage space for a mobile operator</a></li>
						<li><a href="projects">Design & implement. of Oracle RAC standby database</a></li>
						<li><a href="projects">Upgrade of oracle database from 11g to 12c and introduction of oracle golden gate for replication</a></li>
						<li><a href="projects">Upgrade of SharePoint platform from 2007 to 2016</a></li>
						-->
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			 
			  
			<div class="col-md-2 creation-grid wow fadeInUp" data-wow-offset="50" data-wow-delay="0.7s" style="margin-bottom: 20px;">
				<a href="projects"><img style="border: 1px solid gray; border-radius: 10px; cursor: pointer; box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.7);" src="images/m3.jpg" 
				alt="" class="img-responsive hfmage1"></a>
			</div>
			<div class="col-md-2 creation-grid wow fadeInUp creation-gridHideHF" data-wow-offset="50" data-wow-delay="0.7s" style="margin-bottom: 20px;">
				<a href="projects"><img style="border: 1px solid gray; border-radius: 10px; cursor: pointer; box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.7);" src="images/m4.jpg" 
				alt="" class="img-responsive hfmage2"></a>
			</div>
			
			<div class="clearfix"> </div>
			<!--
			<div class="col-md-8 bann-strip-left wow fadeInUp" data-wow-offset="50" data-wow-delay="0.5s">
				<br/>
			   <a href="projects">
			   <button type="submit" class="button-hf wow fadeInUp" data-wow-offset="50" data-wow-delay="0.5s" style="width:115px; margin-top: 23px; margin-right:15px;" name='email_user'>
					<i class='glyphicon glyphicon-zoom icon-white'></i>&nbsp;View more
				</button>
				</a>
			  
			 </div>
			 -->
			 <br/><br/>
		</div>
	
		
		<div style="clear: both"></div>
		
		
		</div>
		<div class="container" style="width: 90%; margin-bottom: 30px; background-color: #ffffff; font-weight: bold; padding-top: 20px; border-radius: 10px; border: 1px solid #c9c7c7;">
		
		
		
		
		<!--<div class="bann-strip-main wow fadeInUp" data-wow-offset="50" data-wow-delay="0.3s" style="" >-->
		<div class="bann-strip-main" style="" >
			<div class="col-md-12 bann-strip-left">
				<h2 class="titleBounce wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.5s">RECENT <span>PROJECTS</span></h2><br/>
				<p style="line-height: 1.3em; padding: 0 0x 10px 0px; padding-bottom: 10px;">
		 Partner with us to help you become the leader in your industry by implementing top tech solutions to your projects.
			</p>
				<div class="titleBounceHolderContainer">
		<h2 class="titleBounce wow bounceIn text-center" data-wow-offset="50" data-wow-delay="0.7s" style="">
		
		<span><em>"trusted partner in software development and IT consulting"</em></span>
		</h2>
		</div>
		
		
		
		
		
		
		
		<?php include ("index-tech.php"); ?>
			
			
			<br/>
			</div>
		
		</div>
		
		
		<div style="clear: both"></div>
		
		
		</div>
		<div class="container" style="width: 90%; margin-bottom: 30px; background-color: #ffffff; font-weight: bold; padding-top: 20px; border-radius: 10px; border: 1px solid #c9c7c7;">
		
	
		
		
		<div class="col-md-12 bann-strip-left wow fadeInUp" data-wow-offset="50" data-wow-delay="0.3s">  
				<h2 class="titleBounce wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.5s">HAPPY <span>CUSTOMERS</span></h2><br/>
				<p style="line-height: 1.3em; padding: 0 0x 10px 0px;">
				We are committed to excellence, professionalism and to providing best service and full support to our customers. <br/>Listed below are some of our customers and their corresponding sectors.
				</p>
					<div class="titleBounceHolderContainer">
		<h2 class="titleBounce wow bounceIn text-center" data-wow-offset="50" data-wow-delay="0.7s" style="">
		<span><em>"together we build the best place to work"</em></span>
		</h2>
		</div>
		
				

				<br/><br/>
				
				<div style="">
				
					<?php include("customers.php"); ?>
				
				</div>
				
				
				
				
				
				
				
				
				
				
				
				<!--
					<span id="result"></span>
					<div id="live_data"></div>  
					-->
		</div>
		
		<div style="clear: both"></div><br/>
		
	</div>
	
</div>





<!--
<script>
        $(document).ready(function(){
			
			
             function fetch_data()  
    {  
        $.ajax({  
            url:"customers.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
	
	
    
    fetch_data();
 
 
        });
		
</script>
-->



<!--our creaction end here-->

<?php include("footer.php"); ?>

</body>
</html>


