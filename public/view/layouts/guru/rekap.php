<?php
// memanggil partials
include "public/view/layouts/header.php";
include "public/view/partials/guru/sidebar.php";
include "public/view/partials/guru/wrapper.php";
include "public/view/partials/guru/modals.php";
?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rekap Absensi</h1>
    </div>
    <!-- end page heading -->
    <?php
    include "query/guru/dashboard.php";
    include "query/guru/rekap_absensi.php";
    if (isset($message)) :
    ?>
        <div class="<?= $class ?>" role="alert">
            <?= $message ?>
        </div>
    <?php endif; ?>
    <!-- Content Row -->
    <div class="row">
        <?php
        include "public/view/layouts/guru/top-content.php"; ?>

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Absensi bulanan</h6>
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="all">
                            <?= empty($_SESSION['rekap']) || $_SESSION['rekap'] == "all" ? "Filter" : $_SESSION['rekap'] ?>
                        </button>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item" href="?hlm=rekap&filter=all" data-value="all">Tampilkan Semua</a>
                            <?php foreach ($getBulanRekap as $br) : ?>
                                <a class="dropdown-item" href="?hlm=rekap&filter=<?= $br['bulan'] ?>"><?= $br['bulan'] ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Bulan/Tahun</th>
                                    <?php for ($i = 1; $i <= 31; $i++) :
                                    ?>
                                        <th><?= $i ?></th>
                                    <?php endfor; ?>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1 ?>
                                <?php foreach ($getRekap as $siswa) : ?>
                                    <tr class="text-center">
                                        <td><?= $no;
                                            $no++ ?></td>
                                        <td><?= $siswa['nama_siswa'] ?></td>
                                        <td><?= $siswa['bulan'] ?></td>
                                        <?php $hari = date('d'); ?>
                                        <?php for ($i = 1; $i <= 31; $i++) : ?>
                                            <?php
                                            $hari == $i ? $detail = 'bg-success text-white' : $detail = '';
                                            $tglharian =  $i . "-" . $siswa['bulan'];
                                            $dateOld = date('D-m-Y', strtotime($tglharian));
                                            $date_explode = explode("-", $dateOld);
                                            $date_explode['0'] == "Mon" ? $detail = 'bg-danger text-white' : $detail = '';
                                            ?>
                                            <td class="<?= $detail ?>">
                                                <div class="dropdown">
                                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="<?= $siswa[$i] ?>">
                                                        <span class="<?= $detail ?>"><?= $siswa[$i] == null ? 'kosong' : $siswa[$i] ?></span>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="?hlm=rekap&changeAbsensi&tgl=<?= encrypt($i, $key) ?>&status=<?= encrypt("A", $key) ?>&id=<?= encrypt($siswa['id_rekap'], $key) ?>" data-value="A">A</a>
                                                        <a class="dropdown-item" href="?hlm=rekap&changeAbsensi&tgl=<?= encrypt($i, $key) ?>&status=<?= encrypt("H", $key) ?>&id=<?= encrypt($siswa['id_rekap'], $key) ?>" data-value="H">H</a>
                                                        <a class="dropdown-item" href="?hlm=rekap&changeAbsensi&tgl=<?= encrypt($i, $key) ?>&status=<?= encrypt("I", $key) ?>&id=<?= encrypt($siswa['id_rekap'], $key) ?>" data-value="I">I</a>
                                                        <a class="dropdown-item" href="?hlm=rekap&changeAbsensi&tgl=<?= encrypt($i, $key) ?>&status=<?= encrypt("S", $key) ?>&id=<?= encrypt($siswa['id_rekap'], $key) ?>" data-value="S">S</a>
                                                    </div>
                                                </div>
                                            </td>
                                        <?php endfor; ?>
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