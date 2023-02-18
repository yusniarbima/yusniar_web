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

    $sql = "UPDATE mahasiswa SET nama = :nama, jurusan = :jurusan, alamat = :alamat WHERE nim = :nim";
    // $con->exec($sql)        
    $simpan = $con->prepare($sql);
    // bind
    $simpan->bindParam('nama', $nama);
    $simpan->bindParam('jurusan', $jurusan);
    $simpan->bindParam('alamat', $alamat);
    $simpan->bindParam('nim', $nim);
    // execute
    $simpan->execute();

    if ($simpan->rowCount() > 0) {
        # sukses
        echo "<script>
                alert('Data berhasil diubah');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
    } else {
        # error
        echo "<script>
                alert('Data gagal diubah');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
    }
}
