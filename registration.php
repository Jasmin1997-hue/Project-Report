<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="../rento/style.css" />
</head>

<body>
    <header>
        <div>
            <a href="index.php"><img src="images/1.png" alt="#" width="200" height="125" /></a>
        </div>
    </header>
    <?php
    require('db.php');

    if (isset($_REQUEST['username'])) {

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($con, $phone);



        //$license = stripslashes($_REQUEST['license']);
        //$license = mysqli_real_escape_string($con, $license);

        // $country = stripslashes($_REQUEST['country']);
        //$country = mysqli_real_escape_string($con, $country);



        $password = stripslashes($_REQUEST['u_password']);
        $password = mysqli_real_escape_string($con, $password);

        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username,  email,phone, u_password ,create_datetime)
                     VALUES ('$username','$email', '$phone','$password', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <form class="form" action="" method="post" name="Registration">
            <br />
            <h1 class="login-title">Registration</h1>
            <input type="text" class="login-input" oninput="usercheck();" name="username" placeholder="Name" required />
            <span style="color:red;" id="out_user"></span>

            <input type="text" class="login-input" oninput="mailcheck();" name="email" placeholder="Email" required>
            <span style="color:red;" id="out_email"></span>

            <input type="text" class="login-input" oninput="mobilecheck();" name="phone" placeholder="Phone" required>
            <span style="color:red;" id="out_phone"></span>

            <input type="password" class="login-input" oninput="passcheck();" name="u_password" placeholder="Password">
            <span style="color:red;" id="out_password"></span>

            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link"><b>Already have an account?</b> <a href="login.php"><b>Login here</b></a></p>
        </form>
    <?php
    }
    ?>
    <script src="validate.js"></script>
</body>

</html>