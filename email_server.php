<?php //if(!defined('INCLUDE_CHECK')) {header("location: error-page.php");}  ?><?php


//if ($rank_session != "Super admin" && $rank_session != "Admin") { 

	//include "error-page.php"; die("");

//} 


$officeEmail = "info@ft.co.tz";

 function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}
// initializing variables
$fullname = "";
$phone = "";
$email = "";
$message = "";
$office_name = "";
$subject = "";



$errors = array(); 

// connect to the local host database
define('INCLUDE_CHECK',true); 		include ("include/database.php");


// REGISTER USER
if (isset($_POST['email_user'])) {
  // receive all input values from the form
  
  $fullname =  mysqli_real_escape_string($conn, $_POST['fullname']);
  $fullname = ucwords($fullname);
  
  $phone =  mysqli_real_escape_string($conn, $_POST['phone']);
  $email =  mysqli_real_escape_string($conn, $_POST['email']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  //$office_name = mysqli_real_escape_string($conn, $_POST['office_name']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 
 if (preg_match("/^([ ]+)$/",$fullname)) {array_push($errors, "Invalid name.");}
else {if(strlen($fullname)<1 || !preg_match('/^[a-zA-Z]*$/',$fullname)){array_push($errors, "Invalid name.");}}


/* Contact */
  if (empty($phone)) {array_push($errors, "Invalid phone number.");}
  if (!empty($phone)) { 
		if(strlen($phone)<1 || !preg_match('/^[\d]+$/',$phone)){ array_push($errors, "Invalid phone number."); }
  }
  
  
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (!empty($email)) {
		
		if(!checkEmail($email)){array_push($errors, "Your email address is invalid.");}
  }
  

  
  if (preg_match("/^([ ]+)$/",$subject)) {array_push($errors, "Please write the subject.");}
  if (empty($subject) || strlen($subject)<2) { array_push($errors, "Please write the subject."); }
  
  if (preg_match("/^([ ]+)$/",$message)) {array_push($errors, "Please write your message.");}
  if (empty($message) || strlen($message)<2) { array_push($errors, "Please write your message."); }
  
  
  
  


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  
  	
$message = "From ".$fullname." (".$phone.") <br/>".$message;
	
	include ("email_server_inside.php");
  //	$_SESSION['success'] = "Thank you for contacting us. </br>We will get back to you.";
  	//header('location: contact-confirmation.php');
	
	
	?>
							<!--
							
							<script>$.ajax('contact_ajax-load.php')

							            .done(function(data) {

							                	document.getElementById("MessageEmptyCache").innerHTML = data;

							            })

							            .fail(function() {

							                alert("Could not connect to the server. Please try again later.");

							            });   
							</script>
							
							-->
							
<?php
	
	
  }
  
  
  
}

// ... 



// ... 

