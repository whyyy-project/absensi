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
        <h1 class="h3 mb-0 text-gray-800">Data Kelas X-IPA</h1>
        
    </div>
    <!-- end page heading -->

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
                <div class="form-group">
        <label for="wali_kelas">Wali Kelas:</label>
        <select class="form-select" id="wali_kelas" style="width: 150px;">
            <option value="Adi Sukmana">Adi Sukmana</option>
            <option value="Joko Susilo">Joko Susilo</option>
            <option value="Bambang">Bambang</option>
        </select>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Id Card</th>
                    <th>Tahun Masuk</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Id Card</th>
                    <th>Tahun Masuk</th>
                    <th>Status</th>
                    <th>Edit</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>123456</td>
                    <td>Andi Wijaya</td>
                    <td>2023</td>
                    <td>2018</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>654321</td>
                    <td>Siti Rahayu</td>
                    <td>4567</td>
                    <td>2019</td>
                    <td>Tidak Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>789012</td>
                    <td>Budi Santoso</td>
                    <td>1245</td>
                    <td>2020</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>345678</td>
                    <td>Ratna Sari</td>
                    <td>7890</td>
                    <td>2018</td>
                    <td>Tidak Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>901234</td>
                    <td>Ahmad Sutomo</td>
                    <td>1010</td>
                    <td>2018</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>567890</td>
                    <td>Fitriani</td>
                    <td>2022</td>
                    <td>2019</td>
                    <td>Tidak Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>234567</td>
                    <td>Agus Setiawan</td>
                    <td>3546</td>
                    <td>2021</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>890123</td>
                    <td>Rani Putri</td>
                    <td>7583</td>
                    <td>2022</td>
                    <td>Tidak Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>456789</td>
                    <td>Joko Wibowo</td>
                    <td>4268</td>
                    <td>2023</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>678901</td>
                    <td>Sinta Dewi</td>
                    <td>6037</td>
                    <td>2021</td>
                    <td>Aktif</td>
                    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- End of Main Content -->
<?php
include "public/view/layouts/footer.php";
?>