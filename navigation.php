<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.cctopnav {
  overflow: hidden;
  background-color: #fff;
  /* height: 50px;  */
  
}


.logoImg {
	
		
}

.cctopnav a {
  float: left;
 /* margin-left: 30px;*/
  display: block;
  color: #26252A;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
   font-family: 'Montserrat', sans-serif;
  font-size: 15px;  
  font-weight: 400;
 
}

.active {
 /*
  background-color: #0084D9;
  color: white !important;
  */
  
  color: #0084D9 !important;
}

.cctopnav .icon {
  display: none;
}

.ccdropdown {
  float: left;
  overflow: hidden;
}

.ccdropdown .ccdropbtn {
  font-size: 15px;  
  font-weight: 400;
  border: none;
  outline: none;
  padding: 14px 16px;
  color: #26252A;
  /*
  color: white;
  background-color: inherit;
  */
 /* font-family: inherit;*/
   font-family: 'Montserrat', sans-serif;
 
  margin: 0;
}

.ccdropdown-content {
  display: none;
  margin-top: 1px;
  position: absolute;
  /*  background-color: #f9f9f9;  */
  background-color: #464646; /*  26252A  */
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);
   -webkit-border-radius: 5px 5px 5px 5px;
    -moz-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  z-index: 1;
  
  padding: 10px 0px 10px 0px; 
}

.ccdropdown-content a {
  float: none;
  /*  color: black;  */
  color: #f9f9f9;
  /*  padding: 12px 16px;  */  padding: 6px 26px;
  text-decoration: none;
  display: block;
  text-align: left;
}




.cctopnav a:hover {
  /*
  color: #fff;
  background-color: #0084D9;
  */
  color: #0084D9;
}


.ccdropdown:hover .ccdropbtn {
    /*
  color: #fff;
  background-color: #0084D9;
  */
  color: #0084D9;
}

.ccdropdown-content a:hover {
  background-color: #0084D9;
  color: #fff;
}

.ccdropdown:hover .ccdropdown-content {
  display: block;
}

.logox {
position: absolute; 
margin-left:65%; 
margin-top: 0px;
}

	
@media screen and (max-width: 768px) {
  .cctopnav a:not(:first-child), .ccdropdown .ccdropbtn {
    display: none;
  }
  .cctopnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 768px) {
	
	.logox {
position: absolute; 
margin-left:0; 
margin-top: 0px;
}

	.logoImg {
		position: absolute;
	}

  .cctopnav.responsive {position: relative;}
  .cctopnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .cctopnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .cctopnav.responsive .ccdropdown {float: none;}
  .cctopnav.responsive .ccdropdown-content {position: relative;}
  .cctopnav.responsive .ccdropdown .ccdropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}




</style>
</head>
<body>

	<div class="containerx" style="width: 100%;  background-color: white;">
	<div class="container" style="">
	
		<div class="logox">
		<a href="home"><img src="images/logo2.png" alt=""></a>
	</div>
	


<div class="cctopnav" id="mycctopnav" style="">
	


 <a href="#" style="width: 1px; margin-right: 0px; padding: 0px;">&nbsp;</a>
  <a href="home" class="<?php if (basename($_SERVER['PHP_SELF']) == "index.php" || basename($_SERVER['PHP_SELF']) == "home.php") {echo "active";} ?>">HOME</a>
   <div class="ccdropdown">
    <button class="ccdropbtn <?php if (basename($_SERVER['PHP_SELF']) == "about.php" || basename($_SERVER['PHP_SELF']) == "aboutvalues.php" || 
	basename($_SERVER['PHP_SELF']) == "certs.php" || basename($_SERVER['PHP_SELF']) == "contact.php") {echo "active";} ?>">COMPANY
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="ccdropdown-content">
      <a href="about">About Us</a>
      <a href="aboutvalues">Our Values</a>
	  <a href="certs">Certifications</a>
      <a href="contact">Contact</a>
    </div>
  </div> 
    <div class="ccdropdown">
    <button class="ccdropbtn <?php if (
	basename($_SERVER['PHP_SELF']) == "servicesoverview.php" || 
	basename($_SERVER['PHP_SELF']) == "services_voip.php" || basename($_SERVER['PHP_SELF']) == "services_mobilevas.php" ||
	basename($_SERVER['PHP_SELF']) == "services_managedsys.php" || basename($_SERVER['PHP_SELF']) == "services_zimbra.php" ||
	basename($_SERVER['PHP_SELF']) == "services_networking.php" || basename($_SERVER['PHP_SELF']) == "services_audit.php" ||
	basename($_SERVER['PHP_SELF']) == "services_concept.php" || basename($_SERVER['PHP_SELF']) == "services_projectmng.php" ||
	basename($_SERVER['PHP_SELF']) == "services_software.php" || basename($_SERVER['PHP_SELF']) == "services_linux.php"
	) {echo "active";} ?>">SERVICES
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="ccdropdown-content" style="">
												<a href="servicesoverview">Overview</a>
												<a href="services_voip">VoIP Systems</a>
												<a href="services_software">Software Development</a>
												<a href="services_mobilevas">Mobile VAS</a>
												<a href="services_managedsys">Managed System Services</a>
												<a href="services_linux">Linux/Unix Support</a>
												<a href="services_zimbra">Zimbra Install. & Training</a>
												<a href="services_networking">Networking Solutions</a>
												<a href="services_audit">IT Security Audit</a>
												<a href="services_concept">Concept Development</a>
												<a href="services_projectmng">Project Management</a>
    </div>
  </div> 
  <a href="projects" class="<?php if (basename($_SERVER['PHP_SELF']) == "projects.php") {echo "active";} ?>">PROJECT</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

  <!--
  </div>
-->

</div>

<script>
function myFunction() {
  var x = document.getElementById("mycctopnav");
  if (x.className === "cctopnav") {
    x.className += " responsive";
  } else {
    x.className = "cctopnav";
  }
}
</script>

</div>
</div>

</body>
</html>
