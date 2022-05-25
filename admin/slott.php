<?php
include '../db.php';
include 'includes/header.php';
?>

<div class="table-responsive">
    <?php
    $query = "SELECT * FROM slots";
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

                <table class="table table-bordered"id="dataTable"width="100%"cellspacing="0"><head><style>table,
                th,
                td {
                    border: 1px solid black;
                }

                button {
                    background-color: #7FFF00;
                }
            </style>
        </head>
        <thead>
            <tr>


                <th>Slot</th>

            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                    <tr>

                        </td>
                        <td><?php echo $row['slot_name']; ?></td>

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