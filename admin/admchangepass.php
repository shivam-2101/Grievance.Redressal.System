<?php
session_start();
if($_SESSION['admin']=="")
{
    session_destroy();
    header("Location:adminlogin.php");
}
include("dash-design.php");
?>

<html>

<head>
    <style>
        .container {
            position: fixed;
            bottom: 50px;
            left: 200px;
        }

        .container h1 {
            font-size: 2rem;
            width: 100%;
            text-align: center;
            font-weight: 600;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input-box,
        .button {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 4px;
        }

        .button {
            margin: 5px 0;
            padding-top: 20px;
        }

        form .button input {

            border: none;
            border-radius: 10px;
            outline: none;
            color: #fdfdfd;
            background: #212529;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 2px;
            transition: .5s ease;
            height: 5vh;
            width: 500px;
        }

        form .button input:hover {
            border: 3px solid green;
            color: green;
            background-color: #fdfdfd;
        }

        form .button a {
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 300;
        }

        form .button a:hover {
            text-decoration: underline;
            color: red;
        }

        .input-box input {
            height: 60px;
            width: 200%;
            outline: none;
            border-radius: 10px;
            border: 2px solid #253b77;
            padding-left: 20px;
            font-size: 22px;
            font-weight: 300;
            text-align: center;
        }

        #label {
            margin-top: 7px;
            font-size: 1.2rem;
            font-weight: 300;
            padding: 13px;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>CHANGE PASSWORD</h1>
        <hr style="width: 25%; margin-left: 490px;" size="10" noshade color="#253b77">
        <form action="admchangepass_code.php" method="post">
            <div class="input-box">
                <span class="details px-2 fw-bold" id="label"><i class="bi bi-key-fill p-2"></i>Current Password*</span>
                <input type="text" name="op" placeholder="*******" required>
            </div>
            <div class="input-box">
                <span class="details px-2 fw-bold" id="label"><i class="bi bi-key-fill p-2"></i>New Password*</span>
                <input type="password" name="np" placeholder="*******" required>
            </div>
            <div class="input-box">
                <span class="details px-2 fw-bold" id="label"><i class="bi bi-key-fill p-2"></i>Confirm New
                    Password*</span>
                <input type="password" name="cnp" placeholder="*******" required>
            </div>
            <div class="button">
                <input type="submit" value="CHANGE PASSWORD">
            </div>
            <div class="button">
                <a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>BACK</a>
            </div>
        </form>
    </div>
</body>

</html>