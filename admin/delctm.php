<?php
$ctid = $_REQUEST['id'];
//echo $ctid;
include("connection.php");
$query = "delete from tbl_ctm where ctid = $ctid";
mysqli_query($con, $query);
header("Location:ctm.php");
?>