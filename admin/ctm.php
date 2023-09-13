<?php
session_start();
if ($_SESSION['admin'] == "") {
    session_destroy();
    header("Location:../index.php");
}
include("dash-design.php");
include("connection.php");
$query = "SELECT * from tbl_ctm order by ctid";
$res = mysqli_query($con, $query);
?>


<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            position: fixed;
            bottom: 50px;
            left: 160px;
        }

        form .input-box,
        .button {
            display: flex;
            justify-content: center;
        }

        form .button {
            height: 35px;
            margin: 25px 0 0 228px;

        }

        form .button input {

            border: none;
            border-radius: 10px;
            outline: none;
            color: #fdfdfd;
            background: #212529;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            transition: .5s ease;
            width: 500px;
        }

        form .button input:hover {
            border: 2px solid #4755aa;
            color: #4755aa;
            background-color: #fdfdfd;
        }

        form .button a {
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 300;
        }

        form .button a:hover {
            text-decoration: underline;
            color: red;
        }

        .input-box input {
            height: 70px;
            width: 38%;
            outline: none;
            border-radius: 10px;
            border: 2px solid #253b77;
            padding-left: 10px;
            font-size: 22px;
            font-weight: 300;
            text-align: center;
        }

        #label {
            margin-top: 26px;
            margin-right: 4px;
            font-size: 1.2rem;
            font-weight: 300;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #fdfdfd;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
            margin-left: 300px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #212529;
        }

        tr {
            transition: .5s ease;
        }

        tr:hover {
            background-color: #212529;
            color: white;
        }

        #del {
            text-decoration: none;
            color: red;
        }

        #del:hover {
            text-decoration: underline;
            color: red;
        }

        #edit {
            text-decoration: none;
        }

        #edit:hover {
            text-decoration: underline;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="ctmcode.php" method="post">
            <div class="input-box">
                <span class="details px-2 fw-bold" id="label"><i class="bi bi-clipboard-plus-fill me-2"></i>Add Complain Type</span>
                <input type="text" name="ct" placeholder="Enter Complain Type" required>
            </div>
            <div class="button">
                <input type="submit" value="ADD COMPLAIN TYPE">
            </div>
        </form>

        <table>
            <tr>
                <th>S.no.</th>
                <th>Type Of Complain</th>
                <th>Date Of Addition</th>
                <th>Added By</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_array($res)) {
                ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $row['comp_type']; ?>
                    </td>
                    <td>
                        <?php echo date("d/m/y") ?>
                    </td>
                    <td>
                        <?php echo "Admin" ?>
                    </td>

                    <td>
                        <a href="editctm.php?id=<?php echo $row['ctid']; ?>" id="edit"><i
                                class="bi bi-pencil-square"></i></a>
                    </td>
                    <td>
                        <a href="delctm.php?id=<?php echo $row['ctid']; ?>" id="del"><i class="bi bi-trash3-fill"></i></a>
                    </td>

                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
    </div>
</body>

</html>