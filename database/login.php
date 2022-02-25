<?php
include "connect.php";

session_start();

$username = $_POST["username"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$std = $_POST["std"];

// echo "$username";echo "$email";echo "$password";echo "$std";die();

$sql = "SELECT * FROM `users` WHERE username='$username' and email='$email' and password ='$password' and standard ='$std'";

// var_dump($sql); die();

$result = mysqli_query($conn,$sql);

// var_dump($result); die();

if(mysqli_num_rows($result)>0){
    $sql2 = "SELECT username,photo,votes,id FROM `users` WHERE standard = 'p-candidate'";

    // var_dump($sql2);die();

    $result2 = mysqli_query($conn,$sql2);

    if(mysqli_num_rows($result2)>0){
        $candidates = mysqli_fetch_all($result2,MYSQLI_ASSOC);

        // var_dump($candidates);die();

        $_SESSION["p-candidates"] = $candidates;
    }
    $data = mysqli_fetch_array($result);
    $_SESSION["id"]=$data["id"];
    $_SESSION["status"]=$data["status"];
    $_SESSION["data"]=$data;

    header("Location: ../partials/home.php");
}else{
    echo "<script>alert('User Login Credentials Does Not Exist, Try Again');</script>";
    header("Location: ../");
}
?>