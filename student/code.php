<?php
$name = $_POST['name'];
// echo $name;
$name= strtoupper($name);

$fname = $_POST['fname'];
// echo $fname;
$fname = strtoupper($fname);

$gender = $_POST['gender'];
// echo $gender;

$mobile = $_POST['mobile'];
// echo $mobile;

$email = $_POST['email'];
// echo $email;
$email = strtolower($email);


$pass = $_POST['pass'];
// echo $pass;

$dob = $_POST['dob'];
// echo $dob;

$city = $_POST['city'];
// echo $city;

$pincode = $_POST['pincode'];
// echo $pincode;

$course = $_POST['course'];
// echo $course;

$college = $_POST['college'];
// echo $college;

$session = $_POST['session'];
// echo $session;

$address = $_POST['address'];
// echo $address;

include("../admin/connection.php");
$check = "SELECT * FROM user WHERE email = '$email' OR mobile = '$mobile'";
$res = mysqli_query($con, $check);
if($row = mysqli_fetch_array($res))
{
    // header("Location:register.php?message=reject");
    echo "<script>alert('❌ Email OR Mobile Already EXISTS!! Please Try Again!');window.location.href='register.php';</script>";
}

else
{
$query = "INSERT INTO user(name, fname, gender, email, password, mobile, dob, address, city, pincode, course, session, college, status, dor)
VALUES('$name', '$fname', '$gender', '$email', '$pass', '$mobile', '$dob', '$address', '$city', '$pincode', '$course', '$session', '$college', 'N', CURDATE())";
mysqli_query($con, $query);
// header("Location:studentlogin.php?message=success");
echo "<script>alert('✅ You are succesfully registered! Click OK to Login!');window.location.href='studentlogin.php';</script>";
}
?>