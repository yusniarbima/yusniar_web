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

    $sql = "UPDATE user SET password = :password, level = :level WHERE username = :username";
    // $con->exec($sql)        
    $simpan = $con->prepare($sql);
    // bind
    $simpan->bindParam('username', $username);
    $simpan->bindParam('level', $level);
    $simpan->bindParam('password', $password);
    // execute
    $simpan->execute();

    if ($simpan->rowCount() > 0) {
        # sukses
        echo "<script>
                alert('Data berhasil diubah');
                window.location.href = 'index.php?page=user';
            </script>";
    } else {
        # error
        echo "<script>
                alert('Data gagal diubah');
                window.location.href = 'index.php?page=user';
            </script>";
    }
}
