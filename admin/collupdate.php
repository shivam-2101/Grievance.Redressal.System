<?php
$cid = $_POST['cid'];
// echo $cid;

$college = $_POST['college'];
// echo $college;
$college = ucfirst($college);
include("connection.php");
$query = "UPDATE tbl_college SET college= '$college' WHERE cid = '$cid'";
mysqli_query($con, $query);
// header("Location:college.php?message=updated");
echo "<script>alert('✅ College Successfully Updated!');window.location.href='college.php';</script>";
?>