<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('massage.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>karyawan
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">

                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" id="email"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                <option>Pria</option>
                                <option>Wanita</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Position</label>
                                <input type="text" name="position" id="position" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Employee Status</label>
                                <select class="form-control" name="status" id="status">
                                <option>Full-Time</option>
                                <option>Part-Time</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_data" class="btn btn-primary">Save Data</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>