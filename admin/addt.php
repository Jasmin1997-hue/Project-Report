<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>add slot</title>
    <link rel="stylesheet" href="st1.css" />

</head>

<body>
    <?php
    include 'includes/header.php';
    include('../db.php');
    if (isset($_POST["submit"])) {

        $m_name = stripslashes($_REQUEST['m_name']);
        $m_name = mysqli_real_escape_string($con, $m_name);
        $phno = stripslashes($_REQUEST['phno']);
        $phno = mysqli_real_escape_string($con, $phno);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $allowedExts = array("pdf");
        $temp = explode(".", $_FILES["pdf_file"]["name"]);
        $extension = end($temp);
        $upload_pdf = $_FILES["pdf_file"]["name"];
        move_uploaded_file($_FILES["pdf_file"]["tmp_name"], "uploads/" . $_FILES["pdf_file"]["name"]);
        $query = "INSERT INTO `theater`(`m_name`,`license`,`phno`,`email`)
        VALUES ('$m_name','$upload_pdf','$phno','$email')";
        $result  = mysqli_query($con, $query);
        if ($result) {
            echo '<script>alert("Theatre added successfully")</script>';
        } else {
            echo "<div class='form'>

                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>add slot</a> again.</p>
                  </div>";
        }
    } else {
    ?>
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
        <br />
        <div style="margin-left:50%;" class="ts">
            <div>
                <h2>
                    ADD THEATRE PROFILE
                </h2>

                <form class="form" name="ad2" action="" method="post" enctype="multipart/form-data">
                    <div class="container">
                        <label><b>Theater Name</b></label>

                        <input type="text" name="m_name" required oninput="tnamecheck();" /><br>
                        <span style="color: red;" id="out_name"></span>

                        <label> <b>Lisence pdf</b> </label>
                        <input type="file" id="pdf_file" name="pdf_file" accept="application/pdf" required oninput="imgcheck();" />
                        <span style="color: red;" id="out_image"></span>

                        <label><b>Phone Number</b></label>
                        <input type="text" name="phno" required oninput="twocheck();" autocomplete="off" />
                        <span style="color: red;" id="out_two"></span>

                        <label><b>Email</b></label>
                        <input type="text" name="email" required oninput="threecheck();" />
                        <span style="color: red;" id="out_three"></span>

                        <input type="submit" name="submit" value="ADD" class="registerbtn">
                    </div>
                </form>
            </div>
        </div>
    <?php
    }
    ?>


</body>

<script src="addt.js" type="text/javascript"></script>

</html>