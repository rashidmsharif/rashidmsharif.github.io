<?php //if(!defined('INCLUDE_CHECK')) {header("location: error-page.php");}  ?><?php
/**
 *
 */
 
 
 //if ($rank_session != "Super admin" && $rank_session != "Admin") { 

	//include "error-page.php"; die("");

//} 

define('_EMAIL_TO', $officeEmail); // dreamit email address where contact message will be sent to
//define('_EMAIL_SUBJECT', 'Dream Meneja - '); // email message subject
define('_EMAIL_SUBJECT', $subject); 
define('_EMAIL_FROM', $email);  // visitor email address where contact message will be sent from

$fields = array(
	//array('name' => 'username', 'title' => 'Name', 'valid' => array('require')),
	array('name' => 'email', 'title' => 'Email', 'valid' => array('require')),
	//array('name' => 'phone', 'title' => 'Phone', 'valid' => array('require')),
	//array('name' => 'subject', 'title' => 'Subject', 'valid' => array('require'), 'err_message' => ''),
	array('name' => 'message', 'title' => 'Message', 'valid' => array('require')),
	
	
	//array('name' => 'special-requirements', 'title' => 'Special requirements')
);

$error_fields = array();
$email_content = array();
foreach ($fields AS $field){
	$value = isset($_POST[$field['name']])?$_POST[$field['name']]:'';
	$title = empty($field['title'])?$field['name']:$field['title'];
	$email_content[] = $title.': '.nl2br(stripslashes($value));
	
	
	
}

//if (empty($error_fields)){
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers = "From: "._EMAIL_FROM."\r\n"; 
	$headers .= "Reply-To: "._EMAIL_FROM."\r\n"; 	
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	// Send email
	mail (_EMAIL_TO, _EMAIL_SUBJECT, implode('<hr>', $email_content), $headers);
	//echo (json_encode(array('code' => 'success')));
//}
//else{
//	echo json_encode(array('code' => 'failed', 'fields' => $error_fields));
//}