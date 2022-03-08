<?php
include("connect.php");

$username = $_POST["username"];
$email = $_POST["email"];
$DOB = $_POST["DOB"];
$password = md5($_POST["password"]);
$cpassword = md5($_POST["cpassword"]);
$image = $_FILES["photo"]["name"];
$tmp = $_FILES["photo"]["tmp_name"];
$std = $_POST["std"];

if($password != $cpassword){
    echo "<script>
    alert('Password dont match');
    </script>";
    header("Location: ../partials/registration.php");
}else{
    move_uploaded_file($tmp,"../uploads/$image");
    $sql = "INSERT INTO `users` (username,email,DOB,password,photo,standard,status,votes) VALUES('$username','$email','$DOB','$password','$image','$std',0,0)";
    $result = mysqli_query($conn,$sql);
    // var_dump($result); die();
    if($result){
        echo "<script>
        alert('Registration Successfull');
        </script>";
        header("Location: login.php");
    }
}
?>