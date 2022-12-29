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
                                <form action="code.php" method="post">

                                    <input type="hidden" name="student_id" value="<?= $praktikum112['id']; ?>">

                                    <div class="mb-3">
                                        <label>Employee Name</label>
                                        <input type="text" name="nama" value="<?=$praktikum112['nama'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Email</label>
                                        <input type="email" name="email" value="<?=$praktikum112['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Address</label>
                                        <input type="text" name="address" value="<?=$praktikum112['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Gender</label>
                                        <select class="form-control" name="gender" id="gender"  value="<?=$praktikum112['gender'];?>">
                                        <option>Pria</option>
                                        <option>Wanita</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Position</label>
                                        <input type="text" name="position" value="<?=$praktikum112['position'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Status</label>
                                        <select class="form-control" name="status" id="status" value="<?=$praktikum112['status'];?>">
                                        <option>Full-Time</option>
                                        <option>Part-Time</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_employee" class="btn btn-primary">
                                            Update Employee
                                        </button>
                                    </div>

                                </form>
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