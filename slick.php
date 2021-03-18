<html>
<head>

<style>

.testimonial-section {
	
  
  position: relative;
  background-size: cover !important;
  padding: 10px 0px;
  background-repeat: no-repeat !important;
  margin-top: -150px !important;
  
}


@media(max-width:1024px){
	
	.testimonial-section {
		
		margin-top: -30px !important;
	 
	  
	}
	


}

@media(max-width:480px){
	
	.testimonial-section {
		
		margin-top: -10px !important;
	 
	  
	}

}

@media(max-width:320px){
	
	.testimonial-section {
		
		margin-top: 10px !important;
	 
	  
	}

}

</style>
</head>

<body>


<section class="testimonial-section" style="">
    <div class="container">
	
	<?php
	
	$yearBeginning = "2010";
	$yearCurrent = date("Y");
	$yearDifference = $yearCurrent - $yearBeginning;
	
	?>
	<h3 class="slide-title animated4 wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><?php echo $yearDifference; ?> YEARS OF EXCELLENCE IN</h3>
			<h2 class="slide-sub-title animated5 wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">ICT APPS, DATABASES & NETWORKING</h2>
			
			
        <div class="testimonial-carousel" style="background-color: greenX; margin-top: -5px;">
            <!--Slide Item-->
            
					
			
							
			<div class="slide-item wow wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
				<?php $source = "services-sharepoint"; ?>
				<a style="" href="#services-sharepoint" data-toggle="modal" data-target="#services-sharepoint" class="myLinks2" title="More details">
					<div class="inner-box text-center" style="opacity: 1.0; font-weight: bold; padding-top: 15px; border-radius: 10px; cursor: pointer; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.5);">
						<div class="image-box">
							<figure>
								<img src="images/small/sharepoint.jpg" alt="">
							</figure>
						</div>
						<h6  style="margin-top:40px; color: #0084D9; text-transform: uppercase; font-weight: bold; font-size: 85%;"><span style="color: #333; font-size:15px;">1.</span> MS SharePoint</h6>
						<div style="color: #333333; font-weight: normal">Implementation, analysis & maintenance service</div>
					</div>
				</a>
				
            </div>
			
			
			<div class="slide-item wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
			<?php $source = "services-apps"; ?>
                <a style="" href="#services-apps" data-toggle="modal" data-target="#services-apps" class="myLinks2" title="More details">
					<div class="inner-box text-center" style="opacity: 1.0; font-weight: bold; padding-top: 15px; border-radius: 10px; cursor: pointer; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.5);">
						<div class="image-box">
							<figure>
								<img src="images/small/softwares.jpg" alt="">
							</figure>
						</div>
						<h6  style="margin-top:40px; color: #0084D9; text-transform: uppercase; font-weight: bold; font-size: 85%;"><span style="color: #333; font-size:15px;">2.</span> Apps & Softwares</h6>
						<div style="color: #333333; font-weight: normal">Mobile apps & software developments</div>
					</div>
				</a>
            </div>
			
			<div class="slide-item wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
				<?php $source = "services-voip"; ?>
                <a style="" href="#services-voip" data-toggle="modal" data-target="#services-voip" class="myLinks2" title="More details">
					<div class="inner-box text-center" style="opacity: 1.0; font-weight: bold; padding-top: 15px; border-radius: 10px; cursor: pointer; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.5);">
						<div class="image-box">
							<figure>
								<img src="images/small/voip.jpg" alt="">
							</figure>
						</div>
						<h6  style="margin-top:40px; color: #0084D9; text-transform: uppercase; font-weight: bold; font-size: 85%;"><span style="color: #333; font-size:15px;">3.</span> VoIP Services</h6>
						<div style="color: #333333; font-weight: normal">Installation, maintenance & supply of PBX/VOIP</div>
					</div>
				</a>
            </div>
			
			
			
			
			<div class="slide-item wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
				<?php $source = "services-oracle";  ?>
                <a style="" href="#services-oracle" data-toggle="modal" data-target="#services-oracle" class="myLinks2" title="More details">
					<div class="inner-box text-center" style="opacity: 1.0; font-weight: bold; padding-top: 15px; border-radius: 10px; cursor: pointer; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.5);">
						<div class="image-box">
							<figure>
								<img src="images/small/database.jpg" alt="">
							</figure>
						</div>
						<h6  style="margin-top:40px; color: #0084D9; text-transform: uppercase; font-weight: bold; font-size: 85%;"><span style="color: #333; font-size:15px;">4.</span> Oracle Database</h6>
						<div style="color: #333333; font-weight: normal">Installation, management, upgrade & migration</div>
					</div>
				</a>
            </div>
			
			
			<div class="slide-item wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
				<?php $source = "services-zimbra"; ?>
                <a style="" href="#services-zimbra" data-toggle="modal" data-target="#services-zimbra" class="myLinks2" title="More details">
					<div class="inner-box text-center" style="opacity: 1.0; font-weight: bold; padding-top: 15px; border-radius: 10px; cursor: pointer; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.5);">
						<div class="image-box">
							<figure>
								<img src="images/small/zimbra.jpg" alt="">
							</figure>
						</div>
						<h6  style="margin-top:40px; color: #0084D9; text-transform: uppercase; font-weight: bold; font-size: 85%;"><span style="color: #333; font-size:15px;">5.</span> Zimbra Package</h6>
						<div style="color: #333333; font-weight: normal">Zimbra email & collaboration suite installation & training</div>
					</div>
				</a>
            </div>
			
			
			<div class="slide-item wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
				<?php $source = "services-security";  ?>
                <a style="" href="#services-security" data-toggle="modal" data-target="#services-security" class="myLinks2" title="More details">
					<div class="inner-box text-center" style="opacity: 1.0; font-weight: bold; padding-top: 15px; border-radius: 10px; cursor: pointer; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.5);">
						<div class="image-box">
							<figure>
								<img src="images/small/audit.jpg" alt="">
							</figure>
						</div>
						<h6  style="margin-top:40px; color: #0084D9; text-transform: uppercase; font-weight: bold; font-size: 85%;"><span style="color: #333; font-size:15px;">6.</span> IT Security Audit</h6>
						<div style="color: #333333; font-weight: normal">Process audit, system audit, network audit, application audit</div>
					</div>
				</a>
            </div>
			
			
			<div class="slide-item wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
				<?php $source = "services-projectmng";  ?>
                <a style="" href="#services-projectmng" data-toggle="modal" data-target="#services-projectmng" class="myLinks2" title="More details">
					<div class="inner-box text-center" style="opacity: 1.0; font-weight: bold; padding-top: 15px; border-radius: 10px; cursor: pointer; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.5);">
						<div class="image-box">
							<figure>
								<img src="images/small/project.jpg" alt="">
							</figure>
						</div>
						<h6 style="margin-top:40px; color: #0084D9; text-transform: uppercase; font-weight: bold; font-size: 85%;"><span style="color: #333; font-size:15px;">7.</span> Project Mngmnt.</h6>
						<div style="color: #333333; font-weight: normal">Organizing project teams, preparing needs assessments</div>
					</div>
				</a>
            </div>
			
			
			<div class="slide-item wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
				<?php $source = "services-network";  ?>
                <a style="" href="#services-network" data-toggle="modal" data-target="#services-network" class="myLinks2" title="More details">
					<div class="inner-box text-center" style="opacity: 1.0; font-weight: bold; padding-top: 15px; border-radius: 10px; cursor: pointer; box-shadow: 2px 2px 5px 5px rgba(0, 0, 0, 0.5);">
						<div class="image-box">
							<figure>
								<img src="images/small/network.jpg" alt="">
							</figure>
						</div>
						<h6  style="margin-top:40px; color: #0084D9; text-transform: uppercase; font-weight: bold; font-size: 85%;"><span style="color: #333; font-size:15px;">8.</span> Network, Servers & OS</h6>
						<div style="color: #333333; font-weight: normal">Installation of workstations & servers</div>
					</div>
				</a>
            </div>
		 </div>
    </div>
	</section>
	
	<?php 
	

	
				include('modal_00sharepoint.php'); 
				include('modal_00apps.php'); 
				include('modal_00voip.php'); 
				include('modal_00oracle.php'); 
				include('modal_00zimbra.php'); 
				include('modal_00security.php'); 
				include('modal_00projectmng.php'); 
				include('modal_00network.php'); 
				
				
	
	?>
	
	
	</body>
	
	</html>