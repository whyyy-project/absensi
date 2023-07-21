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
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <?php
    if (isset($_GET['status']) && $_GET['status'] == "berhasil") {
        $class = "alert alert-success";
        $message = "Berhasil mengubah password";
    } elseif (isset($_GET['status']) && $_GET['status'] == "gagal") {
        $class = "alert alert-danger";
        $message = "Gagal mengubah password !";
    } else {
        $class = "d-none";
        $message = "";
    } ?>
    <div class="<?= $class ?>" role="alert">
        <?= $message ?>
    </div>
    <!-- end page heading -->

    <!-- Content Row -->
    <div class="row">
        <?php
        include "query/admin/dashboard.php";
        include "public/view/layouts/admin/top-content.php"; ?>
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Absensi</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Opsi :</div>
                            <a class="dropdown-item" href="?hlm=dashboard">Refresh</a>
                            <a class="dropdown-item" href="#">Download</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Masuk</th>
                                    <th>Pulang</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                <?php foreach ($qry_absensi as $dataAbs) : ?>
                                    <tr>
                                        <td><?= $no;
                                            $no++ ?></td>
                                        <td><?= $dataAbs['nama_siswa'] ?></td>
                                        <td>
                                            <?php
                                            $dateOld = date('Y-m-d', strtotime($dataAbs['tgl']));
                                            $date_explode = explode("-", $dateOld);
                                            ?>
                                            <?= $date_explode['2'] . "-" . $date_explode['1'] . "-" . $date_explode['0'] ?></td>
                                        <td><?= $dataAbs['masuk'] ?></td>
                                        <td><?= $dataAbs['pulang'] ?></td>
                                        <td>
                                            <?php
                                            if ($dataAbs['status_absen'] == "Tepat Waktu") {
                                                $color = "success";
                                            } else {
                                                $color = "danger";
                                            }
                                            ?>
                                            <?= "<span class='text-{$color}'>" . $dataAbs['status_absen'] . "</span> | " . $dataAbs['keterangan_absen'] ?></td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <!-- end row -->
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include "public/view/layouts/footer.php";
?>