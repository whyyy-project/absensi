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
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">4000 </div>
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
                                Datang Hari ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1000 anak</div>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tidak Datang 
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">500 anak</div>
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
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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
                                Persentase</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">33%</div>
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
                    <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
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
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>No</th>
                                    <th>NIS</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <tr>
    <td>1</td>
    <td>0114246</td>
    <td>0118741444</td>
    <td>Adi Sukmana</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>2</td>
    <td>0215324</td>
    <td>0219823152</td>
    <td>Budi Setiawan</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>3</td>
    <td>0317821</td>
    <td>0316519283</td>
    <td>Citra Dewi</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>4</td>
    <td>0419832</td>
    <td>0419823232</td>
    <td>Dewi Indah</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>5</td>
    <td>0512381</td>
    <td>0517328102</td>
    <td>Eko Prasetyo</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>6</td>
    <td>0612374</td>
    <td>0619823674</td>
    <td>Faisal Rahman</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>7</td>
    <td>0716482</td>
    <td>0715748291</td>
    <td>Gita Wijaya</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>8</td>
    <td>0819237</td>
    <td>0816281937</td>
    <td>Hendy Kurniawan</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>9</td>
    <td>0913467</td>
    <td>0918574321</td>
    <td>Indra Permana</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>10</td>
    <td>1019823</td>
    <td>1016519823</td>
    <td>Joko Susanto</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>11</td>
    <td>1112378</td>
    <td>1119823718</td>
    <td>Kartika Dewi</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>12</td>
    <td>1216372</td>
    <td>1215321673</td>
    <td>Lukman Hakim</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>13</td>
    <td>1319824</td>
    <td>1317521984</td>
    <td>Mira Susanti</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>14</td>
    <td>1417423</td>
    <td>1419823741</td>
    <td>Nina Sari</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>15</td>
    <td>1519821</td>
    <td>1516324982</td>
    <td>Oscar Putra</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>16</td>
    <td>1615432</td>
    <td>1618423192</td>
    <td>Prita Wijaya</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>17</td>
    <td>1712381</td>
    <td>1719823145</td>
    <td>Qonita Pratiwi</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>18</td>
    <td>1819462</td>
    <td>1817328162</td>
    <td>Randy Setiawan</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>19</td>
    <td>1912378</td>
    <td>1919823712</td>
    <td>Sarah Amelia</td>
    <td>XII - IPA</td>
    <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></td>
</tr>
<tr>
    <td>20</td>
    <td>2017423</td>
    <td>2019823741</td>
    <td>Tono Susanto</td>
    <td>XII - IPA</td>
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