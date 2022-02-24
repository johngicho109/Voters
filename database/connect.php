<?php
$conn = mysqli_connect("localhost","root","","voting-system");
if(!$conn){
    // echo "Successfully connected to the database";
    die(mysqli_error($conn));
}
?>