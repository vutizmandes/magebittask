<?php

  require "connect.php"; 
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt insert query execution
$today = date("Y-m-d H:i:s");
$sql = "INSERT INTO persons (email, time_added, domain) VALUES ('peterparker@mail.com', '$today', 'mail.com')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>