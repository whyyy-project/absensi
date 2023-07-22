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
        <h1 class="h3 mb-0 text-gray-800">Data Kelas</h1>
    </div>
    <?php
    include "query/admin/kelas.php";
    ?>
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <?php foreach ($qry_kelas as $kelas) : ?>
            <?php
            $dataArray = ['primary', 'danger', 'success', 'danger', 'warning'];
            $randomIndex = array_rand($dataArray);
            $randomValue = $dataArray[$randomIndex];
            ?>
            <div class="col-xl-3 col-md-6 col-sm-6 mb-4">
                <div class="card border-left-<?= $randomValue ?> shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?= $kelas['nama_kelas'] ?>
                                    <sup class="text-xs text-<?= $randomValue ?>"><?= $kelas['angkatan_kelas'] ?></sup>
                                </div>
                                <div class="badge badge-primary <?= $kelas['status_kelas'] == 1 ? "d-none" : "" ?>" role="alert" id="minLenght">
                                    <?= $kelas['status_kelas'] == 1 ? "" : "Lulus" ?>
                                </div>
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Siswa : <?= totalSiswa($kelas['id_kelas'], $db) ?></div>
                                <div class="<?= $kelas['status_kelas'] == 1 ? "" : "d-none" ?> text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Wali Kelas : <?= waliKelas($kelas['id_kelas'], $db) ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-building fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>



<?php
include "public/view/layouts/footer.php";
?>