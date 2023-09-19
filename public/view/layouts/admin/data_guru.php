<?php
// memanggil partials
include "public/view/layouts/header.php";
include "public/view/partials/admin/admin_sidebar.php";
include "public/view/partials/admin/admin_wrapper.php";
include "public/view/partials/admin/admin_modal.php";

include "query/admin/kariyawan.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">Master Data Guru</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Opsi :</div>
                            <a class="dropdown-item" href="?hlm=guru">Refresh</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="?hlm=tambah-guru">Tambah Guru</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Wali Kelas</th>
                                    <th>Mulai Mengajar</th>
                                    <th>Akun</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <?php $no = 1; ?>
                                <?php foreach ($qryKariyawan as $k) : ?>
                                    <tr>
                                        <td><?= $no;
                                            $no++ ?></td>
                                        <td><?= $k['nama_kariyawan'] ?></td>
                                        <td><?= $k['jenis'] ?></td>
                                        <td><?= $k['id_kelas'] == null ? "Belum Dipilih" : $k['nama_kelas'] ?></td>
                                        <td><?= $k['mulai'] ?></td>
                                        <td><?= $k['level_akun'] ?></td>
                                        <td><a href="?hlm=edit-guru&id=<?= encrypt($k['id_kariyawan'], $key) ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a></td>
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