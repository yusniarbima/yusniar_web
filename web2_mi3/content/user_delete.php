<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    //delete
    $delete = $con->query("DELETE FROM user WHERE id = '$id'");

    if ($delete->rowCount() > 0) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location.href = 'index.php?page=user';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus');
                window.location.href = 'index.php?page=user';
            </script>";
    }
}