<div class="content">
    <div class="row">
        <?php include "../query/super_edit_akun.php";
        if (isset($_GET[md5('id_akun')])) {
            ?>
            <a href="?hlm=dashboard">Beranda</a> » <a href="?hlm=user">Data User</a> » Edit Data
            <div class="widget">
                <div class="widget-header">
                    <h2><strong>Edit</strong> User</h2>
                </div>
                <div class="col-md-12">
                    <form action="?hlm=edit&<?= md5("id_akun") ?>=<?= encrypt($data['id_user'], $key) ?>&update"
                        method="post" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Nama User</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?= $data['nama'] ?>" class="form-control" name="nama"
                                    id="input-text" placeholder="Nama User" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" id="input-text"
                                    placeholder="Kosongkan jika tidak diubah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="password" id="input-text"
                                    placeholder="Kosongkan jika tidak diubah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?= $data['no_wa'] ?>" class="form-control" name="telepon"
                                    id="input-text" placeholder="Telepon User" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" value="<?= $data['email'] ?>" class="form-control" name="email"
                                    id="input-text" placeholder="Email User" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text" class="col-sm-2 control-label">Kode(NIM, NIDN, User Eksternal)</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?= $data['kode'] ?>" class="form-control" name="kode"
                                    id="input-text" placeholder="Kode User" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-number" class="col-sm-2 control-label">Poin User</label>
                            <div class="col-sm-10">
                                <input type="number" value="<?= $data['poin'] ?>" class="form-control" name="poin"
                                    id="input-text" placeholder="Poin User" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Status Akun</label>
                            <div class="col-md-10">
                                <select class="form-control" name="status">
                                    <?php
                                    if ($data['status'] == "aktif") {
                                        echo "
                        <option value='aktif'>Aktif</option>
                        <option value='tidak aktif'>Tidak Aktif</option>
                        ";
                                    } else {
                                        echo "
                        <option value='tidak aktif'>Tidak Aktif</option>
                        <option value='aktif'>Aktif</option>
                        ";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" name="<?= md5('update_user') ?>" class="btn btn-success">Simpan</button>
                            <a href="?hlm=user" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
                <hr class="divider" />
            </div>
        <?php }
        if (isset($_GET[md5('id_admin')])) { ?>
            <a href="?hlm=dashboard">Beranda</a> » <a href="?hlm=admin">Data Admin</a> » Edit Data
            <div class="widget">
                <div class="widget-header">
                    <h2><strong>Edit</strong> Admin</h2>
                </div>
                <div class="col-md-12">
                    <form action="?hlm=edit&<?= md5("id_admin") ?>=<?= encrypt($data['id_admin'], $key) ?>&update"
                        method="post" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="input-nama" class="col-sm-2 control-label">Nama Admin</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?= $data['nama_admin'] ?>" class="form-control  text-center"
                                    name="nama" id="input-nama" placeholder="Nama Admin" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-uname" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control  text-center" name="username" id="input-uname"
                                    placeholder="Kosongkan jika tidak diubah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-pass" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-center" name="password" id="input-pass"
                                    placeholder="Kosongkan jika tidak diubah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-tlp" class="col-sm-2 control-label">Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?= $data['wa_admin'] ?>" class="form-control  text-center"
                                    name="telepon" id="input-tlp" placeholder="Telepon Admin" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-mail" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" value="<?= $data['email_admin'] ?>" class="form-control  text-center"
                                    name="email" id="input-mail" placeholder="Email Admin" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-code" class="col-sm-2 control-label">Kode(NIM, NIDN, User Eksternal)</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?= $data['kode'] ?>" class="form-control  text-center"
                                    name="kode" id="input-code" placeholder="Kode User" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-jenis" class="col-md-2 control-label">Jenis Admin</label>
                            <div class="col-md-10">
                                <select class="form-control  text-center" name="jenis" id="input-jenis">
                                    <option value='<?= encrypt($data['id_level'], $key) ?>'><?= $data['level']; ?></option>
                                    <?php
                                    $id_level = $data['id_level'];
                                    $qry_level = mysqli_query($koneksi, "SELECT * FROM level_admin WHERE id_level != '$id_level'");
                                    while ($level = mysqli_fetch_array($qry_level)) {
                                        echo "
                                        <option value='" . encrypt($level['id_level'], $key) . "'>" . $level['level'] . " </option>
                                        ";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" name="<?= md5('update_admin') ?>" class="btn btn-success">Simpan</button>
                            <a href="?hlm=user" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                    <hr class="divider" />
                </div>
            </div>
        <?php } ?>
        <script>
            let count = 5;
            let countdown = setInterval(function () {
                document.getElementById("cd").innerHTML = count;
                count--;
                if (count == -1) {
                    document.location.href = "?hlm=user";
                }
            }, 1000);
            let countdownAdmin = setInterval(function () {
                document.getElementById("cda").innerHTML = count;
                count--;
                if (count == -1) {
                    document.location.href = "?hlm=admin";
                }
            }, 1000);
        </script>