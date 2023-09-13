<?php
$cid = $_REQUEST['id'];
//echo $cid;
include("connection.php");
$query = "delete from tbl_college where cid = $cid";
mysqli_query($con, $query);
header("Location:college.php");
?>