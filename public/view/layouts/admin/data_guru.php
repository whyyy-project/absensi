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
                                    <th>Masuk</th>
                                    <th>Pulang</th>
                                    <th>Keterangan</th>
                                    <th>edit</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>No</th>
                                    <th>Nama</th>
                                    <th>Masuk</th>
                                    <th>Pulang</th>
                                    <th>Keterangan</th>
                                    <th>edit</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Gojo Satoru</td>
                                    <td>06:45</td>
                                    <td>13:00</td>
                                    <td>H</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Naruto</td>
                                    <td>07:45</td>
                                    <td>13:01</td>
                                    <td>H</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Zoro</td>
                                    <td>06:47</td>
                                    <td>13:30</td>
                                    <td>H</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Todoroki</td>
                                    <td>06:55</td>
                                    <td>13:50</td>
                                    <td>H</td>
                                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sinchan</td>
                                    <td>06:45</td>
                                    <td>12:51</td>
                                    <td>H</td>
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