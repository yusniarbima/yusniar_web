<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User</h5>
                <h6 class="card-subtitle mb-2 text-muted">Data User</h6>
                <hr>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#form-mahasiswa">
                    <i class="bi-person-plus"></i> Tambah User
                </button>
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = $con->query("SELECT * FROM user");
                        while ($row = $sql->fetch()) {
                            echo "<tr>
                                    <td>$no</td>
                                    <td>$row[username]</td>
                                    <td>$row[level]</td>
                                    <td>
                                        <a href='index.php?page=user_edit&id=$row[id]' class='btn btn-sm btn-warning'><i class='bi-pencil-square'></i></a>
                                        <a href='index.php?page=user_delete&id=$row[id]' class='btn btn-sm btn-danger' onclick=\"return confirm('Hapus Data?')\"><i class='bi-trash'></i></a>
                                    </td>
                                </tr>";

                            $no++;

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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?page=user_save" method="POST">
                    <div class="mb-2">
                        <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukan Username..">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Masukan Password..">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Level</label>
                        <select name="level" class="form-select">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
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