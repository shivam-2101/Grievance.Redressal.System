<?php
$comp_type = $_POST['ct'];
// echo $ct;
$comp_type = ucfirst($comp_type);
include("connection.php");
$check = "SELECT * FROM tbl_ctm WHERE comp_type = '$comp_type'";
$res = mysqli_query($con,$check);

if($row = mysqli_fetch_array($res))
{
    // header("Location:ctm.php?message=reject");
    echo "<script>alert('❌ This complain type already exist!');window.location.href='ctm.php';</script>";
}
else
{
$query = "INSERT INTO tbl_ctm (comp_type, status, dor)
VALUES('$comp_type', 'N', CURDATE())";
mysqli_query($con, $query);
header("Location:ctm.php");
}
?>