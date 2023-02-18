<?php
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$level = htmlspecialchars($_POST['level']);
//hash
$pass_hash = password_hash($password, PASSWORD_DEFAULT);

//cek
if (empty($username) || empty($password)) {
    echo "<script>
            alert('Data tidak boleh kosong');
            window.location.href = 'index.php?page=user';
        </script>";
} else {

    //cek
    $cek = $con->prepare("SELECT * FROM user WHERE username = ?");
    $cek->bindParam(1, $username);
    $cek->execute();

    if ($cek->rowCount() == 0) {

        $sql = "INSERT INTO user (username, password, level) VALUES (?, ?, ?)";
        // prepare    
        $simpan = $con->prepare($sql);
        // bind
        $simpan->bindParam(1, $username);
        $simpan->bindParam(2, $pass_hash);
        $simpan->bindParam(3, $level);
        //execute
        $simpan->execute();

        if ($simpan->rowCount() > 0) {
            # sukses
            echo "<script>
                alert('Data berhasil disimpan');
                window.location.href = 'index.php?page=user';
            </script>";
        } else {
            # error
            echo "<script>
                alert('Data gagal disimpan');
                window.location.href = 'index.php?page=user';
            </script>";
        }
    } else {
        echo "<script>
            alert('Username tersebut sudah ada');
            window.location.href = 'index.php?page=user';
        </script>";
    }
}
