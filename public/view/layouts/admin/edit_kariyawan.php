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
        <h1 class="h3 mb-0 text-gray-800">Edit Siswa</h1>
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
                        <h4 class="text-gray-900 m-4">Form Edit Kariyawan</h4>
                    </div>
                    <form action="?hlm=edit-siswa&id=<?= $_GET['id'] ?>" method="post" class="user">
                        <div class="form-group d-flex">
                            <label for="nama-siswa" class="col-4 mt-2 text-center">Nama Siswa </label>
                            <input type="text" name="nama-siswa" id="nama-siswa" class="text-center form-control col-6" placeholder="Nama Siswa" value="">
                        </div>
                        <div class="form-group d-flex">
                            <label for="nis" class="col-4 mt-2 text-center">NIS</label>
                            <input type="text" name="nis" id="nama-kelas" class="text-center form-control col-6" placeholder="NIS Siswa" value="">
                        </div>
                        <div class="form-group d-flex">
                            <label for="angkatan" class="col-4 mt-2 text-center">Angkatan</label>
                            <input type="text" name="angkatan" id="nama-kelas" class="text-center form-control col-6" placeholder="Angkatan Kelas" value="">
                        </div>
                        <div class="form-group d-flex">
                            <label for="status" class="col-4 mt-2 text-center">Status Siswa</label>
                            <select class="custom-select col-6 text-center" name="status" id="status" required>
                                <option value="" disabled>Pilih Status</option>
                                <option value="1" <?= $getSiswa['status'] == 1 ? 'selected' : '' ?>>Aktif</option>
                                <option value="0" <?= $getSiswa['status'] == 0 ? 'selected' : '' ?>>Lulus/Keluar</option>
                            </select>
                        </div>
                        <div class="form-group d-flex">
                            <label for="kelas" class="col-4 mt-2 text-center">Kelas</label>
                            <select class="custom-select col-6 text-center" name="kelas" id="kelas" required>
                                <option value="" disabled>Pilih Kelas</option>
                                <?php foreach (seluruhKelas($db) as $kelas) : ?>
                                    <option value="<?= encrypt($kelas['id_kelas'], $key) ?>" <?= $kelas['id_kelas'] == $getSiswa['id_kelas'] ? 'selected' : '' ?>><?= $kelas['nama_kelas'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <input type="hidden" name="id" class="d-none" value="<?= encrypt($getSiswa['id_siswa'], $key) ?>">
                        <input type="hidden" name="oldUuid" class="d-none" value="<?= encrypt($getSiswa['uuid'], $key) ?>">
                        <div class="form-group d-flex">
                            <sup class="col-10 mb-2 text-danger text-center">* Scan ID Card jika ingin diubah</sup>
                        </div>


                        <div class="form-group text-center mt-2">
                            <button type="submit" name="edit-siswa" class="btn btn-success">Simpan</button>
                            <a href="?hlm=siswa" class="btn btn-danger ml-3">Batal</a>
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