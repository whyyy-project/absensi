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
        <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
    </div>
    <!-- end page heading -->

    <!-- Content Row -->
    <div class="row">
        <?php
        include "query/guru/dashboard.php";
        include "public/view/layouts/guru/top-content.php"; ?>

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>ID Card</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Angkatan</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                <?php foreach ($qry_siswa as $siswa) : ?>
                                    <tr class="text-center">
                                        <td><?= $no;
                                            $no++ ?></td>
                                        <td><?= $siswa['uuid'] ?></td>
                                        <td><?= $siswa['nis'] ?></td>
                                        <td><?= $siswa['nama_siswa'] ?></td>
                                        <td><?= $siswa['angkatan'] ?></td>
                                        <td><?= $siswa['status'] == 1 ? "Aktif" : "Tidak Aktif" ?></td>
                                        <td class="text-center"><a href="?hlm=edit-siswa&id=<?= encrypt($siswa['id_siswa'], $key) ?>" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a></td>
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