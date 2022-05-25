<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="st1.css" />


</head>





<?php
include '../db.php';


if (isset($_POST["submit"])) {

    $m_name = stripslashes($_REQUEST['m_name']);
    $m_name = mysqli_real_escape_string($con, $m_name);
    $two_w_price = stripslashes($_REQUEST['two_w_price']);
    $two_w_price = mysqli_real_escape_string($con, $two_w_price);
    $auto_w_price = stripslashes($_REQUEST['auto_w_price']);
    $auto_w_price = mysqli_real_escape_string($con, $auto_w_price);
    $car_w_price = stripslashes($_REQUEST['car_w_price']);
    $car_w_price = mysqli_real_escape_string($con, $car_w_price);
    $bus_w_price = stripslashes($_REQUEST['bus_w_price']);
    $bus_w_price = mysqli_real_escape_string($con, $bus_w_price);

    $p_image = $_FILES["p_image"]["name"];
    move_uploaded_file($_FILES["p_image"]["tmp_name"], "image/" . $_FILES["p_image"]["name"]);
    $query = "INSERT INTO vechiles(m_name,p_image,two_w_price,auto_w_price,car_w_price,bus_w_price)
        VALUES ('$m_name','$p_image','$two_w_price','$auto_w_price','$car_w_price','$bus_w_price')";
    $result  = mysqli_query($con, $query);
    if ($result) {
        echo '<script>alert("slot added successfully")</script>';
    } else {
        echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>add slot</a> again.</p>
                  </div>";
    }
} else {
?>

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
            <div>
                <div class="ts">
                    <h2>
                        ADD THEATRE
                    </h2>

                    <form class="form" action="" name="ad" method="post" enctype="multipart/form-data">
                        <div class="container">

                            <label><b>Theater Name</b></label>
                            <input type="text" name="m_name" required oninput="tnamecheck();" />
                            <span style="color: red;" id="out_name"></span>
                            <label> <b>Image</b> </label>
                            <input type="file" class="login-input" name="p_image" accept="application" required oninput="imgcheck();" />
                            <span style="color: red;" id="out_image"></span>
                            <ul>

                                <li>
                                    <label><b>Two Wheeler Price </b></label>
                                    <input type="text" name="two_w_price" required oninput="twocheck();" />
                                    <span style="color: red;" id="out_two"></span>
                                </li>
                                <li>
                                    <label><b>Three Wheeler Price</b></label>
                                    <input type="text" name="auto_w_price" required oninput="threecheck();" />
                                    <span style="color: red;" id="out_three"></span>
                                </li>
                                <li>
                                    <label><b>Four Wheeler Price</b></label>
                                    <input type="text" name="car_w_price" required oninput="fourcheck();" />
                                    <span style="color: red;" id="out_four"></span>
                                </li>
                                <li>
                                    <label><b>Heavy Vechile Price</b></label>
                                    <input type="text" name="bus_w_price" required oninput="heavycheck();" />
                                    <span style="color: red;" id="out_heavy"></span>

                                </li>
                            </ul>
                            <input type="submit" name="submit" value="ADD" class="registerbtn">

                        </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </form>

            </div>
            </div>
            <!-- /. WRAPPER  -->
            <!-- JS Scripts-->
            <!-- jQuery Js -->
            <script src="assets/js/jquery-1.10.2.js"></script>
            <!-- Bootstrap Js -->
            <script src="assets/js/bootstrap.min.js"></script>
            <!-- Metis Menu Js -->
            <script src="assets/js/jquery.metisMenu.js"></script>
            <!-- Custom Js -->
            <script src="assets/js/custom-scripts.js"></script>

        <?php
    }
        ?>
    </body>
    <script src="add.js" type="text/javascript"></script>

</html>