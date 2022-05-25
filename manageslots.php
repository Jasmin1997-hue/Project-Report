<?php
include 'includes/header.php';
include 'db.php';


if (isset($_POST['addnewslotSubmit'])) {
    $slotname = $_POST['slotname'];
    $insertSLot = "INSERT INTO `slots`( `slot_name`) VALUES ('$slotname')";
    $result = mysqli_query($con, $insertSLot);

    if ($result) {
        header("Location: manageslots.php");
        die();
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
    <!-- <link rel="stylesheet" type="text/css" href="cont.css"> -->

    <title>Manage Slots</title>
</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
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
                </ul>
            </div>
        </div>
    </nav>


    <form class="m-4" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">New slot name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="slotname">
        </div>
        <button type="submit" name="addnewslotSubmit" class="btn btn-primary">Submit</button>
    </form>








    <h4>SLots</h4>



    <table class="table" align="center">

        <thead>
            <tr>
                <th scope="col">Slot Name</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * from `slots`";
            $result = mysqli_query($con, $sql);

            if ($result) {

                while ($row = mysqli_fetch_assoc($result)) {
                    echo ' 
  <td>' . $row["slot_name"] . '</td>';

                    if ($row["isvacant"] == 1) {
                        echo "<td>Vacant</td>";
                    } else {
                        echo "<td>Not Vacant</td>";
                    }
                    echo '
</tr>';
                }
            }
            ?>

</body>

</html>