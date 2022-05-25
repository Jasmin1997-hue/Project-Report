<?php
try{
$db=new mysqli("localhost","root","","theater_db");
}
catch(Exception $exc){
    echo $exc->getTraceAsString();
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg']) ){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];

    $is_insert= $db->query("INSERT INTO `contact`( `name`, `email`, `msg`) VALUES ('$name','$email','$msg')");

if($is_insert==TRUE){
    echo "<h2> ThankYou,your request submitted.</h2>";
    exit();
}

}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="cont.css">
  <link rel="stylesheet" href="foott.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Contact Form Design</title>
</head>
<body class="bg">

<nav>
            <label class="logo">Book Your Slot</label>
        
        <ul>
            <li><a class="active" href="home_page.php">Home</a></li>
            <li><a class="active" href="about.php">About</a></li>
            <li><a class="active" href="admin/reservation.php">Booking</a></li>
            <li><a class="active" href="gallery.php">Gallery</a></li>
            <li><a class="active" href="contact.php">Contact</a></li>
            <li><a class="active" href="logout.php">Logout</a></li>
        </ul>


        
    
</nav>
       


    <div class="contact-title">
<h2>Ready to booking!</h2><br><br>
</div>
<div class="contact-form">
    <form id="contact-form" method="post" action="">
        <input name="name" type="text" class="form-control" placeholder=" Name" required><br><br>
<input name="email" type="email" class="form-control" placeholder="Email" required><br><br>
<textarea name="msg" class="form-control" placeholder="Type Your request" row="4" required></textarea><br>
<input type="submit" class="form-control submit" value="SEND MESSAGE">
</form>
</div>

</body>
</html>