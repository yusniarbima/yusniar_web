<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Mahasiswa</h5>
                <h6 class="card-subtitle mb-2 text-muted">Data Mahasiswa</h6>
                <hr>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#form-mahasiswa">
                    <i class="bi-person-plus"></i> Tambah Mahasiswa
                </button>
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = $con->query("SELECT * FROM mahasiswa");
                        while ($row = $sql->fetch()) {
                            echo "<tr>
                                    <td>$row[nim]</td>
                                    <td>$row[nama]</td>
                                    <td>$row[jurusan]</td>
                                    <td>$row[alamat]</td>
                                    <td>
                                        <a href='index.php?page=mahasiswa_edit&nim=$row[nim]' class='btn btn-sm btn-warning'><i class='bi-pencil-square'></i></a>
                                        <a href='index.php?page=mahasiswa_delete&nim=$row[nim]' class='btn btn-sm btn-danger' onclick=\"return confirm('Hapus Data?')\"><i class='bi-trash'></i></a>
                                    </td>
                                </tr>";

                            //delete -> get nim -> delete data where nim
                            //edit -> get nim -> select where nim -> show di form -> update
                        }
                        ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="form-mahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?page=mahasiswa_save" method="POST">
                    <div class="mb-2">
                        <label for="" class="form-label">NIM</label>
                        <input type="text" class="form-control" name="nim" placeholder="Masukan NIM..">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama..">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Jurusan</label>
                        <select name="jurusan" class="form-select">
                            <option>Teknik Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Manajemen Informatika</option>
                            <option>Komputerisasi Akuntansi</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukan Alamat.."></textarea>
                    </div>
                    <hr>
                    <div class="mt-2">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>