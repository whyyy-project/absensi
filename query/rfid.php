<?php
include "koneksi.php";
$sql = mysqli_query($db, "SELECT * FROM temp_rfid WHERE jenis_scan ='absen'");
$rfid = mysqli_fetch_array($sql);
$data_rfid = mysqli_num_rows($sql);
$ulang = 0;
if ($data_rfid < 1) {
    // data kosong
} else {
    $rfid = $rfid[0];
    echo $rfid;

    $data_siswa = mysqli_query($db, "SELECT * FROM tb_siswa WHERE uuid = '$rfid'");
    $row_siswa = mysqli_num_rows($data_siswa);
    if ($row_siswa == 1 && $ulang <= 1) {
        $hasil = mysqli_fetch_array($data_siswa);
        $id_siswa = $hasil[0];
        $tambah_absen = mysqli_query($db, "INSERT INTO `tb_rekap` (`masuk`, `pulang`, `id_siswa`) VALUES (current_timestamp(), current_timestamp(), '$id_siswa');");
        $delete = mysqli_query($db, "DELETE FROM `temp_rfid` WHERE `temp_rfid`.`jenis_scan` = 'absen';");
        $ulang++;
    }

}