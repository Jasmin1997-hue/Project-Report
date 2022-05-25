<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/img/favicon.png">
        <title>
                User Dashboard
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
</head>


<body>
        <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
                <div class="sidenav-header">
                        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                        <a class="navbar-brand m-0" href="" target="_blank">

                                <span class="ms-1 font-weight-bold text-white">User Dashboard</span>
                        </a>
                </div>
                <hr class="horizontal light mt-0 mb-2">
                <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
                        <ul class="navbar-nav">
                                <li class="nav-item">
                                        <a class="nav-link text-white active bg-gradient-primary" href="user_dashboard.php">
                                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                                        <i class="material-icons opacity-10">dashboard</i>
                                                </div>
                                                <span class="nav-link-text ms-1">Dashboard</span>
                                        </a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link text-white " href="#">
                                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                                        <i class="material-icons opacity-10">receipt_long</i>
                                                </div>
                                                <span class="nav-link-text ms-1">SLOT</span>
                                                <select name="forma" onchange="location = this.value;">
                                                        <option value="" disabled selected> </option>
                                                        <option value="./reservation.php">BOOK</option>
                                                        <option value="./profile.php">PROFILE</option>

                                                        <!--<option value="del.php">STATUS</option>-->
                                                </select>
                                        </a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link text-white " href="theatre.php">
                                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                                        <i class="material-icons opacity-10">receipt_long</i>
                                                </div>
                                                <span class="nav-link-text ms-1">THEATRES </span>
                                                <select name="forma" onchange="location = this.value;">
                                                        <option value="" disabled selected> </option>
                                                        <option value="./theatre.php">DETAILS</option>
                                                </select>
                                        </a>
                                </li>
                        </ul>
                </div>
        </aside>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
                <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
                        <div class="container-fluid py-1 px-3">
                                <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                                                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                                                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                                        </ol>
                                        <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                                </nav>
                                <ul class="navbar-nav  justify-content-end">
                                        <li class="nav-item d-flex align-items-center">
                                                <a href="../logout.php">
                                                        <button type="button" class=" btn btn-primary float-left">Logout</button>
                                                </a>
                                        </li>
                                </ul>
                        </div>
                </nav>
        </main>
        <?php
        include '../db.php';
        //include 'header.php';
        ?>
        <form>
                <div class="container-fluid">
                        <div class="col-md-8">
                                <div class="card-body">
                                        <?php
                                        $query = "SELECT * FROM vechiles";
                                        $query_run = mysqli_query($con, $query);
                                        ?>
                                        <table class="table table-bordered" allign="right" id="dataTable" width="100%" cellspacing="0">

                                                <head>
                                                        <style>
                                                                table,
                                                                thead,
                                                                td,
                                                                tr,
                                                                th {

                                                                        margin-left: 300px;
                                                                        border: 2px solid black;
                                                                }

                                                                button {
                                                                        background-color: #7FFF00;
                                                                }
                                                        </style>
                                                </head>

                                                <body>
                                                        <thead>
                                                                <tr>
                                                                        <th> Theater Name </th>
                                                                        <th>Two Wheeler Price </th>
                                                                        <th>Auto Price</th>
                                                                        <th>Car Price</th>
                                                                        <th>Bus Price</th>
                                                                        <th>Image</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php
                                                                if (mysqli_num_rows($query_run) > 0) {
                                                                        while ($row = mysqli_fetch_assoc($query_run)) {
                                                                ?>
                                                                                <tr>

                                                                                        <td><?php echo $row['m_name']; ?></td>
                                                                                        <td><?php echo $row['two_w_price']; ?></td>
                                                                                        <td><?php echo $row['auto_w_price']; ?></td>
                                                                                        <td><?php echo $row['car_w_price']; ?></td>
                                                                                        <td><?php echo $row['bus_w_price']; ?></td>
                                                                                        <td>
                                                                                                <img src="uploads/<?php echo $row["p_image"]; ?>" alt="" width="100" height="50">
                                                                                        </td>
                                                                                        <!--<td><?php echo $row['p_description']; ?></td>-->



                                                                                <tr></tr>
                                                                                </tr>
                                                                <?php
                                                                        }
                                                                } else {
                                                                        echo "No Record Found";
                                                                }
                                                                ?>

                                                        </tbody>

                                        </table>
                                </div>
                        </div>
                </div>
        </form>
</body>
</div>