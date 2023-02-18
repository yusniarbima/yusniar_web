<?php
//PDO
try {
    $con = new PDO('mysql:host=localhost;dbname=web2_mi3-2', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi Gagal : " . $e->getMessage() . "<br>";
    die();
}
