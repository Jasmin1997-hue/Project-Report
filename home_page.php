<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="img.css">
  <link rel="stylesheet" href="cont.css">
  <link rel="stylesheet" href="foott.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>main page</title>
</head>
<body>

<nav>
            <label class="logo">Book your Slot</label>
        
        <ul>
            <li><a href="home_page.php">Home</a></li>
            <li><a class="active"href="about.php">About</a></li>
            <li><a class="active" href="book/reservation.php">Booking</a></li>
            <li><a class="active" href="gallery.php">Gallery</a></li>
            <li><a class="active" href="contact.php">Contact</a></li>
            <li><a class="active" href="logout.php">Logout</a></li>
        </ul>

</nav>



  <div class="slider">
    <div class="load">
</div>
<div class="content">
  <div class="principal">
    <h1>WELCOME</h1>
    <p></p>
</div>
</div>
</div>
<br>
<div class="w3-row w3-padding-64" id ="about">
        <div class="w3-col m6 w3-padding-large w3-hide-small">
            <img src="img/slot1.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
</div>
<div class="w3-col m6 w3-padding-large">
    <h1 class="w3-center"> About Booking</h1><br>
    <p class="w3-center">"The minimum size of a standard parking space shall be nine feet wide and eighteen feet long. Parking spaces within enclosed garages shall have an interior dimension of at least ten feet wide and twenty feet long. The minimum size of a compact parking space shall be eight feet wide and sixteen feet long. B."</p>
    <p class="w3-large w3-text-grey w3-hide-medium">"The most common types of parking are angle parking, perpendicular parking and parallel parking. Angle parking is especially widespread in parking lots, where vehicles are designated to go one way. Perpendicular parking is similar to angle parking, but requires greater care in turning."</p>
</div>
</div>  

<div class="contact-title">
<h2>Ready to Booking</h2>
</div>
<div class="contact-form">
    <form id="contact-form" method="post" action="">
        <input name="name" type="text" class="form-control" placeholder=" Name" required><br><br>
<input name="email" type="email" class="form-control" placeholder="Email" required><br><br>
<textarea name="msg" class="form-control" placeholder="Type Your request" row="4" required></textarea><br>
<input type="submit" class="form-control submit" value="SEND MESSAGE">
</form>
</body>
</html>

<section class="footer">

<ul class="list">
  <li>
    <a href="home.php">Home</a>
</li>
<li>
    <a href="about.php">About</a>
</li>
<li>
    <a href="contact.php">Contact</a>
</li>
<li>
    <a href="gallery.php">Gallery</a>
</li>
</ul>
<p class="copyright">
  Future Coders @ 2021
</p>
</body>
</html>

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

    $is_insert= $db->query("INSERT INTO `payment`( `name`, `email`, `msg`) VALUES ('$name','$email','$msg')");

if($is_insert==TRUE){

    echo "<h2> ThankYou,your request submitted.</h2>";
    exit();
}

}
?>
