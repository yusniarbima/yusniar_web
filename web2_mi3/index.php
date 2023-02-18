<?php
session_start();
require_once 'config/koneksi.php';

if (empty($_SESSION['mi3_username'])) {
    echo "<script>
            window.location.href = 'login.php';
        </script>";
} else {

    $user = $_SESSION['mi3_username'];
    $level = $_SESSION['mi3_level'];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container">
                            <a class="navbar-brand" href="index.php"><i class="bi-braces"></i> web2<strong>mi3</strong></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <?php if ($level == "Admin") : ?>
                                        <a class="nav-link" href="index.php">Home</a>
                                        <a class="nav-link" href="index.php?page=profil">Profil</a>
                                        <a class="nav-link" href="index.php?page=galeri">Galeri</a>
                                        <a class="nav-link" href="index.php?page=mahasiswa">Mahasiswa</a>
                                        <a class="nav-link" href="index.php?page=user">User</a>
                                        <a class="nav-link" href="index.php?page=kontak">Kontak</a>
                                    <?php else : ?>
                                        <a class="nav-link" href="index.php">Home</a>
                                        <a class="nav-link" href="index.php?page=profil">Profil</a>
                                        <a class="nav-link" href="index.php?page=galeri">Galeri</a>
                                        <a class="nav-link" href="index.php?page=kontak">Kontak</a>
                                    <?php endif;  ?>
                                </div>
                            </div>
                            <div class="d-flex" role="search">
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi-person"></i> <?= $user ?>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="index.php?page=profil">Profil Saya</a></li>
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <!-- start konten -->
            <?php
            $dir = "content";
            $page = @$_GET['page'];

            if (empty($page)) {
                include 'content/home.php';
            } else {
                include "content/$page.php";
            }
            ?>
            <!-- end konten -->
        </div>

        <!-- js -->
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php } ?>