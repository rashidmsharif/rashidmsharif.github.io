<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	
	<link rel="stylesheet" type="text/css" href="css/export_datatables.min.css"/>  	<!--  	exporting to pdf, csv, excel, e.t.c	 -->	
	<!-- <link href='css/jquery.dataTables.css' rel='stylesheet'>-->
	  <link href='css/dataTables.bootstrap.min.css' rel='stylesheet'>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <!-- jQuery -->
    <script src="js/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="bower_components/jquery/jquery-ui.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='fontawesome-pro-5.11.2-web/css/all.css' rel='stylesheet'>


<link href="css/styleextension.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/dropdown-menu.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/dropdown-menu-ext.css" rel="stylesheet" type="text/css" media="all"/>
<!--<link rel="stylesheet" href="css/animate.min.css">  already included in style.css-->


<!--<link rel="stylesheet" href="css/welcome.css.css">-->
<link rel="stylesheet" href="css/customers.css">



<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32b.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16b.png">
	
  <?php 

if (isset($_POST['email_user'])) {

if (count($errors) == 0) {
	
?>

<link href="css/notifysuccess.css" rel="stylesheet">

<?php	
	
} else {

?>

<link href="css/notify.css" rel="stylesheet">

<?php	
	
} 

}

$myPageLength = 100;

?>
  
  

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->

 

  
  <script src="js/wow.min.js"></script>

  
<!-- already on top
	<script src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
	-->
	<script type="text/javascript" src="js/jquery.notify.js"></script>
<link rel="stylesheet" href="plugins/slick/slick.css">
<link rel="stylesheet" href="plugins/slick/slick-theme.css">
<link href="css/slickextension.css" rel="stylesheet" type="text/css" media="all"/>	
<style>

.titleBounce
{
	margin-top: 20px;
	font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased !important;
	color: #0084D9;
		
}

.titleBounce span {
	
	color: #333;
	
}

.titleBounceContainer {
	
	
	
}

.titleBounceHolderContainer {
	
	margin-top: 20px; 
	margin-bottom: 20px;
	
}

.titleBounceHolderContainer h2 span{
	
color: #848484;

}


h3.slide-title, h2.slide-sub-title
{
    color: #FFFFFF;
	text-shadow: 5px 3px 1px rgba(0, 0, 0, 0.7);
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased !important;
}

h3.slide-titlex, h2.slide-sub-titleX
{
    color: #333;
	font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased !important;
}

.inner-box:hover {

background-color: #ffffff; 

}

.inner-box:hover {

background-color: #bce5ff; /*  ffaf15;  */
color: #ffffff;

}


.slide-item:hover a {

text-decoration: none;

}

