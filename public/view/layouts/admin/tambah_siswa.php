<?php
// memanggil partials
include "public/view/layouts/header.php";
include "public/view/partials/admin/admin_sidebar.php";
include "public/view/partials/admin/admin_wrapper.php";
include "public/view/partials/admin/admin_modal.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Siswa</h1>
    </div>
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
            <a href="?hlm=siswa" class="text-decoration-none text-white <?= $class ?>">lihat daftar Siswa</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="p-3">
                    <div class="text-center">
                        <h4 class="text-gray-900 m-4">Form Tambah Siswa</h4>
                    </div>
                    <form action="?hlm=tambah-siswa" method="post" class="user">
                        <div class="form-group d-flex">
                            <label for="nama-siswa" class="col-4 mt-2 text-center">Nama Siswa </label>
                            <input type="text" name="nama-siswa" id="nama-siswa" class="form-control form-control-user col-6" placeholder="Nama Siswa">
                        </div>
                        <div class="form-group d-flex">
                            <label for="angkatan" class="col-4 mt-2 text-center">Angkatan</label>
                            <input type="text" name="angkatan" id="nama-kelas" class="form-control form-control-user col-6" placeholder="Angkatan Kelas">
                        </div>
                        <div class="form-group d-flex">
                            <label for="angkatan" class="col-4 mt-2 text-center">Angkatan</label>
                            <input type="text" name="angkatan" id="nama-kelas" class="form-control form-control-user col-6" placeholder="Angkatan Kelas">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="tambah-kelas" class="btn btn-success">Simpan</button>
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