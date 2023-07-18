<?php
include "koneksi.php";
$time = date('H:i:s');
// start operations
$sql = mysqli_query($db, "SELECT * FROM temp_rfid WHERE jenis_scan ='absen' ORDER BY id_temp DESC LIMIT 1");
$rfid = mysqli_fetch_array($sql);
$row_rfid = mysqli_num_rows($sql);

if ($row_rfid < 1) {
    // jika tidak ada data
    dataKosong();
}
// jika ada data di temp_rfid
if ($row_rfid >= 1) {
    $id_card = $rfid['rfid'];
    // untuk siswa
    // menjalankan cetakAbsen
    cetakAbsen($db, $id_card);
    $last = strtotime($rfid['last_use']) - strtotime($time);
    if (($last < -300) || ($last > 300)) {
        mysqli_query($db, "DELETE FROM temp_rfid WHERE `temp_rfid`.`rfid` = '$id_card'");
    }
}



function dataKosong()
{
?>
    <div class="row text-center">
        <div class="col-lg-6 d-none d-lg-block bg-scan-image"></div>
        <div class="col-lg-6">
            <div class="p-3">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-3">SCAN ABSENSI</h1>
                    <h2>
                        <?= date('H:i:s'); ?>
                    </h2>
                </div>
                <!-- view idcard -->
                <div class="card text-white shadow">
                    <div class="card-body">
                        <img src="public/images/logo-scan.png" width="80%" alt="">
                    </div>
                </div>
                <!-- end view idcard -->
                <hr>
                <a href="./" class="btn btn-link">Back to Dashboard</a>
            </div>
        </div>
    </div>
    <!-- end -->
    <?php
}
function cetakAbsen($db, $id_card)
{
    $data_siswa = mysqli_query($db, "SELECT * FROM tb_siswa WHERE uuid = '$id_card' LIMIT 1");
    $row_siswa = mysqli_num_rows($data_siswa);
    if ($row_siswa >= 1) {
        $data_s = mysqli_fetch_array($data_siswa);
        $id_siswa = $data_s['id_siswa'];
        $absen = mysqli_query($db, "SELECT * FROM tb_siswa
LEFT JOIN tb_absen_siswa ON tb_siswa.id_siswa = tb_absen_siswa.id_siswa
LEFT JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas
WHERE tb_siswa.id_siswa = $id_siswa ORDER BY tb_absen_siswa.id_absen_siswa DESC LIMIT 1;
    ");
        $data = mysqli_fetch_array($absen);
        if ($data['status_absen'] != "Terlambat") {
            $color = "success";
            $bg = "bg-scan3-image";
        } else if ($data['keterangan_absen'] == "Pulang") {
            $color = "success";
            $bg = "bg-scan4-image";
        } else {
            $color = "danger";
            $bg = "bg-scan2-image";
        }


    ?>

        <div class="row text-center">
            <div class="col-lg-6 d-none d-lg-block <?= $bg; ?>"></div>
            <div class="col-lg-6">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-3">SCAN ABSENSI</h1>
                        <h2>
                            <?= date('H:i:s'); ?>
                        </h2>
                    </div>
                    <!-- view idcard -->
                    <div class="card bg-<?= $color; ?> text-white shadow">
                        <div class="card-body">
                            <h3 class="mt-2">
                                <?= $data['nama_siswa']; ?>
                            </h3>
                            <hr>
                            <h4>
                                <?= $data['status_absen']; ?>
                            </h4>
                            <p>
                                <?= $data['keterangan_absen']; ?>
                            </p>
                            <p>
                                <?php
                                if ($data['keterangan_absen'] != "Masuk") {
                                    echo "IN {$data['masuk']}<br>OUT {$data['pulang']}";
                                } else {
                                    echo "IN " . $data['masuk'];
                                }
                                ?>
                            </p>
                            <p>
                                <?= $data['tgl']; ?>
                            </p>
                        </div>
                    </div>
                    <!-- end view idcard -->

                    <a href="./" class="btn btn-link mt-4">Back to Dashboard</a>
                </div>
            </div>
        </div>
        <!-- end -->

<?php
    }
    // end if siswa

}
// end function cetakAbsen