.modalColor {
						/*color: #3c763d;*/ 
						/* background: #d9edf7; light blue original */
						/* background: #EFC41A; gold */
						
						
						
						background: #EFC41A; /*  tomato color: fcbe94   */
						
						
						border: 1px solid #9fc4d6;
						margin-bottom: 20px;
			}

    .button-hf {margin-left:0px; margin-top:5px; color: #ffffff; font-weight: bold; background-color: #222222; width:100px; height:35px; border:none;border-radius: 5px;}
		   
	.button-hf2 {margin-left:0px; margin-top:5px; color: gray; font-weight: bold; background-color: #ededed; width:100px; height:35px; border:none;border-radius: 5px; ;}

    .button-hf:hover {color: #222222; background-color: #ffffff; border: 1px solid #222222;}
			
	.button-hf2:hover {color: gray; background-color: #ffffff; border: 1px solid gray}
			
			
			
	.button-hf3 {margin-left:0px; margin-top:5px; margin-right: 10px; color: #81d330; font-weight: bold; background-color: #ffffff; width:100px; height:35px; padding: 10px; border:none;border-radius: 5px;}
	
	.button-hf3 a {color: #81d330;}
	
	.button-hf4 {margin-left:0px; margin-top:5px; color: #ffffff; font-weight: bold; background-color: #81d330; width:100px; height:35px; padding: 10px; border:none;border-radius: 5px;}
	
	.button-hf4 a{color: #ffffff;}
	
    .button-hf3:hover {color: #ffffff !important; background-color: #81d330; }
	.button-hf3 a:hover {color: #ffffff !important;}
			
	.button-hf4:hover {color: #81d330 !important; background-color: #ffffff; }
	.button-hf4 a:hover {color: #81d330 !important; }

.modal {
				
				/*text-align: center;*/
				
			}
			
			
			
			.modal-dialog {
				
				/*  width: 90%;  */
				
				
				
				height: 90%;
				overflow-y: auto;
				
			}
			
::-webkit-scrollbar {width: 10px;}::-webkit-scrollbar-track {background: #f1f1f1; }::-webkit-scrollbar-thumb {background: #888; }::-webkit-scrollbar-thumb:hover {background: #555; }.mainMenuClass li a {font-size:93%;  padding: 10px;}.mainMenuClass li a:hover {font-size:93%; padding: 10px;}

/* .dropdown-menu li a {padding: 5px;}.dropdown-menu li a:hover  {padding: 5px;} */


@media screen and (max-width: 1199px) {
	
.hf-container {
	border: 1px solid #bfbdbd; 
	padding: 10px; 
	text-align: left;
	margin: 0 0 10px 0;
}

}


@media screen and (min-width: 626px) and (max-width: 1199px) {
	
.col-lg-3 {
	width: 50%;
	float: left;
}

}


a.myLinks{
	
	color: #0084D9;
	
}

a.myLinks:hover{
	
	color: #333333;
	
}

a.myLinks2{
	
	color: #FFFFFF;
	
}

a.myLinks2:hover{
	
	color: #0084D9;
	
}


.top-nav ul li .dropdown-menu li a {
    color: #333333;
	font-weight: 500;
	/* text-transform: lowercase; */
}

ul.navbar-nav li a:hover {
    color: #0084D9;  /*  ffb600;  */
	
}

.top-nav ul li .dropdown-menu li a:hover{
	color: #0084D9;  /*  ffb600;  */
	text-decoration:none;
	background-color: #fff;  /* brown #8A5E43   very brown #5D431D orange #0084D9*/
	
}

@media (max-width: 767px){
	
ul.navbar-nav li:first-child {
      margin-top: 30px;
   }
   

     
  

   
   
}


   
   /* start portfolio */
#portfolio
	{
		padding-bottom: 80px;
	}
#portfolio .col-md-3
	{
		padding: 0px;
	}
	.portfolio-thumb, 
	.portfolio-overlay {
		max-width: 450px;
	}
#portfolio .portfolio-thumb
	{
		overflow: hidden;
		padding: 0;
		margin: 0 auto;
		border: 2px solid #333;
		border-radius: 7px;
	}
#portfolio .portfolio-thumb .portfolio-overlay
	{
		
		background: #000;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;	
		width: 100%;
		height: 100%;
		opacity: 0;
		position: absolute;
		padding: 20px 10px 20px 20px;
		margin-left: auto;
		margin-right: auto;
		-webkit-transition: all 0.4s ease-in-out;
		        transition: all 0.4s ease-in-out;
				border-radius: 7px;
	}
#portfolio .portfolio-thumb .portfolio-overlay h4
	{
		font-weight: bold;
		padding-bottom: 10px;
		color: #dddddd;
	}
#portfolio .portfolio-thumb .portfolio-overlay .btn
	{
		background: none;
		border: 1px solid #fff;
		border-radius: 2px;
		color: #fff;
		font-weight: bold;
	}
	
	#portfolio .portfolio-thumb p
	{
		color: #dddddd;
	}
	
#portfolio .portfolio-thumb:hover .portfolio-overlay
	{
		cursor: pointer;
		opacity: 0.8;
	}
/* end portfolio */


@media only screen and (max-width: 1199px) and (min-width: 992px) {
	#portfolio .portfolio-thumb .portfolio-overlay {
		padding: 0px 8px;
	}
}

/* start 980 media quires */
@media only screen and ( max-width: 980px ) {
	#team .team-wrapper
		{
			margin-top: 40px;
		}
	#portfolio .portfolio-thumb .portfolio-overlay
	{
		background: #28a7e9;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		position: absolute;
		padding: 40px 10px 20px 20px;
		-webkit-transition: all 0.4s ease-in-out;
		        transition: all 0.4s ease-in-out;
	}

}

.projectHF {
	
	position: absolute;  
	bottom: 20px; 
	padding: 7px 20px 7px 20px; 
	color: #f6f6f6;
	width: 100%;
	display: block;
	background: rgba(0, 0, 0, 0.7) 
}

.projectHF2 {
	
	position: absolute;  
	bottom: 20px; 
	padding: 7px 20px 7px 20px; 
	color: #fff;
	width: 100%;
	display: block;
	background: rgba(0, 0, 0, 0.7) 
}


.portfolio-thumb:hover .projectHF, .portfolio-thumb:hover .projectHF2 {
	display: none;
}



@media (min-width: 600px) and (max-width: 768px) {	
	
.projectHF, .projectHF2 {
	
	width: 76%;
}


	
}

</style>