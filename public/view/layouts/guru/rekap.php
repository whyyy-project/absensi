<?php
// memanggil partials
include "public/view/layouts/header.php";
include "public/view/partials/guru/sidebar.php";
include "public/view/partials/guru/wrapper.php";
include "public/view/partials/guru/modals.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rekap Absensi</h1>

    </div>
    <!-- end page heading -->

    <!-- Content Row -->
    <div class="row">
        
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Absensi Siswa</h6>
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
                <?php
// Daftar Bulan
$daftarBulan = array(
  "Januari",
  "Februari",
  "Maret",
  "April",
  "Mei",
  "Juni",
  "Juli",
  "Agustus",
  "September",
  "Oktober",
  "November",
  "Desember"
);

// Tahun Awal dan Tahun Akhir
$tahun_awal = 2018;
$tahun_akhir = 2040;

// Cek apakah form telah disubmit
if (isset($_POST['submit'])) {
  // Mendapatkan nilai yang dipilih pada dropdown
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];

  // Proses pencarian atau tindakan lainnya
  // ...

  // Contoh: Menampilkan hasil pencarian
  echo "Anda melakukan pencarian untuk Bulan: $bulan dan Tahun: $tahun";
}
?>

<form method="post" action="">
  <label for="bulan">Bulan:</label>
  <select name="bulan" id="bulan">
    <?php
    foreach ($daftarBulan as $bulan) {
      echo '<option value="' . $bulan . '">' . $bulan . '</option>';
    }
    ?>
  </select>

  <label for="tahun">Tahun:</label>
  <select name="tahun" id="tahun">
    <?php
    for ($tahun = $tahun_awal; $tahun <= $tahun_akhir; $tahun++) {
      echo '<option value="' . $tahun . '">' . $tahun . '</option>';
    }
    ?>
  </select>

  <input type="submit" name="submit" value="Cari">
</form>


                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="text-align: center;">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th colspan="2">1</th>
                                    <th colspan="2">2</th>
                                    <th colspan="2">3</th>
                                    <th colspan="2">4</th>
                                    <th colspan="2">5</th>
                                    <th colspan="2">6</th>
                                    <th colspan="2">7</th>
                                    <th colspan="2">8</th>
                                    <th colspan="2">9</th>
                                    <th colspan="2">10</th>
                                    <th colspan="2">11</th>
                                    <th colspan="2">12</th>
                                    <th colspan="2">13</th>
                                    <th colspan="2">14</th>
                                    <th colspan="2">15</th>
                                    <th colspan="2">16</th>
                                    <th colspan="2">17</th>
                                    <th colspan="2">18</th>
                                    <th colspan="2">19</th>
                                    <th colspan="2">20</th>
                                    <th colspan="2">21</th>
                                    <th colspan="2">22</th>
                                    <th colspan="2">23</th>
                                    <th colspan="2">24</th>
                                    <th colspan="2">25</th>
                                    <th colspan="2">26</th>
                                    <th colspan="2">27</th>
                                    <th colspan="2">28</th>
                                    <th colspan="2">29</th>
                                    <th colspan="2">30</th>
                                    <th colspan="2">31</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>Subagio</th>
                                    <th> 
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <th>Subagia</th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <th>Ronaldo</th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                H
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="H">
                                                I
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-value="A">A</a>
                                                <a class="dropdown-item" href="#" data-value="H">H</a>
                                                <a class="dropdown-item" href="#" data-value="I">I</a>
                                                <a class="dropdown-item" href="#" data-value="S">S</a>
                                                <a class="dropdown-item" href="#" data-value="T">T</a>
                                            </div>
                                        </div>
                                    </th>
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
<?php
include "public/view/layouts/footer.php";
?>