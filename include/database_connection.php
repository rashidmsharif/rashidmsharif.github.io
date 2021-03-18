<?php

//database_connection.php

if(!defined('INCLUDE_CHECK2')) {header("location: ../error-page.php");}
$connect = new PDO("mysql:host=localhost;dbname=faheem_ftdb", "root", "faheemFT");



?>
