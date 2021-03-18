<?php

if (isset($_POST['email_user'])) {
                    
    include ("email_server.php");  
			
}
		
		
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Projects of FT Technologies</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="projects, FT Technologies, Tanzania ICT company, Tanzania IT company" />
<meta name="description" content="Selected projects done by FT Technologies" />
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
			    <h3>Our Projects</h3>
			    <p style="line-height: 1.3em; color: #333; padding: 0 10px 10px 10px;">Below are some of our projects for our clients in different sectors including: <br/>
				Banking, Mobile Operators, Government, Mobile Vas Operators, Logistics, Legal Firms, Technology & Engineering and Embassies.</p>
			<div class="clearfix"> </div>
		</div>
		<br/>
	</div>
</div>

<!--deliver strat here-->
<div class="delivery-info">
	<div class="container">
		<div class="delivery-info-main">
			<div class="delivery-topX" style="margin-left: 10px;">
			<!--	<h2>xxxxx xx</h2><br/>-->
			</div>
			<div class="delivery-bottom">
				
				<div class="col-md-6 delivery-right">
		
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">01</span>
						<div class="deliver-text wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">VolP PABX and Call Center</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								The project involved setup voice solution for two new sites one is the HQ and the other is a branch office, the voice solution for both sites are IP based whereby one site has a call center system with a number of call center agents.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">02</span>
						<div class="deliver-text wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Financial System Auditing</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								The project involved auditing a mobile money financial system in terms of security weakness, best practices and performance improvements.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">03</span>
						<div class="deliver-text wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Auditing & optimization of an insurance company member databases</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								The project involved analyzing the Funds core Business Applications,  identifying application criticality,   
								analyzing resources bottlenecks, writing a finding report which included the action plan & strategies going forward. 
								The project ended by implementation of the finding in order to effectively optimize the databases for better performance. 
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
			
				
					
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">04</span>
						<div class="deliver-text wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Security integration for an insurance company mobile application</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								The project involved analyzing the current Business applications and the role of security in ensuring that the Member data will be secure & 
								remain private. The project also involved identifying security implementations  required for the exposure of mobile applications     
								for access from the internet. The project implementation included firewall configuration, Secure Sockets Layer
								certificate installation on  IIS server and registering of a public domain. 
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">05</span>
						<div class="deliver-text wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Design and implementation of network protection</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								A bank wanted to protect and control their private network by restricting  non-production application in their network. 
								The project involved installation of a content/bandwidth management system at the edge of the bank network in 
								order to protect their HQ as well as branch networks from internet related threats.
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
				
				
			
				
				
					
						<div class="deliver-dates">
							<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">06</span>
							<div class="deliver-text wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.8s">
								<h4 style="line-height: 1.3em; padding-left: 10px; ">Project Management, design and development of Mobile Agriculture Content System</h4>
								<p style="line-height: 1.3em; padding-left: 10px; ">
									To build a platform for Farmers and Livestock keepers to Trade in their produce as well as get important information to assist them in production. 
									Services in the platform included sending produce adverts, sms broadcasts of the adverts, auctioning, payment of the services through mobile money and reporting engine for all the platform transactions. 
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					
				</div>	
				<div class="col-md-6 deliver-left">
				
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">07</span>
						<div class="deliver-text wow fadeInRight" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Design, Installation and Configuration of SharePoint Automated Securities Management for a bank</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								To design and configure Securities Management system, which automates and manages the lifecycle of Bank Securities from initial application letter
								to security release or expiry. The system is built using SharePoint platform and deployed more than 10 workflows to automate document approvals & manage
								the movement of the documents from one user to the other. 
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">08</span>
						<div class="deliver-text wow fadeInRight" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Design and Implementation of Business Process Automation system</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								Design & configuration of Change Management System which was implemented on top of SharePoint form services & database 
								and integrated to the current Active directory. The technologies used  were MSSQL 2012, SharePoint 2013 and MS Office lnfopath 2013. 
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">09</span>
						<div class="deliver-text wow fadeInRight" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Design and Implementation Oracle RAC Standby Database</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
									To set up and configure the Oracle Real-time Application Cluster standby Database using Data guard, the project involved setting up the server hardware, OS Installation, Oracle RAC installation and  configuration, Standby database creation and
									synchronization between primary and standby. 
							</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">10</span>
						<div class="deliver-text wow fadeInRight" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Upgrade of SharePoint platform from 2007 to 2016</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								To upgrade the MOSS 2007 server to SharePoint server 2016 and at the same time introduce Hyper-V virtualization. 
								The project also involved re-branding the intranet to have a new look and feel. 
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">11</span>
						<div class="deliver-text wow fadeInRight" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Upgrade of the Oracle database from llg to 12c and introduction of Oracle Golden Gate for replication</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								To upgrade the database platform from  11g to  12c and also introduce data resiliency by replicating data across platforms using Oracle Golden Gate and locally by maintaining the Data Guard feature. 
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					
				
				
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">12</span>
						<div class="deliver-text wow fadeInRight" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Design and Implementation of VolP system for a bank</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								To install IP PBX for connecting the bank's HQ with all branches, integration to mobile operator for external calls, deployment of IVR for the call centre and creating a hybrid system between Cisco and Grandstream IP phones interworking. 
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="deliver-dates">
						<span class="deliver-num wow bounceIn" data-wow-offset="50" data-wow-delay="1.2s" style="color:#4B4B4B">13</span>
						<div class="deliver-text wow fadeInRight" data-wow-offset="50" data-wow-delay="0.8s">
							<h4 style="line-height: 1.3em; padding-left: 10px; ">Core Billing system's Oracle 9i database configuration to increase storage space for a mobile operator</h4>
							<p style="line-height: 1.3em; padding-left: 10px; ">
								The project involved adding Fiber Channel LUN to HP UX db server,  to  create  redundancy  in  storage,  split database files between new and old storage, tuning of archive log file backup in order to improve the performance and operations in general. 
							</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
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