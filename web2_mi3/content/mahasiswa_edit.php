<?php if (isset($_GET['nim'])) : ?>
    <?php
    $nim = $_GET['nim'];
    $sql = $con->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");
    $data = $sql->fetch();
    ?>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Mahasiswa</h5>
                    <hr>
                    <form action="index.php?page=mahasiswa_update" method="POST">
                        <div class="mb-2">
                            <label for="" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim" value="<?= $data['nim'] ?>" placeholder="Masukan NIM.." readonly>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" placeholder="Masukan Nama..">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Jurusan</label>
                            <select name="jurusan" class="form-select">
                                <option <?= ($data['jurusan'] == "Teknik Informatika" ? "selected" : "") ?>>Teknik Informatika</option>
                                <option <?= ($data['jurusan'] == "Sistem Informasi" ? "selected" : "") ?>>Sistem Informasi</option>
                                <option <?= ($data['jurusan'] == "Manajemen Informatika" ? "selected" : "") ?>>Manajemen Informatika</option>
                                <option <?= ($data['jurusan'] == "Komputerisasi Akuntansi" ? "selected" : "") ?>>Komputerisasi Akuntansi</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Masukan Alamat.."><?= $data['alamat'] ?></textarea>
                        </div>
                        <div class="mt-2">
                            <a href="index.php?page=mahasiswa" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>