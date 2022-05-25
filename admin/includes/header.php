<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Admin Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <style>
        ul {
            list-style: none;
            padding-left: 0;
        }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="" target="_blank">

                <span class="ms-1 font-weight-bold text-white">Admin Dashboard</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav" style="list-style:none;">
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="admin_dashboard.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>


                <li class="nav-item">
                    <!--   <a class="nav-link text-white " href="slot.php">-->
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <!--   <i class="material-icons opacity-10">receipt_long</i>-->
                    </div>


                    <!-- <form action="#" method="POST" id="theForm">
                            <select name="portfolio" id="portfolio">-->
                    <ul style="list-style:none;">
                        <li class="nav-item">
                            <a class="nav-link text-white " href="#">
                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons opacity-10">receipt_long</i>
                                </div>
                                <span class="nav-link-text ms-1">THEATER</span>
                                <select name="forma" onchange="location = this.value;">
                                    <option value="" disabled selected> </option>
                                    <option value="add.php">Add</option>
                                    <option value="del.php">Edit</option>
                                </select>
                            </a>
                        </li>






                        <!-- </form>-->
                        </span>


                        </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="#">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">THEATRE PROFILE</span>
                        <select name="forma" onchange="location = this.value;">
                            <option value="" disabled selected> </option>
                            <option value="addt.php">Add</option>
                            <option value="details.php">Edit</option>
                        </select>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="#">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">SLOTS</span>
                        <select name="forma" onchange="location = this.value;">
                            <option value="" disabled selected> </option>
                            <option value="manageslots.php">Add</option>
                            <option value="slotedit.php">Edit</option>
                        </select>
                    </a>
                <li class="nav-item">
                    <a class="nav-link text-white " href="#">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">USER</span>
                        <select name="forma" onchange="location = this.value;">
                            <option value="" disabled selected> </option>
                            <option value="request.php">Request</option>
                            <option value="userview.php">View</option>

                            </option>
                        </select>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="slot.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">REPORTS</span>
                    </a>
                </li>



            </ul>
        </div>
    </aside>