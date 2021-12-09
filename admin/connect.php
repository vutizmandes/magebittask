<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with test12345 password) */
$mysqli = new mysqli("localhost", "root", "test12345", "subscriptions");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Print host information
// echo "Connect Successfully. Host info: " . $mysqli->host_info;
?>
