<?php
$sid = $_POST['sid'];
// echo $sid;

$session = $_POST['session'];
// echo $session;

include("connection.php");
echo $query = "update tbl_session set session = '$session' where sid='$sid'";
mysqli_query($con, $query);
// header("Location:session.php");
echo "<script>alert('✅ Session Successfully Updated!');window.location.href='session.php';</script>";
?>