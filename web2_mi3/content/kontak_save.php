<?php
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$pesan = htmlspecialchars($_POST['pesan']);

//cek
if (empty($nama) || empty($email) || empty($pesan)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href = 'index.php?page=kontak';
        </script>";
} else {

    //cek
    $cek = $con->prepare("SELECT * FROM kontak WHERE nama = ?");
    $cek->bindParam(1, $nama);
    $cek->execute();

    if ($cek->rowCount() == 0) {
        # nim tidak ada -> simpan
        $sql = "INSERT INTO kontak VALUES (?, ?, ?)";
        // prepare    
        $simpan = $con->prepare($sql);
        // bind
        $simpan->bindParam(1, $nama);
        $simpan->bindParam(2, $email);
        $simpan->bindParam(3, $pesan);
        //execute
        $simpan->execute();

        if ($simpan->rowCount() > 0) {
            # sukses
            echo "<script>
                alert('Data berhasil disimpan');
                window.location.href = 'index.php?page=kontak';
            </script>";
        } else {
            # error
            echo "<script>
                alert('Data gagal disimpan');
                window.location.href = 'index.php?page=kontak';
            </script>";
        }
    } else {
        echo "<script>
            alert('');
            window.location.href = 'index.php?page=kontak';
        </script>";
    }
}