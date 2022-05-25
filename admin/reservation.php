<?php
include '../db.php';
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <style>
        .display {
            margin-top: -35px;
            margin-left: 95%;
            color: white;
            font-style: bold;
        }
    </style>
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
    <link rel="stylesheet" href="./st1.css" />
</head>

<body class="g-sidenav-show  bg-gray-200">
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
                    <a class="nav-link text-white " href="#">
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
    //session_start();
    if ($_SESSION['username']) {
        echo "<p class=display>" . $_SESSION['username'] . "</p>";
    }
    ?>
    <form action="#" class="ts" method="post" name="login">
        <div>
            <h2>BOOKING INFORMATION</h2>

            <h6>THEATRE*</h6>
            <span style="color:red;" id="out_fname"></span>
            <select class="se" name="theatre" class="form-control" oninput="fnamecheck();" required>
                <option value="selected"></option>
                <option value="MAJESTIC">MAJESTIC</option>
                <option value="SN">SN</option>
                <option value="DMC">DMC</option>
                <option value="CHCAGO">CHICAGO</option>
                <option value="REGAL">REGAL</option>
                <option value="CINIPLUS">CINIPLUS</option>
            </select>
            <label>
                <h6>TYPE OF VEHICLE*</h6>
            </label>
            <span style="color:red;" id="out_lname"></span>

            <select class="se" name="troom" class="form-control" oninput="lnamecheck();" required>
                <option value="selected"></option>
                <option value="TWO WHEELER">TWO WHEELER</option>
                <option value="AUTO">AUTO</option>
                <option value="CAR">CAR</option>
                <option value="BUS">BUS</option>
            </select>
            <label>
                <h6>AMOUNT</h6>
            </label>
            <span style="color:red;" id="out_amt"></span>

            <select class="se" name="Amount" class="form-control" oninput="amtcheck();" required>
                <option value="selected"></option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="40">40</option>
                <option value="50">50</option>
            </select>
            </label>



            </select>
            <label>
                <h6>REGISTRATION NUMBER<h6>
            </label>
            <span style="color:red;" id="out_number"></span>

            <input type="text" name="rno" class="se" oninput="numcheck();" required />


            <h6>SLOTS</h6>
            <span style="color:red;" id="out_slot" required></span>

            <?php
            $sql = "SELECT * from `slots`";
            $result = mysqli_query($con, $sql);

            if ($result) {

                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row["isvacant"] == 1) {
                        echo '<label>
                                    <input type="radio" oninput="slotcheck();" name="slot" value="' . $row['slot_id'] . '" >
                                    <div style="padding:15px;background-color:green;">' . $row['slot_name'] . '</div>
                                    </label>';
                    } else {
                        echo "
                                    <label>
                                        <div style='padding:15px;background-color:gray;'>" . $row['slot_name'] . "</div>
                                    </label>";
                    }
                    echo '</tr>';
                }
            }
            ?>
            <br />
            <!--<label>
                <h6>DATE</h6>
            </label>
            <input type="date" name="cout" class="se" class="form-control" />-->

            <label>
                <h6>Date:</h6>
            </label>
            <input type="date" class="se" name="cout" class="form-control" id="checkin" value="<?= isset($_GET['Cout']) ? $_GET['Cout'] : ''; ?>" required class="checkinclass form-control">
        </div>
        <input type="submit" name="submit" class="registerbtn" />
        <!--         <input type="submit" value="Cancel" name="cancel" class="registerbtn" />-->

        <?php

        if (isset($_POST["submit"])) {
            $u_name = $_SESSION['username'];
            echo ($u_name);
            $theatre = $_POST['theatre'];
            echo ($theatre);
            $troom = $_POST['troom'];
            $rno = $_POST['rno'];
            $slot = $_POST['slot'];
            $amount = $_POST['Amount'];
            $cout = $_POST['cout'];
            //echo ($_POST['cout']);
            echo $newUser = "INSERT INTO `roombook`(`username`,`theatre`,`Troom`,`Rno`,`Slot`,`Amount`,`Cout`)
                                         VALUES ( '$u_name','$theatre','$troom','$rno','$slot','$amount','$cout')";
            if (mysqli_query($con, $newUser)) {
                $sqlq = "UPDATE `slots` SET `isvacant`= 0 WHERE slot_id=$slot";
                mysqli_query($con, $sqlq);
                echo "<script type='text/javascript'> alert('Your Booking application has been sent')
                   window.location.href='payment.php';
                    </script>";
            } else {
                echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
            }
        }

        ?>
        </div>
    </form>
</body>
<script src="reservation.js" type="text/javascript"></script>
<script>
    $(function() {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;
        $('#cout').attr('min', maxDate);
        // $('#checkout').attr('min', maxDate);

        <?php
        if (!isset($_GET['Cout'])) { ?>
            $('.checkinclass').val(maxDate);
            $('.checkoutclass').val(maxDate);
        <?php
        } ?>

    });


    $('#Cout').blur(function(e) {
        e.preventDefault();

        var cin = $(this).val();
        var maxDate = cin;
        // $('#checkout').attr('min', maxDate);
        $('.checkoutclass').val(maxDate);
    });
</script>

</html>