<?php

$servername = "localhost";
$name = "root";
$password = "";
$database = "assel-eng";

// Create connection
$conn = mysqli_connect($servername, $name, $password, $database);
 
// Check connection
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	
; }
?>

<?php
/* Defining local database*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'assel-eng');
 
/* Creating connection to our server */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
