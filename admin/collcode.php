<?php
$college = $_POST['college'];
// echo $college;
$college = ucfirst($college);
include("connection.php");
$check = "SELECT * FROM tbl_college where college='$college'";
$res = mysqli_query($con,$check);

if($row = mysqli_fetch_array($res))
{
    // header("Location:college.php?message=reject");
    echo "<script>alert('❌ College Already Added!');window.location.href='college.php';</script>";
}
else
{
$query = "INSERT INTO tbl_college (college, status, dor)
VALUES('$college', 'N', CURDATE())";
mysqli_query($con, $query);
header("Location:college.php?message=success");
}
?>