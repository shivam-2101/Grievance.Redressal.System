<?php
$sid = $_REQUEST['id'];
//echo $sid;
include("connection.php");
$query = "delete from tbl_session where sid = $sid";
mysqli_query($con, $query);
header("Location:session.php");
?>