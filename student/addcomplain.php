<?php
session_start();
if($_SESSION['user']=="")
{
    session_destroy();
    header("Location:../index.php");
}
include("st-dash-design.php");
include("../admin/connection.php");
$query = "SELECT * FROM tbl_ctm ORDER BY ctid";
$res = mysqli_query($con, $query);
?>
<html>

<head>
    <style>
        .container {
            position: fixed;
            bottom: 60px;
            left: 200px;
        }


        form {
            display: inline;
            align-items: center;
        }

        .input-box,
        .button {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        .button {
            margin: 10px 0;
            padding-top: 20px;
        }

        form .button input {

            border: none;
            border-radius: 10px;
            outline: none;
            color: #000;
            background: aqua;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 2px;
            transition: .4s ease-in-out;
            height: 5vh;
            width: 500px;
        }

        form .button input:hover {
            box-shadow: 3px 3px 16px aqua;
            color: green;
            background-color: #fdfdfd;
        }

        form .button a {
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 300;
            color: steelblue;
            transition: .3 ease ;
        }

        form .button a:hover {
            text-decoration: underline;
            color: red;
        }

        .input-box select,
        textarea {
            height: 50px;
            width: 50%;
            outline: none;
            border-radius: 10px;
            border: 2px solid white;
            padding-left: 20px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.5rem;
            font-weight: 300;
            text-align: center;
            box-shadow: 2px 2px 12px aqua;
        }

        .input-box textarea {
            height: 250px;
            text-align: justify;
            resize: none;
        }

        #label {
            margin-top: 10px;
            font-size: 1.2rem;
            font-weight: 300;
            padding: 13px;
            color: #fdfdfd;
        }
    </style>

</head>

<body>
    <div class="container">
        <form action="addcomplain_code.php" method="post">
            <div class="input-box">
                <span class="details px-2 fw-bold" id="label"><i class="bi bi-clipboard-plus-fill me-2"></i>Complain
                    Type</span>
                <select name="ct" required>
                    <option value="">--Select Complain Type--</option>
                    <?php
                    while ($row = mysqli_fetch_array($res)) {
                        $complaintype = $row['comp_type'];
                        $ctid = $row['ctid'];
                        ?>
                        <option value="<?php echo $ctid;?>">
                            <?php echo $complaintype; ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="input-box">
                <span class="details px-2 fw-bold" id="label"><i class="bi bi-clipboard-plus-fill me-2"></i>Add
                    Complain</span>
                <textarea name="complain" cols="30" rows="10" maxlength="300" required></textarea>
            </div>
            <div class="button">
                <input type="submit" value="ADD COMPLAIN">
            </div>
            <div class="button">
               <a href="stdashboard.php"><i class="bi bi-arrow-left me-2"></i>BACK</a>
            </div>
        </form>
    </div>
</body>

</html>