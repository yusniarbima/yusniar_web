<?php
require_once 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- css -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Login</h5>
                        <form action="ceklogin.php" method="POST">
                            <div class="mb-2">
                                <label for="" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Masukan Username.." required autocomplete="off">
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukan Password..">
                            </div>
                            <div class="mt-2 d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>