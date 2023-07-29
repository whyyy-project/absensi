<?php
// memanggil partials
include "public/view/layouts/header.php";
include "public/view/partials/admin/admin_sidebar.php";
include "public/view/partials/admin/admin_wrapper.php";
include "public/view/partials/admin/admin_modal.php";
?>
<?php

$id_kariyawan = decrypt(htmlspecialchars($_GET['id']), $key);
if (isset($_POST['edit-kariyawan'])) {
    $namaK = htmlspecialchars($_POST['nama-kariyawan']);
    $jabatan = htmlspecialchars($_POST['jabatan']);
    $mulai = htmlspecialchars($_POST['mulai']);
    $jenis = htmlspecialchars($_POST['jenis']);
    $id_akun = htmlspecialchars($_GET['ak']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password-akun']);
    mysqli_query($db, "UPDATE `kariyawan` SET `nama_kariyawan` = '$namaK', `jenis` = '$jabatan', `mulai` = '$mulai',  WHERE `kariyawan`.`id_kariyawan` = '$id_kariyawan'");
    if (!$password) {
        mysqli_query($db, "UPDATE akun SET username = '$username' WHERE id_akun = '$id_akun'");
        echo "<h1>Lorem, ipsum dolor.</h1>";
    } else {
        mysqli_query($db, "UPDATE akun SET username = '$username', password = MD5('$password') WHERE id_akun = '$id_akun'");
    }
}

$getdata = mysqli_query($db, "SELECT * FROM kariyawan LEFT JOIN akun ON akun.id_akun = kariyawan.id_akun WHERE kariyawan.id_kariyawan = '$id_kariyawan'");
$dataKariyawan = mysqli_fetch_array($getdata);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit <?= $dataKariyawan['nama_kariyawan'] ?></h1>
    </div>
    <?php
    include "query/admin/kelas.php";
    ?>
    <?php
    if (isset($stat) == "berhasil") {
        $class = "success";
        $message = "Berhasil menambah Siswa";
    } elseif (isset($stat) == "gagal") {
        $class = "danger";
        $message = "Gagal menambah Siswa !";
    } else {
        $class = " d-none";
        $message = "";
    } ?>
    <div class="alert alert-<?= $class ?>" role="alert">
        <?= $message ?>
        <div class="badge badge-<?= $class ?>" role="alert" id="minLenght">
            <a href="?hlm=guru" class="text-decoration-none text-white <?= $class ?>">lihat daftar Guru</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="p-3">
                    <div class="text-center">
                        <h4 class="text-gray-900 m-4">Form Edit Guru/Kariyawan</h4>
                    </div>
                    <form action="?hlm=edit-guru&id=<?= $_GET['id'] ?>" method="post" class="user">
                        <div class="form-group d-flex">
                            <label for="nama-kariyawan" class="col-4 mt-2 text-center">Nama Kariyawan</label>
                            <input type="text" name="nama-kariyawan" id="nama-kariyawan" class="text-center form-control col-6" placeholder="Nama Kariyawan">
                        </div>
                        <div class="form-group d-flex">
                            <label for="jabatan" class="col-4 mt-2 text-center">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan" class="text-center form-control col-6" placeholder="Jabatan Kariyawan">
                        </div>
                        <div class="form-group d-flex">
                            <label for="Mulai" class="col-4 mt-2 text-center">tahun Masuk</label>
                            <input type="text" name="mulai" id="Mulai" class="text-center form-control col-6" placeholder="Tahun Masuk">
                        </div>
                        <div class="form-group d-flex">
                            <label for="jenis" class="col-4 mt-2 text-center">Jenis Akun</label>
                            <select class="custom-select col-6 text-center" name="jenis" id="jenis" required>
                                <option value="" disabled selected>Pilih Jenis</option>
                                <option value="admin">Admin</option>
                                <option value="guru">Guru</option>
                            </select>
                        </div>
                        <div class="form-group d-flex">
                            <label for="username" class="col-4 mt-2 text-center">Username</label>
                            <input type="text" name="username" id="username" class="text-center form-control col-6" placeholder="Username">
                        </div>
                        <div class="form-group d-flex">
                            <label for="password-akun" class="col-4 mt-2 text-center">Password</label>
                            <input type="password" name="password-akun" id="password-akun" class="text-center form-control col-6" placeholder="password-akun" autocomplete="off">
                        </div>

                        <div class="form-group text-center mt-2">
                            <button type="submit" name="tambah-kariyawan" class="btn btn-success">Tambah</button>
                            <a href="?hlm=guru" class="btn btn-danger ml-3">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include "public/view/layouts/footer.php";
?>