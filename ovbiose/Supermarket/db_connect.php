<?php 

$conn= new mysqli('localhost','root','','supermarket_db')or die("Could not connect to mysql".mysqli_error($con));
if($conn)
    echo "connected successfully"
?>