<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION SUNRISE </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.html"><i class="fa fa-home"></i> Homepage</a>

                    </li>
                    <li> <a href="#"><i class="fa fa-user"></i> User Profile</a></li>
                </ul>

            </div>-

        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            SLOT BOOKING <small></small>
                        </h1>
                    </div>
                </div>


                <div class="row">
                    <form name="form" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        BOOKING INFORMATION
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>TYPE OF VEHICLE*</label>
                                            <select name="troom" class="form-control" required>
                                                <option value selected></option>
                                                <option value="CAR">CAR</option>
                                                <option value="BIKE">BIKE</option>
                                                <option value="AUTO">AUTO</option>

                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>REGISTRATION NUMBER</label>
                                            <input name="rno" type="text" class="form-control" required>



                                            <div class="form-group">
                                                <label>LICENSE NUMBER*</label>
                                                <input name="licence_no" type="text" class="form-control" required>
                                                </select>
                                            </div>

                                            <div class="panel-body">

                                                <div class="form-group">

                                                    <div>SLOTS</div>
                                                    <?php
                                                    $sql = "SELECT * from `slots`";
                                                    $result = mysqli_query($con, $sql);

                                                    if ($result) {

                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            if ($row["isvacant"] == 1) {
                                                                echo '<label>
                                                            <input type="radio" name="slot" value="' . $row['slot_id'] . '" checked>
                                                            <div style="padding:15px;background-color:green;">' . $row['slot_name'] . '</div>
                                                        </label>';
                                                            } else {
                                                                echo "
                                                            <label>
                                                    <div style='padding:15px;background-color:gray;'>" . $row['slot_name'] . "</div>
                                                </label>";
                                                            }
                                                            echo '
</tr>';
                                                        }
                                                    }
                                                    ?>
                                                </div>

                                                <div class="form-group">
                                                    <label>AMOUNT</label>
                                                    <select name="amount" class="form-control" required>
                                                        <option value selected></option>
                                                        <option value="30">A-30</option>
                                                        <option value="30">B-30</option>
                                                        <option value="30">C-30</option>
                                                        <option value="30">D-30</option>

                                                    </select>
                                                </div>

                                                <!--<div class="form-group">
                                                    <label>NATIONALITY</label>
                                                    <select name="nation" class="form-control" required>
                                                        <option value selected></option>
                                                        <option value="INDIA">INDIA</option>
                                                        <option value="U S A">U S A</option>
                                                        <option value="Germany">GERMANY</option>
                                                        <option value="ITALY">ITALY</option>
                                                        <option value="UAE">U A E</option>

                                                    </select>


                                                    <div class="form-group">
                                                        <label>DISTRICT</label>
                                                        <select name="dis" class="form-control" required>
                                                            <option value selected></option>
                                                            <option value="TVM">TVM</option>
                                                            <option value="KLM">KLM</option>
                                                            <option value="ALPY">ALPY</option>
                                                            <option value="EKM">EKM</option>
                                                            <option value="KNR">KNR</option>

                                                        </select>
                                                    </div>-->

                                                <div class="form-group">
                                                    <label>DATE</label>
                                                    <input name="cout" type="date" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <label>START TIME</label>
                                                    <input name="t1" type="time" class="form-control">

                                                </div>
                                                <div class="form-group">
                                                    <label>END TIME</label>
                                                    <input name="t2" type="time" class="form-control">

                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                    <div class="col-md-12 col-sm-12">
                                        <div class="well">

                                            <input type="submit" name="reg-btn" class="btn btn-primary">
                                            <?php
                                            if (isset($_POST['reg-btn'])) {
                                                $troom = $_POST['troom'];
                                                $rno = $_POST['rno'];
                                                $licence = $_POST['licence_no'];
                                                $slot = $_POST['slot'];
                                                $amount = $_POST['amount'];
                                                $nation = $_POST['nation'];
                                                $dis = $_POST['dis'];
                                                $t1 = $_POST['t1'];
                                                $t2 = $_POST['t2'];
                                                $cout = $_POST['cout'];
                                                $t1 = $_POST['t1'];
                                                $t2 = $_POST['t2'];

                                                $newUser = "INSERT INTO `roombook`(`Troom`,`Rno`,`license_no`,`Slot`,`Amount`,`Nation`,`Dis`,`Cout`,`start_time`,`end_time`)
                                         VALUES ('$troom','$rno','$licence','$slot','$amount','$nation','$dis','$cout','$t1','$t2')";
                                                if (mysqli_query($con, $newUser)) {
                                                    echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                                } else {
                                                    echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                                }
                                            }
                                            ?>
                    </form>

                </div>
            </div>
        </div>


    </div>



    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
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


</body>

</html>