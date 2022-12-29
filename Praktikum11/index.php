<?php
    session_start();
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

    <title>Praktikum11</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('massage.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Empolyee Details
                            <a href="karyawan.php" class="btn btn-primary float-end">Add Employee</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Employee Name</th>
                                    <th>Email</th>
                                    <th>Addres</th>
                                    <th>Gender</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM praktikum112";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $praktikum112)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $praktikum112['id']; ?></td>
                                                <td><?= $praktikum112['nama']; ?></td>
                                                <td><?= $praktikum112['email']; ?></td>
                                                <td><?= $praktikum112['address']; ?></td>
                                                <td><?= $praktikum112['gender']; ?></td>
                                                <td><?= $praktikum112['position']; ?></td>
                                                <td><?= $praktikum112['status']; ?></td>
                                                <td>
                                                    <a href="praktikum11-view.php?id=<?= $praktikum112['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="praktikum11-edit.php?id=<?= $praktikum112['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_praktikum112" value="<?=$praktikum112['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>