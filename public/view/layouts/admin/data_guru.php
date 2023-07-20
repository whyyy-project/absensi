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
        <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>
        
    </div>
    <!-- end page heading -->

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Guru </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Opsi :</div>
                            <a class="dropdown-item" href="#">Refresh</a>
                            <a class="dropdown-item" href="#">Download</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Tambah Guru</a>
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
                    <th>Jabatan</th>
                    <th>Mulai Mengajar</th>
                    <th>Keterangan</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Mulai Mengajar</th>
                    <th>Keterangan</th>
                    <th>Edit</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Agus Santoso</td>
                    <td>Guru</td>
                    <td>2013</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Suprapto</td>
                    <td>Waka Siswa</td>
                    <td>2014</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Indah Kusuma</td>
                    <td>Waka Kurikulum</td>
                    <td>2015</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Joko Marwoto</td>
                    <td>Kepala Sekolah</td>
                    <td>2016</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Naning Listiana</td>
                    <td>Ka Lab</td>
                    <td>2017</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Agus Salim</td>
                    <td>Ka Tu</td>
                    <td>2018</td>
                    <td>Tidak Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Bambang Ali</td>
                    <td>Guru</td>
                    <td>2019</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Ratna Wulandari</td>
                    <td>Guru</td>
                    <td>2020</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Setyobudi</td>
                    <td>Guru</td>
                    <td>2021</td>
                    <td>Tidak Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Muhammad Iskandar</td>
                    <td>Guru</td>
                    <td>2022</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
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