<?php
$ctid = $_POST['ctid'];
// echo $cid;

$comp_type = $_POST['comp_type'];
// echo $comp_type;
$comp_type = ucfirst($comp_type);
include("connection.php");
$query = "UPDATE tbl_ctm SET comp_type= '$comp_type' WHERE ctid = '$ctid'";
mysqli_query($con, $query);
// header("Location:college.php?message=updated");
echo "<script>alert('✅ Complain Type Successfully Updated!');window.location.href='ctm.php';</script>";
?>