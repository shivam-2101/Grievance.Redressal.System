<?php
session_start();
if ($_SESSION['admin'] == "") {
    session_destroy();
    header("Location:../index.php");
}
//dashboard-design
include("dash-design.php");
include("connection.php");
$query = "select * from user";
$res = mysqli_query($con, $query);
?>
<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            position: relative;
        }

        .container {
            position: absolute;
            bottom: 180px;
            left: 250px;
        }

        table {
            font-family: 'Poppins', sans-serif;
            border-collapse: collapse;
            width: 100px;
            /* max-width: 500px; */
            background-color: #fdfdfd;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-shadow: 0px 0px 10px gray;
        }

        th,
        td {
            padding: 5px 6px 2px 6px;
            text-align: center;
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
            color: red;
        }
    </style>
</head>

<body>

    <body>
        <div class="container">
            <table>
                <tr>
                    <th colspan="1"></th>
                    <th>SNo.</th>
                    <th>NAME</th>
                    <th>F_NAME</th>
                    <th>GENDER</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>MOBILE</th>
                    <th>DOB</th>
                    <th>ADDRESS</th>
                    <th>CITY</th>
                    <th>PINCODE</th>
                    <th>COURSE</th>
                    <th>SESSION</th>
                    <th>COLLEGE</th>
                    <th>STATUS</th>
                    <th>DOR</th>
                </tr>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_array($res)) {
                    ?>
                    <tr>
                        <td>
                            <a href="deluser.php?id=<?php echo $row['uid']; ?>" id="del"><i
                                    class="bi bi-trash3-fill"></i></a>
                        </td>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <strong>
                                <?php echo $row['name']; ?>
                            </strong>
                        </td>
                        <td>
                            <?php echo $row['fname']; ?>
                        </td>
                        <td>
                            <?php echo $row['gender']; ?>
                        </td>
                        <td>
                            <strong>
                                <?php echo $row['email']; ?>
                            </strong>
                        </td>
                        <td>
                            <?php echo "****" ?>
                        </td>
                        <td>
                            <?php echo $row['mobile']; ?>
                        </td>
                        <td>
                            <?php echo $row['dob']; ?>
                        </td>
                        <td>
                            <?php echo $row['address']; ?>
                        </td>
                        <td>
                            <?php echo $row['city']; ?>
                        </td>
                        <td>
                            <?php echo $row['pincode']; ?>
                        </td>
                        <td>
                            <?php echo $row['course']; ?>
                        </td>
                        <td>
                            <?php echo $row['session']; ?>
                        </td>
                        <td>
                            <?php echo $row['college']; ?>
                        </td>
                        <td>
                            <?php echo $row['status']; ?>
                        </td>
                        <td>
                            <?php echo $row['dor']; ?>
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