<?php
include 'db.php';
$id=$_GET["uid"];
echo $id;
mysqli_query($con,"delete from users where id='$id'");
header("Location:userview.php");
?>