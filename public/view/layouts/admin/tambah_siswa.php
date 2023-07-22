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
    <?php include "query/admin/kelas.php" ?>
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
                            <input type="text" name="nama-siswa" id="nama-siswa" class="text-center form-control col-6" placeholder="Nama Siswa">
                        </div>
                        <div class="form-group d-flex">
                            <label for="nis" class="col-4 mt-2 text-center">NIS</label>
                            <input type="text" name="nis" id="nama-kelas" class="text-center form-control col-6" placeholder="NIS Siswa">
                        </div>
                        <div class="form-group d-flex">
                            <label for="angkatan" class="col-4 mt-2 text-center">Angkatan</label>
                            <input type="text" name="angkatan" id="nama-kelas" class="text-center form-control col-6" placeholder="Angkatan Kelas">
                        </div>
                        <div class="form-group d-flex">
                            <label for="idcard" class="col-4 mt-2 text-center">ID Card</label>
                            <input type="text" name="uuid" id="idcard" class="text-center form-control col-6" placeholder="Harap Scan ID Card" readonly value="coba">
                        </div>
                        <div class="form-group d-flex">
                            <label for="kelas" class="col-4 mt-2 text-center">Kelas</label>
                            <select class="custom-select col-6 text-center" id="kelas" required>
                                <option value="" disabled selected>Select an option</option>
                                <?php foreach (seluruhKelas($db) as $kelas) : ?>
                                    <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <div class="form-group text-center mt-5">
                            <button type="submit" name="tambah-siswa" class="btn btn-success">Simpan</button>
                            <a href="siswa" class="btn btn-danger ml-3">Batal</a>
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