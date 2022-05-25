<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<head>
    <!-- basic -->
    include 'includes/header.php';
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
    //include 'includes/header.php';
    include '../db.php';
    //include 'header.php';
    ?>
    <!--<div class="main-panel">-->

    <?php include 'db.php' ?>


    <div class="container-fluid">

        <div class="col-md-8">

            <div class="card-body">
                <div class="table-responsive">
                    <?php
                    $b_query = "SELECT * from user_details JOIN qualification ON user_details.q_id=qualification.q_id  JOIN cources ON user_details.course_id=cources.course_id";
                    $bquery_run = mysqli_query($con, $b_query);
                    if (mysqli_num_rows($bquery_run) > 0) {
                    ?>
                        <div class="cusmargin">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Qualification
                                    </th>
                                    <th>
                                        CGPA
                                    </th>
                                    <th>
                                        SSLC Grade
                                    </th>
                                    <th>
                                        PlusTwo Grade
                                    </th>
                                    <th>
                                        Additonal Skills
                                    </th>
                                    <th>
                                        Remove
                                    </th>
                                    <th>
                                        View Details
                                    </th>
                                    <!-- <th>
                                                Candidate's Resume
                                            </th>-->
                                </thead>
                                <tbody id="response">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($bquery_run)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['f_name'] . " " . $row['l_name'] ?></td>
                                            <td><?php echo $row['course_name'] ?></td>
                                            <td><?php echo $row['u_cgpa'] ?></td>
                                            <td><?php echo $row['u_sslc_grade'] ?></td>
                                            <td><?php echo $row['u_plustwo_grade'] ?></td>
                                            <td><?php echo $row['u_skills'] ?></td>

                                            <!--<td><?php //echo '<embed width="100" height="100" type="application/pdf" src="upload/'.$row['u_resume'].;
                                                    ?></td>-->
                                            <!--<td><?php //echo'<iframe src="upload/'.$row['u_resume'].'" width="100px;" height="100px;"></iframe>'
                                                    ?></td>-->
                                            <!-- <td><?php //echo'<a href="upload/"> <img src="assets/img/pdf.png"'.$row['u_resume'].'" width="60px;" height="50px;"></a>'
                                                        ?></td>-->
                                            <form action="view.php" method="POST">
                                                <input type="hidden" name="view_data" value="<?php echo $row['reg_id'] ?>">
                                                <td><button name="view-btn" type="submit" data-target="#exampleModalCenter" class="btn btn-success"><i class="far fa-eye"></i></button></td>
                                            </form>
                                            <form action="delete_data.php" method="POST">
                                                <input type="hidden" name="delete_id" value="<?php echo $row['reg_id'] ?>">
                                                <td><button name="delete-button" type="submit" data-target="#exampleModalCenter" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                                            </form>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>