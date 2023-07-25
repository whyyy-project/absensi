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
        <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>

    </div>
    <!-- end page heading -->

    <!-- Content Row -->
    <div class="row">
        <?php
        include "query/admin/dashboard.php";
        include "public/view/layouts/admin/top-content.php";
        include "query/admin/siswa.php" ?>

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Master Data Siswa </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Opsi :</div>
                            <a class="dropdown-item" href="?hlm=siswa">Refresh</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="?hlm=tambah-siswa">Tambah Siswa</a>
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
                                    <th>Id Card</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Tahun Masuk</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($qrySiswa as $data) : ?>
                                    <tr class="text-center">
                                        <td><?= $no;
                                            $no++ ?></td>
                                        <td><?= $data['uuid'] ?></td>
                                        <td><?= $data['nis'] ?></td>
                                        <td><?= $data['nama_siswa'] ?></td>
                                        <td><?= $data['nama_kelas'] ?></td>
                                        <td><?= $data['angkatan'] ?></td>
                                        <td><?= $data['status'] == 1 ? "Aktif" : "Lulus/Keluar" ?></td>
                                        <td><a href="?hlm=edit-siswa&id=<?= encrypt($data['uuid'], $key) ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a></td>
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