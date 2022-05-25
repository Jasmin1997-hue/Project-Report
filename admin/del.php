<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>BOOK YOUR SLOT</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">


        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="admin_dashboard.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">

                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>




            </ul>
        </div>
    </aside>
    <?php
    include 'includes/header.php';
    include '../db.php';
    //include 'header.php';
    ?>
    <div class="container-fluid">
        <div class="col-md-8">
            <div class="card-body">
                <?php
                $query = "SELECT * FROM vechiles";
                $query_run = mysqli_query($con, $query);
                ?>
                <table class="table table-bordered" allign="right" id="dataTable" width="100%" cellspacing="0">

                    <head>
                        <style>
                            body {
                                background-repeat: no-repeat;
                            }

                            table,
                            th,
                            td {

                                margin-left: 300px;
                                border: 0.25px solid black;
                            }

                            table,
                            thead,
                            tr,
                            th {


                                border: 1px solid black;

                            }

                            button {
                                background-color: #7FFF00;
                            }
                        </style>
                    </head>

                    <body>
                        <thead>
                            <tr>

                                <th> Theater Name </th>
                                <th>Two Wheeler Price </th>
                                <th>Auto Price</th>
                                <th>Car Price</th>
                                <th>Bus Price</th>
                                <th>Image</th>
                                <th>EDIT</th>
                                <th>STATUS</th>
                            <tr></tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($query_run) > 0) {
                                while ($row = mysqli_fetch_assoc($query_run)) {
                            ?>
                                    <tr>

                                        <td><?php echo $row['m_name']; ?></td>
                                        <td><?php echo $row['two_w_price']; ?></td>
                                        <td><?php echo $row['auto_w_price']; ?></td>
                                        <td><?php echo $row['car_w_price']; ?></td>
                                        <td><?php echo $row['bus_w_price']; ?></td>
                                        <td>
                                            <img src="uploads/<?php echo $row["p_image"]; ?>" alt="" width="100" height="50">
                                        </td>
                                        <!--<td><?php echo $row['p_description']; ?></td>-->
                                        <td>

                                            <form action="code1.php" method="post">
                                                <input type="hidden" name="edit_id" value="<?php echo $row['vechile_id']; ?>">
                                                <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                            </form>
                                        </td>
                                        <td>
                                            <?php
                                            include "db.php";
                                            $id = $row['vechile_id'];
                                            $sql2 = "select * from vechiles where vechile_id = '$id'";
                                            $res = mysqli_query($con, $sql2);
                                            $row = mysqli_fetch_array($res);
                                            if ($row['status'] == "1")
                                                echo "Active";
                                            else
                                                echo "Inactive";
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($row['status'] == "1")
                                                echo
                                                "<a href=pdeactivate.php?id=" . $row['vechile_id'] . " class=' btn btn-primary ' >Deactivate</a>";
                                            else
                                                echo
                                                "<a href=pactivate.php?id=" . $row['vechile_id'] . " class='btn btn-success'>Activate</a>";
                                            ?>
                                    </tr>
                                    <tr></tr>
                                    </td>
                                    </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "No Record Found";
                            }
                            ?>

                        </tbody>

                </table>
            </div>
        </div>
    </div>

</body>
</div>