<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>BOOK YOUR SLOT</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <!--<p><b>BOOK YOUR SLOT</b></p>-->
                                    <a href="index.php"><img src="images/logo (2).jpg" alt="#" width="180" height="85" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-item" href="index.php"> HOME </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu__link scroll" href="#about">ABOUT US</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="menu-link scroll" href="#contact">CONTACT US</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="sign_btn"><a href="login.php">SIGN IN</a></div>
                                    </li>

                                </ul>
                                <!-- <div class="sign_btn"><a href="registration.php">SIGN IN</a></div>-->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-12">
                    <div class="text-bg">
                        <h1>BOOK YOUR SLOT</h1>
                        <strong>24 HOURS SERVICE</strong>
                        <span>Good Service</span>
                        <p>
                            The minimum size of a standard parking space shall be nine feet wide and eighteen feet long.
                            Parking spaces within enclosed garages shall have an interior dimension of at least ten feet wide
                            and twenty feet long.The most common types of parking are angle parking, perpendicular parking and
                            parallel parking.

                            <head></head>
                        </p>
                        <a href="registration.php">SIGN UP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- end banner -->
    <!-- car -->
    <div class="car">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>THEATERS </h2>
                        <span>Available Theaters For Book Your Slot
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                $sql = mysqli_query($con, "SELECT * FROM vechiles");
                while ($row = mysqli_fetch_array($sql)) {
                ?>
                    <div class="col-md-4 padding_leri">
                        <div class="car_box">
                            <h3><?php echo $row['m_name']; ?></h3>
                            <img src="./admin/uploads/<?php echo $row["p_image"]; ?>" width="300" height="300">
                            <h4> TWO-WHEELER : <?php echo $row['two_w_price']; ?>/-</h4>
                            <h4>AUTO : <?php echo $row['auto_w_price']; ?>/-</h4>
                            <h4>CAR : <?php echo $row['car_w_price']; ?>/-</h4>
                            <h4>BUS : <?php echo $row['bus_w_price']; ?>/-</h4>
                        </div>
                        <div class="text-center">
                            <?php
                            $asql = mysqli_query($con, "SELECT * FROM slots");
                            $frow = mysqli_fetch_array($asql);
                            if ($frow['isvacant'] == 1) {
                                echo "<button type='button' class='btn btn-success'>Available</button><br><br>";
                            } else {
                                echo "<button type='button' class='btn btn-danger'>Not Available</button>";
                            }
                            ?>
                            <!--<button type="button" class="btn btn-primary"><a href="reservation.php">Book Now</a></button>-->
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
    </div>
</body>
<!-- end car -->
<!-- bestCar -->
<!--<div class="choose ">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>OUR SERVICES</h2>
               <!-- <span>TWO -WHEELER<br> looking at its layout. The point of using </span>-->
<!-- </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 padding_leri">
            <div class="choose_box">
               <p><b>TWO-WHEELER</b></p>
               <span>20</span>

            </div>
         </div>
         <div class="col-md-4 padding_leri">
            <div class="choose_box">
               <p><b>AUTO</b></p>
               <span>30</span>

            </div>
         </div>
         <div class="col-md-4 padding_leri">
            <div class="choose_box">
               <p><b>CAR</b></p>
               <span>40</span>

            </div>
         </div>
         <div class="col-md-4 padding_leri">
         </div>
         <div class="col-md-4 padding_leri">
            <div class="choose_box">
               <p><b>BUS</b></p>
               <span>60</span>
            </div>
         </div>

      </div>
      <div class="text-center">
        <button type="button" class="btn btn-primary"><a href="reservation.php">Book Now</a></button>
      </div>
   </div>
</div>
<!-- end choose  section -->
<!-- cutomer -->
<div id="about">
    <div class="cutomer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>ABOUT US..</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption ">
                                        <div class="cross_img">
                                            <!--<figure><img src="images/cross_img.jpg" alt="#" /></figure>-->
                                        </div>
                                        <div class="our cross_layout">
                                            <div class="test_box">
                                                <!--<h4>Due markes</h4>-->
                                                <span>.</span>
                                                <p>The minimum size of a standard parking space shall be nine feet wide and
                                                    eighteen
                                                    feet long. Parking spaces within enclosed garages shall have an interior
                                                    dimension of at least ten feet wide and twenty feet long. The minimum size
                                                    of
                                                    a
                                                    compact parking space shall be eight feet wide and sixteen feet long. B.
                                                    The most common types of parking are angle parking, perpendicular parking
                                                    and
                                                    parallel parking. Angle parking is especially widespread in parking lots,
                                                    where
                                                    vehicles are designated to go one way. Perpendicular parking is similar to
                                                    angle
                                                    parking, but requires greater care in turning. </p>

                                                <i><img src="images/te1.png" alt="#" /></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="cross_img">
                              <!--<figure><img src="images/cross_img.png" alt="#" /></figure>-->
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="our cross_layout">
                              <div class="test_box">
                                 <!--<h4>Due markes</h4>-->
<!--<span>.</span>
                                 <p>The minimum size of a standard parking space shall be nine feet wide and
                                    eighteen
                                    feet long. Parking spaces within enclosed garages shall have an interior
                                    dimension of at least ten feet wide and twenty feet long. The minimum size
                                    of a
                                    compact parking space shall be eight feet wide and sixteen feet long. B.
                                    The most common types of parking are angle parking, perpendicular parking
                                    and
                                    parallel parking. Angle parking is especially widespread in parking lots,
                                    where
                                    vehicles are designated to go one way. Perpendicular parking is similar to
                                    angle
                                    parking, but requires greater care in turning. </p>
                                 <i><img src="images/te1.png" alt="#" /></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="cross_img">
                              <!--<figure><img src="images/cross_img.png" alt="#" /></figure>-->
<!--</div>
                           <div class="our cross_layout">
                              <div class="test_box">
                                 <!--<h4>Due markes</h4>-->
<!--<span>.</span>
                                 <p>The minimum size of a standard parking space shall be nine feet wide and
                                    eighteen
                                    feet long. Parking spaces within enclosed garages shall have an interior
                                    dimension of at least ten feet wide and twenty feet long. The minimum size
                                    of a
                                    compact parking space shall be eight feet wide and sixteen feet long. B.
                                    The most common types of parking are angle parking, perpendicular parking
                                    and
                                    parallel parking. Angle parking is especially widespread in parking lots,
                                    where
                                    vehicles are designated to go one way. Perpendicular parking is similar to
                                    angle
                                    parking, but requires greater care in turning. </p>
                                 <i><img src="images/te1.png" alt="#" /></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end cutomer -->
<!--  footer -->
<footer>
    <div id="contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cont_call">
                            <h3> <strong class="multi color_chang"> Call Now</strong><br>
                                (+91) 1234567890
                            </h3>
                        </div>
                        <div class="cont">
                            <h3> <strong class="multi"> EMAIL ID:</strong>
                                bookyourslot@gmail.com
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/">
                                    Book your slot</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>