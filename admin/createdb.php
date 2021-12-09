<?php
 
  
  $mysqli = new mysqli("localhost", "root", "test12345");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE subscriptions";
if($mysqli->query($sql) === true){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
