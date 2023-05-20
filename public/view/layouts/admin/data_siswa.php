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
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Hadir</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">15000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tidak Hadir 
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">500</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Presentase </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18%</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Master Data Siswa </h6>
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
                            <a class="dropdown-item" href="#">Tambah Siswa</a>
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
                                    <th>Id Card</th>
                                    <th>Kelas</th>
                                    <th>Tahun Masuk</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Id Card</th>
                                    <th>Kelas</th>
                                    <th>Tahun Masuk</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Gojo Satoru</td>
                                    <td>123123</td>
                                    <td>XI IPA</td>
                                    <td>2018</td>
                                    <td>I</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Naruto</td>
                                    <td>132321</td>
                                    <td>XI IPS</td>
                                    <td>2019</td>
                                    <td>H</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Zoro</td>
                                    <td>123123</td>
                                    <td>X IPA</td>
                                    <td>2020</td>
                                    <td>A</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Todoroki</td>
                                    <td>123123</td>
                                    <td>XI IPS</td>
                                    <td>2018</td>
                                    <td>H</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sinchan</td>
                                    <td>123123</td>
                                    <td>XI IPA</td>
                                    <td>2018</td>
                                    <td>S</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button</td>
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