<?php

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Sacramento&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('../images/bgimg.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 600px;
            /* background-color: #fff; */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            background: transparent;
            border: 1px solid aqua;
            backdrop-filter: blur(15px);
            box-shadow: 3px 3px 10px aqua;
        }

        .container img {
            max-width: 100px;
            margin-bottom: 20px;
            background-color: white;
            border-radius: 50%;
        }

        .container h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: white;
        }

        .container h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: white;
        }

        .user-details .input-box {
            margin-bottom: 20px;
        }

        .user-details .details {
            font-weight: 500;
            display: block;
            margin-bottom: 5px;
            text-align: left;
            color: white;
        }

        .user-details input[type="email"],
        .user-details input[type="password"] {
            height: 45px;
            width: 100%;
            border: none;
            box-shadow: 0 .1rem .5rem aqua;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
        }

        .button input[type="submit"] {
            height: 45px;
            width: 100%;
            border: none;
            border-radius: 8px;
            outline: none;
            color: #253b77;
            background: linear-gradient(40deg, rgba(255, 255, 255, 1) 28%, rgba(52, 255, 237, 0.9458377100840336) 72%);
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            transition: .5s ease;
        }

        .button input[type="submit"]:hover {
            background: linear-gradient(60deg, rgba(52, 255, 237, 0.9458377100840336) 28%, rgba(255, 255, 255, 1) 72%);
            box-shadow: 2px 2px 8px aqua;
            color: #253b77;
        }

        .bottom {
            margin-top: 20px;
            display: inline-block;
        }

        .bottom a {
            text-decoration: none;
            color: aqua;
        }

        .bottom a:hover {
            text-decoration: underline;
        }

        .bottom-links {
            margin-top: 20px;
        }

        .bottom-links span,
        .bottom-links a {
            display: inline;
            margin: 0 5px;
            text-decoration: none;
            color: #f8f9fa;
        }

        .bottom-links a {
            color: aqua;
        }

        .bottom-links a i {
            padding-left: 5px;
            font-weight: 500;
        }

        .bottom-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="../images/mithla.png" alt="logo">
        <h1>Grievance Redressal Portal</h1>
        <h3><i class="bi bi-mortarboard-fill px-2"></i>Student Login</h3>
        <form action="stlogcode.php" method="post" class="user-details">
            <div class="input-box">
                <span class="details"><i class="bi bi-envelope-at-fill px-2"></i>Email*</span>
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>
            <div class="input-box">
                <span class="details"><i class="bi bi-key-fill px-2"></i>Password*</span>
                <input type="password" name="pass" placeholder="Enter Password" required>
            </div>
            <div class="button">
                <input type="submit" value="Login">
            </div>
        </form>
        <div class="bottom px-5 me-4">
            <a href="../index.php"><i class="bi bi-arrow-left-short"></i>Back To Home</a>
        </div>

        <div class="bottom px-5 me-4">
            <a href="#">Forget Password?</a>
        </div>
        <div class="bottom-links">
            <span>Don't Have An Account?</span>
            <a id="a2" href="register.php">Sign Up<i class="bi bi-arrow-right-short"></i></a>
        </div>
    </div>
</body>
</html>