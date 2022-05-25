<?php
include '../db.php';

if (isset($_POST['delete_btn'])) {
    $vechile_id = $_POST['delete_id'];

    $query = "DELETE FROM `vechiles` WHERE `vechile_id`='$vechile_id'";
    $query_run = mysqli_query($con, $query);


    if ($query_run) {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: del.php');
    } else {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        $_SESSION['status_code'] = "error";
        header('Location: del.php');
    }
}
