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
        <h1 class="h3 mb-0 text-gray-800">Tambah Kelas</h1>
    </div>
    <?php
    if (isset($stat) == "berhasil") {
        $class = "success";
        $message = "Berhasil menambah kelas";
    } elseif (isset($stat) == "gagal") {
        $class = "danger";
        $message = "Gagal menambah kelas !";
    } else {
        $class = " d-none";
        $message = "";
    } ?>
    <div class="alert alert-<?= $class ?>" role="alert">
        <?= $message ?>
        <div class="badge badge-<?= $class ?>" role="alert" id="minLenght">
            <a href="?hlm=DataKelas" class="text-decoration-none text-white <?= $class ?>">lihat daftar kelas</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="p-3">
                    <div class="text-center">
                        <h4 class="text-gray-900 m-4">Form Tambah Kelas</h4>
                    </div>
                    <form action="?hlm=TambahKelas" method="post" class="user">
                        <div class="form-group d-flex">
                            <label for="nama-kelas" class="col-4 mt-2 text-center">Nama Kelas </label>
                            <input type="text" name="nama-kelas" id="nama-kelas" class="form-control form-control-user col-6" placeholder="Nama Kelas">
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