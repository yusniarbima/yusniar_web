<?php
if (isset($_GET['nim'])) {

    $nim = $_GET['nim'];

    //delete
    $delete = $con->query("DELETE FROM mahasiswa WHERE nim = '$nim'");

    if ($delete->rowCount() > 0) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
    }
}
