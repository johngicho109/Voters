<?php
session_start();
include "connect.php";

$votes = $_POST["candidatevotes"];
$totalVotes = $votes + 1;
$cid = $_POST["candidateid"];
$uid = $_SESSION["id"];

$updateVotes = mysqli_query($conn,"UPDATE `users` SET votes = '$totalVotes' WHERE id='$cid' ");
$updateStatus = mysqli_query($conn, "UPDATE `users` SET status=1 WHERE id='$uid' ");

if($updateVotes and $updateStatus){
    $getcandidates = mysqli_query($conn,"SELECT username,photo,votes,id FROM `users` WHERE standard ='p-candidate' ");
    $candidates = mysqli_fetch_all($getcandidates,MYSQLI_ASSOC);
    $_SESSION["p-candidates"] = $candidates;
    $_SESSION["status"]=1;
    echo "<script>alert('Voting successfull')</script>";
    header("Location: ../partials/home.php");
}else{
    echo "<script>alert('Voting unsuccessfull')</script>";
    header("Location: ../partials/home.php");
}
?>