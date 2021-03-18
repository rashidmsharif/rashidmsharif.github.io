<?php

//if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

if(!defined('INCLUDE_CHECK')) {header("location: ../error-page.php");}


$dbpasswd = 'loghurid';
$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'barcode';

//$conn = mysqli_connect('localhost','root','sfuchas2018','Meneja')
$conn = mysqli_connect('localhost','root','loghurid','barcode');






?>