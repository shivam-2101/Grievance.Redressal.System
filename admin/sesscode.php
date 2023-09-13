<?php
$session = $_POST['session'];
// echo $session;
include("connection.php");
$check = "SELECT * FROM tbl_session where session='$session'";
$res = mysqli_query($con,$check);

if($row = mysqli_fetch_array($res))
{
    // header("Location:session.php?message=reject");
    echo "<script>alert('❌ Session Already Exist!');window.location.href='session.php';</script>";
}
else
{
$query = "INSERT INTO tbl_session (session, status, dor)
VALUES('$session', 'N', CURDATE())";
mysqli_query($con, $query);
header("Location:session.php?message=success");
}
?>