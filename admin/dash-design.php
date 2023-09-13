<?php
$email = $_SESSION['admin'];
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

        .dropdown {
            position: relative;
            display: inline-block;
            right: .8px;
        }

        #id:hover {
            position: relative;
            display: block;
        }


        .dropdown a {
            display: block;
            padding: 12px;
            text-decoration: none;
            color: white;
        }

        .dropdown .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 200px;
            z-index: 1;
        }

        .dropdown .dropdown-content a {
            padding: 10px;
            text-decoration: none;
            color: white;
            display: block;
            transition: .4s ease;
        }


        .dropdown .dropdown-content a:hover {
            background-color: white;
            color: #000;
        }

        .dropdown:hover .dropdown-content {
            display: inline;
        }

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

<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-design start -->
        <div class="bg-dark" id="sidebar-wrapper" style="box-shadow: inset 2px 2px 6px gray;">
            <div
                class="sidebar-heading text-center py-4 text-light primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="bi bi-person-fill-gear  me-2 "></i>Admin
            </div>
            <div class="list-group list-group-flush mt-1 my-3">
                <a href="dashboard.php"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-1 second-text fw-bold"><i
                        class="bi bi-speedometer2 me-3"></i>Dashboard</a>
                <a href="session.php"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-1 second-text fw-bold"><i
                        class="bi bi-calendar2-range-fill me-3"></i>Session Management</a>
                <a href="college.php"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-2 second-text fw-bold"><i
                        class="bi bi-building-fill-gear me-3"></i>College Management</a>
                <a href="ctm.php"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-1 second-text fw-bold"><i
                        class="bi bi-building-fill-gear me-3"></i>Complain Type Management</a>
                <div class="dropdown">
                    <a href="#"
                        class="list-group-item list-group-item-action text-light bg-transparent second-text fw-bold">
                        <i class="bi bi-envelope-exclamation-fill me-1"></i><span>Complaint Management</span>
                    </a>
                    <div class="dropdown-content">
                        <a href="#"><i class="bi bi-clipboard-x me-2"></i>Not Processed Yet</a>
                        <a href="#"><i class="bi bi-exclamation-octagon me-2"></i>Pending Complain</a>
                        <a href="#"><i class="bi bi-clipboard-check me-2"></i>Closed Complaint</a>
                    </div>
                </div>
                <a href="#"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-2 second-text fw-bold"><i
                        class="bi bi-person-vcard-fill me-3"></i>User Management</a>
                <a href="#"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-2  second-text fw-bold"><i
                        class="bi bi-journal-bookmark-fill me-3"></i>Discussion Forum</a>
                <a href="admchangepass.php"
                    class="list-group-item list-group-item-action text-light bg-transparent mt-2 second-text fw-bold"><i
                        class="bi bi-gear-wide-connected me-3"></i>Change Password</a>
                <a href="logout.php"
                    class="list-group-item list-group-item-action text-danger bg-transparent mt-2 second-text fw-bold"><i
                        class="bi bi-box-arrow-left text-danger me-3"></i><span class="text-danger">Logout</span></a>
                <hr>
            </div>
        </div>
        <!-- Sidebar-design end -->

        <!-- navbar-design start -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg bg-body-tertiary ml-6" style="box-shadow: 2px 2px 6px #ccc;">
                <div class="container-fluid">
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
                        <div class="dropdown" id="profile">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown ml-6">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="../images/robot.jpeg" alt="Profile Image"
                                            style="border-radius: 50%; height: 40px; width: 40px; box-shadow: 1px 1px 2px #000;">
                                    </a>
                                </li>
                                <div class="dropdown-content" id="id">
                                    <a href="admchangepass.php"><i class="bi bi-gear-wide-connected me-2"></i>Change Password</a>
                                    <a href="logout.php"><i class="bi bi-box-arrow-left text-danger me-2"></i>Logout</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar-design end -->
    </div>
</body>

</html>