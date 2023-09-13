<?php
include("../admin/connection.php");
$query = "SELECT * FROM tbl_session ORDER BY sid";
$res = mysqli_query($con, $query);
$query2 = "SELECT * FROM tbl_college";
$res2 = mysqli_query($con, $query2);
?>

<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Sacramento&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            margin-top: 55px;
            height: 110vh;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #eef1f9;
        }

        .container {
            max-width: 1000px;
            width: 100%;
            background: #fdfdfd;
            padding: 25px 30px;
            border-radius: 10px;
        }

        .container img {
            height: 150px;
            width: 150px;
            margin-left: 43%;
        }

        .container h1,
        h3 {
            font-size: 25px;
            font-weight: 500;
            color: #253b77;
            margin-left: 34%;
        }

        .container h3 {
            font-size: 16px;
            margin-left: 43%;
        }

        .container form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 35px 0 12px 0;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }

        .user-details .input-box .details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .user-details .input-box input,
        select,
        textarea {
            height: 45px;
            width: 100%;
            outline: none;
            border-radius: 10px;
            border: 2px solid #253b77;
            padding-left: 15px;
            font-size: 15px;
        }

        .user-details .input-box textarea {
            height: 80px;
            width: 950px;
            padding-top: 25px;
            font-size: 17px;
            resize: none;
        }

        form .button {
            height: 35px;
            margin: 12px 0;
        }

        form .button input {
            height: 100%;
            width: 100%;
            border: none;
            border-radius: 10px;
            outline: none;
            color: #fdfdfd;
            background: #4755aa;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            transition: .5s ease;
        }

        form .button input:hover {
            border: 2px solid #4755aa;
            color: #4755aa;
            background-color: #fdfdfd;
        }

        .bottom {
            position: relative;
        }

        .bottom a {
            position: absolute;
            bottom: -22px;
            left: 15px;
            text-decoration: none;
        }

        .bottom a:hover {
            text-decoration: underline;
        }

        .bottom-links {
            text-align: center;
            margin-top: 5px;
            margin-left: 55%;
        }

        .bottom-links span,
        .bottom-links a {
            display: inline;
            margin: 0 5px;
            margin-left: 5px;
            text-decoration: none;
        }

        .bottom-links a i {
            padding-left: 5px;
            font-weight: 500;
        }

        .bottom-links a:hover {
            text-decoration: underline;
        }
    </style>

    <script>

        document.addEventListener("DOMContentLoaded", function () {
            const urlParams = new URLSearchParams(window.location.search);
            const message = urlParams.get('message');

            if (message === 'reject') {
                alert("Email or mobile already exist!");
            }
        });

    </script>
</head>

<body>
    <div class="container">
        <img src="../images/mithla.png" alt="logo">
        <h1>Grievance Redressal Portal</h1>
        <h3>Student Registration</h3>
        <form action="code.php" method="post">
            <div class="user-details">

                <div class="input-box">
                    <span class="details">Name*</span>
                    <input type="text" name="name" placeholder="Enter Name" required>
                </div>

                <div class="input-box">
                    <span class="details">Father's Name*</span>
                    <input type="text" name="fname" placeholder="Enter Father's Name" required>
                </div>

                <div class="input-box">
                    <span class="details">Gender*</span>
                    <select name="gender" required>
                        <option value="">-Select Gender-</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details" required>Mobile*</span>
                    <input type="text" name="mobile" placeholder="Enter Mobile" maxlength="10" required>
                </div>
                <div class="input-box">
                    <span class="details">Email*</span>
                    <input type="email" name="email" placeholder="Enter Email" required>
                </div>

                <div class="input-box">
                    <span class="details">Password*</span>
                    <input type="password" name="pass" placeholder="Enter Password" required>
                </div>

                <div class="input-box">
                    <span class="details">Date Of Birth*</span>
                    <input type="date" name="dob" required>
                </div>

                <div class="input-box">
                    <span class="details">City*</span>
                    <select name="city" required>
                        <option value="">-Select City-</option>
                        <option value="Darbhanga">Darbhanga</option>
                        <option value="Muzaffarpur">Muzaffarpur</option>
                        <option value="Samastipur">Samastipur</option>
                        <option value="Madhubani">Madhubani</option>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details">Pincode*</span>
                    <input type="text" required name="pincode" placeholder="Enter Pincode" maxlength="6">
                </div>

                <div class="input-box">
                    <span class="details">Course*</span>
                    <select name="course" required>
                        <option value="">-Select Course-</option>
                        <option>B.Sc</option>
                        <option>B.A</option>
                        <option>B.Com</option>
                        <option>M.Sc</option>
                        <option>M.A</option>
                        <option>M.Com</option>
                        <option>MBA</option>
                        <option>PHD</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">College*</span>
                    <select name="college" required>
                        <option value="">-Select College-</option>
                        <?php
                        while ($row2 = mysqli_fetch_array($res2)) {
                            $collegeName = $row2['college'];
                            ?>
                            <option value="<?php echo $collegeName; ?>">
                                <?php echo $collegeName; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">Session*</span>
                    <select name="session" required>
                        <option value="">-Select Session-</option>
                        <?php
                        while ($row = mysqli_fetch_array($res)) {
                            $sessionName = $row['session'];
                            ?>
                            <option value="<?php echo $sessionName; ?>">
                                <?php echo $sessionName; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details">Address*</span>
                    <textarea name="address" required cols="30" rows="10" placeholder="Enter Address" maxlength="300"></textarea>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
        <div class="bottom">
            <a href="../index.php"><i class="bi bi-arrow-left-short"></i>Back To Home</a>
        </div>
        <div class="bottom-links">
            <span>Already Have An Account?</span>
            <a id="a2" href="studentlogin.php">Login<i class="bi bi-arrow-right-short"></i></a>
        </div>
    </div>
</body>

</html>