<?php
session_start();
$email = $_POST['email'];
// echo $email;
$pass = $_POST['pass'];
// echo $pass;

include("connection.php");
$query = "SELECT * FROM tbl_admin WHERE email = '$email' AND password = '$pass'";
$res = mysqli_query($con, $query);

if($row = mysqli_fetch_array($res))
{
    $_SESSION['admin']=$email;
    header("Location: dashboard.php");
}
else
{
    // header("location:adminlogin.php?message=wrong");
    echo "<script>alert('❌ Invalid Email or Password!');window.location.href='adminlogin.php';</script>";
}
?>