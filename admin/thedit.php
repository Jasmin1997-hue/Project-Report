<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>add product</title>
    <link rel="stylesheet" href="st1.css" />
</head>

<body>
    <?php
    include 'includes/header.php';
    include '../db.php';
    $vechile_id = null;
    if (isset($_POST['edit_id'])) {
        $vechile_id = $_POST['edit_id'];
    }
    if (isset($_POST["edit_but"])) {
        $m_name = $_POST['m_name'];
        $license = $_POST['license'];
        $phno = $_POST['phno'];
        $email = $_POST['email'];
        $vechileEditId = $_POST['vechileId'];
        //$bus_w__price = $_POST['status'];
        //$p_image = $_FILES["p_image"]["name"];
        // move_uploaded_file($_FILES["p_image"]["tmp_name"], "uploads/" . $_FILES["p_image"]["name"]);
        // $p_image = $_FILES["p_image"]["name"];
        echo ($m_name);
        //move_uploaded_file($_FILES["p_image"]["tmp_name"], "uploads/" . $_FILES["p_image"]["name"]);

        $query = "UPDATE `theater` SET `m_name`='$m_name',`license` = '$license',`phno`='$phno',`email`='$email' WHERE `vechile_id`='$vechileEditId'";
        $result   = mysqli_query($con, $query);

        if ($result) {
            echo ("<script LANGUAGE = 'Javascript'>
            window.alert(' updated successfully');
            window.location.href = 'details.php';
            </script>");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='add.php'>add product</a> again.</p>
                  </div>";
        }
    }
    if (isset($_POST["edit_id"])) {
        $queryingProduct = "SELECT * FROM `theater` WHERE `vechile_id` = '$vechile_id'";
        $vechiles = $con->query($queryingProduct);
        if ($vechiles->num_rows > 0) {
            while ($row = mysqli_fetch_array($vechiles)) {

    ?>
                <div>
                    <div style="margin-left:40%;" class="ts">
                        <form class="form" action="thedit.php" name="ad3" method="post" enctype="multipart/form-data">

                            <h1>EDIT</h1>
                            <label><b>Theater Name</b></label>
                            <input type="text" name="m_name" value="<?php echo $row['m_name']; ?>" oninput="namecheck();" />
                            <span style="color: red;" id="out_name"></span>


                            <label><b>License<b> </label>

                            <input type="file" id="pdf_file" name="p_image" accept="application/pdf" required oninput="licheck();" />
                            <span style="color: red;" id="out_lic"></span>

                            <label><b>Phone Number</b></label>
                            <input type="text" name="phno" value="<?php echo $row['phno']; ?>" required oninput="phcheck();" />
                            <span style="color: red;" id="out_phno"></span>

                            <label><b>Email</b></label>
                            <input type="text" name="email" value="<?php echo $row['email']; ?>" required oninput="emailcheck();" />
                            <span style="color: red;" id="out_email"></span>

                            <input type="hidden" name="vechileId" value="<?php echo $vechile_id; ?>">

                            <input type="submit" name="edit_but" value="Edit" class="registerbtn">
                    </div>
                </div>
                </form>
                </div>
    <?php
            }
        }
    } else {
        header("Location:../details.php");
        die();
    }
    ?>



</body>
<script src="thedit.js" type="text/javascript"></script>

</html>