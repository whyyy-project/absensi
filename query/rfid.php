<?php
include "koneksi.php";

function dataKosong()
{
    echo "<img src='public/images/logo-scan.png' class='mt-lg-5' width='50%' alt='logo scan'>";

}

$sql = mysqli_query($db, "SELECT * FROM temp_rfid WHERE jenis_scan ='absen'");
$rfid = mysqli_fetch_array($sql);
$data_rfid = mysqli_num_rows($sql);
if ($data_rfid < 1) {
    dataKosong();
} else if ($data_rfid == 1) {
    $rfid = $rfid[0];
    $data_siswa = mysqli_query($db, "SELECT * FROM tb_siswa WHERE uuid = '$rfid'");
    $row_siswa = mysqli_num_rows($data_siswa);
    $data_s = mysqli_fetch_array($data_siswa);
    ?>
        <h1>
        <?= $data_s['nama_siswa']; ?>
        </h1>
        <?php
        // if ($row_siswa == 1) {
        //     $hasil = mysqli_fetch_array($data_siswa);
        //     $id_siswa = $hasil['id_siswa'];
        //     $tambah_absen = mysqli_query($db, "INSERT INTO `tb_rekap` (`masuk`, `pulang`, `id_siswa`) VALUES (current_timestamp(), current_timestamp(), '$id_siswa');");
        $delete = mysqli_query($db, "DELETE FROM `temp_rfid` WHERE `temp_rfid`.`jenis_scan` = 'absen';");
    // }

}