<?php
$uid = $_REQUEST['id'];
//echo $uid;
include("connection.php");
$query = "delete from user where uid = $uid";
mysqli_query($con, $query);
header("Location:dashboard.php");
?>