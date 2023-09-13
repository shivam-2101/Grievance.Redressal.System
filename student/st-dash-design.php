<?php
session_start();
$email = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;500;600;700;800;900&family=Sacramento&display=swap');

        #name {
            margin-left: 310px;
            padding: 5px;
            font-family: 'Pacifico', cursive;
            font-size: 2rem;
            letter-spacing: 2px;
        }
        #date{
            padding: 5px;
            font-family: 'Pacifico', cursive;
            font-size: 1.5rem;
            letter-spacing: 2px;
        }
    </style>
</head>

<body class="bg-dark">

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-design start -->
        <div class="bg-dark" id="sidebar-wrapper" style="box-shadow:inset 2px 3px 10px aqua;">
            <div
                class="sidebar-heading text-center py-4 text-light primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="bi bi-person-badge  me-2 "></i>Student
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="stdashboard.php"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-3 second-text fw-bold"><i
                        class="bi bi-speedometer2 me-3"></i>Dashboard</a>
                <a href="#"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-3 second-text fw-bold"><i
                        class="bi bi-text-wrap me-3"></i>Update Profile</a>
                <a href="addcomplain.php"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-3 second-text fw-bold"><i
                        class="bi bi-journal-plus me-3"></i>Add Complain</a>
                <a href="#"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-3 second-text fw-bold"><i
                        class="bi bi-clipboard-x me-3"></i>Closed Complain</a>
                <a href="#"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-3  second-text fw-bold"><i
                        class="bi bi-journal-bookmark-fill me-3"></i>My Complains</a>
                <a href="#"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-3 second-text fw-bold"><i
                        class="bi bi-discord me-3"></i>Discussion Board</a>
                <a href="stchangepass.php"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-3 second-text fw-bold"><i
                        class="bi bi-gear-wide-connected me-3"></i>Change Password</a>
                <a href="stlogout.php"
                    class="list-group-item list-group-item-action text-danger bg-transparent mt-3 second-text fw-bold"><i
                        class="bi bi-box-arrow-left text-danger me-3"></i><span class="text-danger">Logout</span></a>
                <hr>
            </div>
        </div>
        <!-- Sidebar-design end -->

        <!-- navbar-design start -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg bg-dark ml-6" style="box-shadow: 1px 1px 6px aqua;">
                <div class="container-fluid text-light">
                    <h5 id="date"><i class="bi bi-calendar2-event"></i>
                        <?php
                        echo date("d-m-y");
                        ?>
                    </h5>
                    <h5 id="name"><i class="bi bi-person-circle"></i>
                        <?php
                        echo $email;

                        ?>
                    </h5>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item me-3">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="../images/profile2.jpeg" alt="Profile Image"
                                        style="border-radius: 50%; height: 40px; width: 40px; box-shadow: 1px 1px 4px aqua">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar-design end -->
    </div>
</body>

</html>