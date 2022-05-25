<?php
include 'db.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
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

    <title>User View</title>
</head>

<body include '../admin/includes/header.php' ; class="g-sidenav-show  bg-gray-200">

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="" target="_blank">

                <span class="ms-1 font-weight-bold text-white">Admin Dashboard</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="admin_dashboard.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <!--<ul style="list-style:none;">
                    <li class="nav-item">-->
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
                </li>
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
                        </select>
                    </a>
                </li>





            </ul>
        </div>
    </aside>
    <!--<li class="nav-item">
                    <a class="nav-link text-white " href="add.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">ADD</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="del.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">EDIT VIEW</span>
                    </a>
                </li>-->



    </ul>
    </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-right">
                    <a href="../logout.php" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <button type="button" class=" btn btn-primary float-right">Logout</button>
                        <!-- <span class="d-sm-inline d-none float-right">Logout</span> -->
                    </a>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">

        </div>
        <!-- Navbar -->

        <div class="container-fluid">
            <!--<a class="navbar-brand" href="userview.php">Dashboard</a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <!--<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="userview.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manageslots.php">Slots</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">logout</a>
                        </li>-->

            </div>
        </div>
        </nav>


        <table class="table" align="center">

            <thead>
                <tr>

                    <th scope="col">theatre</th>
                    <th scope="col">vehicle type</th>
                    <th scope="col">Amount</th>
                    <th scope="col">reg</th>
                    <th scope="col">license</th>
                    <th scope="col">slot</th>
                    <th scope="col">date</th>
                    <th scope="col">status</th>
                    <th scope="col">action</th>







                </tr>
            </thead>
            <tbody>


                <?php

                $sql = "SELECT * from `roombook`";
                $result = mysqli_query($con, $sql);
                error_reporting(0);

                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>

                            <td><?php echo $row['theatre']; ?></td>
                            <td><?php echo $row['Troom']; ?></td>
                            <td><?php echo $row['Amount']; ?></td>
                            <td><?php echo $row['Rno']; ?></td>
                            <td><?php echo $row['license_no']; ?></td>
                            <td>

                                <?php
                                $slotid = $row['Slot'];
                                $slotsql = "SELECT slot_name from `slots` where slot_id = '$slotid'";
                                $slotresult = mysqli_query($con, $slotsql);
                                $nameofSlot = mysqli_fetch_assoc($slotresult);
                                echo $nameofSlot['slot_name'];

                                ?>

                            </td>
                            <td><?php echo $row['Cout']; ?></td>


                            <td>
                                <?php
                                include "db.php";
                                $id = $row['id'];
                                $sql2 = "select * from roombook where id = '$id'";
                                $res = mysqli_query($con, $sql2);
                                $row = mysqli_fetch_array($res);
                                if ($row['status'] == "1")
                                    echo "APPROVE";
                                else
                                    echo "REJECT";
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($row['status'] == "1")
                                    echo
                                    "<a href=slotdeactivate.php?id=" . $row['id'] . " class=' btn btn-primary ' >Reject</a>";
                                else
                                    echo
                                    "<a href=slotactivate.php?id=" . $row['id'] . " class='btn btn-success'>Approve</a>";
                                ?>
                        </tr>
                        <tr></tr>
                        </td>
                        </td>
                        </tr>
                        <?php
                        ?>

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

</body>
</div>