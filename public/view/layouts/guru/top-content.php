  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 col-sm-6 col-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <a href="?hlm=siswa" class="text-decoration-none">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Jumlah Siswa</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalSiswa ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-users fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </a>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 col-sm-6 col-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          Nama Kelas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $idKelas['nama_kelas'] ?></div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-building fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 col-sm-6 col-6 mb-4">
      <a href="?hlm=absensi" class="text-decoration-none">
          <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Datang Hari ini
                          </div>
                          <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= mysqli_num_rows($qryAbsensiSekarang) ?></div>
                              </div>
                              <div class="col">
                                  <div class="progress progress-sm mr-2">
                                      <div class="progress-bar bg-info" role="progressbar" style="width: <?= $hitungKehadiran ?>%"></div>
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
      </a>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 col-sm-6 col-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          Tidak Datang</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tidakHadir ?> Siswa</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-exclamation rotate-n-15 fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>