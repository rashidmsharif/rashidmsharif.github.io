<?php

//if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

if (!defined('INCLUDE_CHECK')) {header("location: ../error-page.php");}


$dbpasswd = 'faheemFT';
$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'faheem_ftdb';


//begin of proceduraal way: ////////////////////////////////////////////////////////


$conn = mysqli_connect('localhost','root','faheemFT','faheem_ftdb');


// Check connection
if (mysqli_connect_errno($conn)) {
   
   echo "Failed to connect to DataBase: " . mysqli_connect_error();
   
}


//end of procedural way: ////////////////////////////////////////////////////////





//begin of object oriented  way:  ////////////////////////////////////////////////////////
/*
$conn = new mysqli('localhost','root','faheemFT','faheem_ftdb');


// Check connection
if ($conn->connect_errno) {
   
   echo "Failed to connect to DataBase: " . $conn->connect_error;
   
}
*/
//end of object oriented way: ////////////////////////////////////////////////////////



?>