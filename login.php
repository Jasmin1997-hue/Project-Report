<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <div>
            <a href="index.php"><img src="images/1.png" alt="#" width="200" height="125" /></a>
        </div>
    </header>

    <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['submit'])) {
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['u_password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query = "SELECT * FROM users WHERE username='$username' AND u_password='$password'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($username == 'admin') {
            $query1 = "SELECT * FROM users WHERE username='$username' AND u_password='$password'";
            $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result1);
            if ($rows == 1) {

                $_SESSION['username'] = $username;
                // redirect to admin dashboard
                header("Location:../admin/admin_dashboard.php");
            }
        } else {
            $query = "SELECT * FROM users WHERE username='$username' AND u_password='$password'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            header("Location:admin/admin_dashboard.php");


            if ($rows == 1) {
                $_SESSION['username'] = $username;
                // Redirect to user dashboard page
                header("Location:admin/user_dashboard.php");
            } else {
                echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
            }
        }
    } else {
    ?>
        <form class="form" method="post" name="login">
            <h1 class="login-title">Login</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required />
            <input type="password" class="login-input" name="u_password" placeholder="Password" required />
            <!--<p class="link> <a href=" registration.php">Forgot Password?</a></p>-->
            <input type="submit" value="Login" name="submit" class="login-button" />
            <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
        </form>
    <?php
    }
    ?>

</body>

</html>