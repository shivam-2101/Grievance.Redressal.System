<?php
session_start();
if($_SESSION['user']=="")
{
    session_destroy();
    header("Location:../index.php");
}
$op = $_POST['op'];
$np = $_POST['np'];
$cnp = $_POST['cnp'];
$email = $_SESSION['user'];
include("../admin/connection.php");

$query = "SELECT password FROM user WHERE email = '$email'";
$res = mysqli_query($con, $query);

if ($row = mysqli_fetch_array($res)) {
    $pp = $row['password'];
    // echo $pp;
}
if ($op == $pp) {
    if ($op == $np) {
        // echo "NHI HOGA";
        echo "<script>alert('❌ Current Password And New Password should NOT BE SAME!!'); window.location.href='stchangepass.php';</script>";
    } else if ($np == $cnp) {
        // echo "Update Hoga";
        $query1 = "UPDATE user SET password = '$np' WHERE email = '$email'";
        mysqli_query($con, $query1);
        echo "<script>alert('✅ Password Changes Successfully!! Click OK to login ⤵️'); window.location.href='studentlogin.php'</script>";
        session_destroy();
    } else {
        // echo "np and cnp doesn't match!";
        echo "<script>alert('❌ New Password And Confirm New Password should BE SAME!!'); window.location.href='stchangepass.php';</script>";
    }
} else {
    // echo "Wrong Curr Pass";
    echo "<script>alert('❌ Current Password is Invalid!!'); window.location.href='stchangepass.php';</script>";
}
?>