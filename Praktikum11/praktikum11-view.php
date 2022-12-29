<?php
require 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>employee View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>employee View Details 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $employee_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM praktikum112 WHERE id='$employee_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $praktikum112 = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Student Name</label>
                                        <p class="form-control">
                                            <?=$praktikum112['nama'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Email</label>
                                        <p class="form-control">
                                            <?=$praktikum112['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Address</label>
                                        <p class="form-control">
                                            <?=$praktikum112['address'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Gender</label>
                                        <p class="form-control">
                                            <?=$praktikum112['gender'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Position</label>
                                        <p class="form-control">
                                            <?=$praktikum112['position'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Status</label>
                                        <p class="form-control">
                                            <?=$praktikum112['status'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>