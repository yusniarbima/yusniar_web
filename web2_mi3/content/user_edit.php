<?php if (isset($_GET['id'])) : ?>
    <?php
    $id = $_GET['id'];
    $sql = $con->query("SELECT * FROM user WHERE id = '$id'");
    $data = $sql->fetch();
    ?>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit User</h5>
                    <hr>
                    <form action="index.php?page=user_update" method="POST">
                        <div class="mb-2">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $data['username'] ?>" placeholder="Masukan Username.." readonly>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="<?= $data['password'] ?>" placeholder="Masukan Password..">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Level</label>
                            <select name="level" class="form-select">
                                <option <?= ($data['level'] == "Admin" ? "selected" : "") ?>>Admin</option>
                                <option <?= ($data['level'] == "User" ? "selected" : "") ?>>User</option>
                            </select>
                        </div>
                        <div class="mt-2">
                            <a href="index.php?page=user" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>