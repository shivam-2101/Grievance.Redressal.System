<?php
session_start();
$email = $_POST['email'];
// echo $email;
$pass = $_POST['pass'];
// echo $pass;

include("../admin/connection.php");
$query = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
$res = mysqli_query($con, $query);

if($row = mysqli_fetch_array($res))
{
    $_SESSION['user']=$email;
    header("location:stdashboard.php");
}
else
{
    // header("location:studentlogin.php?message=wrong");
    echo "<script>alert('❌ Invalid Email or Password!');window.location.href='studentlogin.php';</script>";
}
?>