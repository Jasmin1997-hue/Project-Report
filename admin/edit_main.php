<?php include '../db.php' ?>
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php
                    $b_query = "SELECT * from vechiles";
                    $bquery_run = mysqli_query($con, $b_query);
                    if (mysqli_num_rows($bquery_run) > 0) {

                    ?>

                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Theater Name
                                </th>
                                <th>
                                    Two Wheeler Price
                                </th>
                                <th>
                                    Auto Price
                                </th>
                                <th>
                                    Car Price
                                </th>
                                <th>
                                    Bus Price
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>

                                </th>
                            </thead>

                            <?php
                            while ($row = mysqli_fetch_assoc($bquery_run)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['vechile_id'] ?> </td>
                                    <td><?php echo $row['m_name'] ?></td>
                                    <td><?php echo $row['two_w_price'] ?></td>
                                    <td><?php echo $row['auto_w_price'] ?></td>
                                    <td><?php echo $row['car_w_price'] ?></td>
                                    <td><?php echo $row['bus_w_price'] ?></td>
                                    <td><?php echo '<img src="uploads/' . $row['p_image'] . '" alt="Image missing" width="100px;" height="100px;">' ?></td>
                                    <form action="edit_main.php" method="POST>
                                    <td> <button name=" edit-btn" type="submit" data-target="#exampleModalCenter" class="btn btn-success">EDIT</button></td>
                                    </form>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>