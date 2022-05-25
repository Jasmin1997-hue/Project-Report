<?php
include 'db.php';

$id=$_GET['uid'];
$sql="Select * from `users` where id=$id";
$result = mysqli_query($con,$sql);
$i=0;
$row=mysqli_fetch_array($result);
$username=$row['username'];
	$email=$row['email'];
	$phone=$row['phone'];
    $address=$row['u_address'];
    $license=$row['license'];
    $country=$row['country'];
    $district=$row['district'];
    

if(isset($_POST["submit"]))
{
	$username=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $address=$_POST['u_address'];
    $license=$_POST['license'];
    $country=$_POST['country'];
    $district=$_POST['district'];
$sql="update `users` set `id`=$id, `username`='$username',`email`='$email',`phone`='$phone',`u_address`='$address',`license`='$license',`country`='$country',`district`='$district' where id=$id";
$result=mysqli_query($con,$sql);
//$sql=mysqli_query($con,"select * from users where id='$id'");
//$row=mysqli_fetch_array($sql); 
//$name=$row['username'];
//$email=$row['email'];
//$phone=$row['phone'];
    if($result){
		header('location:userview.php');
	}else{
		die(mysqli_error($con));
	}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>edit user</title>
	 <link rel="stylesheet" type="text/css" href="cont.css">
	
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body >
      
  
<div class="container">
<form  action="#" method = "post">
  <div class="form-group" align="center" >
    <label>User Name</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name" value=<?php echo $username;?>
    </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" value=<?php echo $email;?>
    </div>
    
	<div class="form-group">
    <label>Phone</label>
    <input type="phone" class="form-control" placeholder="Enter phonenumber" name="phone" value=<?php echo $phone;?>
    </div>
    <div class="form-group">
    <label>Address</label>
    <input type="address" class="form-control" placeholder="Enter Address" name="u_address" value=<?php echo $address;?>
    </div>
    <div class="form-group">
    <label>License No</label>
    <input type="license" class="form-control" placeholder="Enter license number" name="license" value=<?php echo $license;?>
    </div>
    <div class="form-group">
    <label>country</label>
    <input type="text" class="form-control" placeholder="Enter country" name="country" value=<?php echo $country;?>
    </div>
    <div class="form-group">
    <label>District</label>
    <input type="text" class="form-control" placeholder="Enter district" name="district" value=<?php echo $district;?>
    </div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
	
</body>
</html>