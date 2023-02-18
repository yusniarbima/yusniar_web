<?php
$nim = htmlspecialchars($_POST['nim']);
$nama = htmlspecialchars($_POST['nama']);
$jurusan = htmlspecialchars($_POST['jurusan']);
$alamat = htmlspecialchars($_POST['alamat']);

//cek
if (empty($nim) || empty($nama) || empty($alamat)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href = 'index.php?page=mahasiswa';
        </script>";
} else {

    //cek
    $cek = $con->prepare("SELECT * FROM mahasiswa WHERE nim = ?");
    $cek->bindParam(1, $nim);
    $cek->execute();

    if ($cek->rowCount() == 0) {
        # nim tidak ada -> simpan
        $sql = "INSERT INTO mahasiswa VALUES (?, ?, ?, ?)";
        // prepare    
        $simpan = $con->prepare($sql);
        // bind
        $simpan->bindParam(1, $nim);
        $simpan->bindParam(2, $nama);
        $simpan->bindParam(3, $jurusan);
        $simpan->bindParam(4, $alamat);
        //execute
        $simpan->execute();

        if ($simpan->rowCount() > 0) {
            # sukses
            echo "<script>
                alert('Data berhasil disimpan');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
        } else {
            # error
            echo "<script>
                alert('Data gagal disimpan');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
        }
    } else {
        echo "<script>
            alert('NIM tersebut sudah ada');
            window.location.href = 'index.php?page=mahasiswa';
        </script>";
    }
}
