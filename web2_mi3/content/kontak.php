<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kontak</h5>
                <hr>
                <div class="modal-body">
                    <form action="index.php?page=kontak_save" method="POST">
                        <div class="mb-2">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama..">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Masukan Email..">
                        </div>
                            <label for="" class="form-label">Pesan</label>
                            <input type="text" class="form-control" name="pesan" placeholder="Masukan Pesan..">
                        </div>
                        <div class="mt-2">
                        <button type="submit" class="btn btn-dark mb-2" data-bs-toggle="modal" name="cetak">
                            <i class="bi bi-send-fill"></i> Kirim
                        </button>
                        </div>
                        <hr>
                    </form>
                </div>
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = $con->query("SELECT * FROM kontak");
                        while ($row = $sql->fetch()) {
                            echo "<tr>
                                    <td>$no</td>
                                    <td>$row[nama]</td>
                                    <td>$row[email]</td>
                                    <td>$row[pesan]</td>
                                </tr>";

                                $no++;
                            }
                            ?>
    
                        </tbody>
                    </table>
    
    
                </div>
            </div>
        </div>
    </div>
    
    