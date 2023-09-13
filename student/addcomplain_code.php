<?php
session_start();
if($_SESSION['user']=="")
{
    session_destroy();
    header("location:../index.php");
}
$complaintype = $_POST['ct'];
// echo $complaintype;
$complain = $_POST['complain'];
// echo $complain;
$email = $_SESSION['user'];
// echo $email;
include("../admin/connection.php");

$query = "SELECT * FROM user WHERE email = '$email'";
$res = mysqli_query($con, $query);
$query2 = "SELECT ctid FROM tbl_ctm";
if($row = mysqli_fetch_array($res))
{
    $uid = $row['uid'];
}
$query2 = "INSERT INTO tbl_complain (ctid, uid, complain, doc, status)
VALUES ('$complaintype', '$uid', '$complain', curdate(), 'N')";
mysqli_query($con, $query2);
echo "<script>alert('✅ Your Complain has been successfully added!!'); window.location.href='stdashboard.php';</script>";
?>