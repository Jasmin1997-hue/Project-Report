<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>add product</title>
    <link rel="stylesheet" href="st1.css" />
</head>

<body>
    <?php
    include '../db.php';
    session_start();
    include 'includes/header.php';

    if (isset($_POST["edit_id"])) {
        $_SESSION['vechile_id'] = $_POST["edit_id"];
        //$vechile_id = $_POST["edit_id"];
    }
    $vechile_id = $_SESSION['vechile_id'];
    if (isset($_POST["edit_but"])) {
        $m_name = $_POST['m_name'];
        $two_w__price = $_POST['two_w_price'];
        $auto_w__price = $_POST['auto_w_price'];
        $car_w__price = $_POST['car_w_price'];
        $bus_w__price = $_POST['bus_w_price'];
        $p_image = $_FILES["p_image"]["name"];
        echo ($m_name);
        move_uploaded_file($_FILES["p_image"]["tmp_name"], "uploads/" . $_FILES["p_image"]["name"]);


        $query = "UPDATE `vechiles` SET `m_name`='$m_name',`p_image`='$p_image',`two_w_price`='$two_w__price',`auto_w_price`='$auto_w__price',`car_w_price`='$car_w__price',`bus_w_price`='$bus_w__price' WHERE `vechile_id`='$vechile_id'";
        $result   = mysqli_query($con, $query);
        echo $query;
        if ($result) {
            echo ("<script LANGUAGE = 'Javascript'>
            window.alert(' updated successfully');
            window.location.href = 'del.php';
            </script>");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='add.php'>add product</a> again.</p>
                  </div>";
        }
    }
    if (isset($_POST["edit_id"])) {
        $queryingProduct = "SELECT * FROM `vechiles` WHERE `vechile_id` = '$vechile_id'";
        $vechiles = $con->query($queryingProduct);
        if ($vechiles->num_rows > 0) {
            while ($row = mysqli_fetch_array($vechiles)) {
    ?>

                <div>
                    <div style="margin-left:40%;" class="ts">
                        <form class="form" name="ad1" action="code1.php" method="post" enctype="multipart/form-data">

                            <h1>EDIT</h1>
                            <label><b>Theater Name</b></label>
                            <input type="text" name="m_name" oninput="tnamecheck();" value="<?php echo $row['m_name']; ?>" />
                            <span style="color: red;" id="out_name"></span>

                            <img src="uploads/<?php echo $row['p_image']; ?> " alt="Theater Image" />
                            <input type="file" name="p_image" oninput="imgcheck();" />
                            <span style=" color: red;" id="out_image"></span>

                            <label><b>Two Wheeler Price</b></label>
                            <input type="text" name="two_w_price" value="<?php echo $row['two_w_price']; ?>" required oninput="twocheck();" />
                            <span style="color: red;" id="out_two"></span>

                            <label><b>Auto Price</b></label>
                            <input type="text" name="auto_w_price" value="<?php echo $row['auto_w_price']; ?>" required oninput="threecheck();" />
                            <span style="color: red;" id="out_three"></span>

                            <label><b>Car Price</b></label>
                            <input type="text" name="car_w_price" value="<?php echo $row['car_w_price']; ?>" required oninput="fourcheck();" />
                            <span style="color: red;" id="out_four"></span>

                            <label><b>Bus Price</b></label>
                            <input type="text" name="bus_w_price" value="<?php echo $row['bus_w_price']; ?>" required oninput="heavycheck();" />
                            <span style="color: red;" id="out_heavy"></span>

                            <input type="submit" name="edit_but" value="Edit" class="registerbtn">
                    </div>
                </div>
                </form>
    <?php
            }
        }
    } else {
        header("Location: ./code1.php");
        die();
    }
    ?>



</body>

<script src="code1.js" type="text/javascript"></script>

</html>