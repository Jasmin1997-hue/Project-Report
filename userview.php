<?php
include 'db.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="cont.css"> -->

  <title>User View</title>
</head>

<body>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="userview.php">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="userview.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="manageslots.php">Slots</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <table class="table" align="center">

    <thead>
      <tr>
        <th scope="col">Sl No</th>
        <th scope="col">Name</th>
        <th scope="col">EmailAddress</th>
        <th scope="col">Phone</th>

        <th scope="col">License_Number</th>




      </tr>
    </thead>
    <tbody>

      <?php
      $sql = "SELECT * from `users`";
      $result = mysqli_query($con, $sql);

      if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $username = $row['username'];
          $email = $row['email'];
          $phone = $row['phone'];;
          $license = $row['license'];



          echo ' <tr>
	<th scope="row">' . $id . '</th>
	<td>' . $username . '</td>
	<td>' . $email . '</td>
	<td>' . $phone . '</td>
  
  <td>' . $license . '</td>
  
  


</tr>';
        }
      }
      ?>

</body>

</html>