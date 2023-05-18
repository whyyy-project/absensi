<?php
include "query/koneksi.php";
$getID = htmlspecialchars($_GET['id']);
$getMesin = htmlentities($_GET['m']);
$getStat = htmlspecialchars($_GET['stat']);


// setup waktu
$waktu = date('H:i:s');
$tgl = date('Y-m-d');
if ($waktu > "07:00:00") {
    $ket = "Terlambat";
} else {
    $ket = "Tepat Waktu";
}

// mencari id siswa
$data_siswa = mysqli_query($db, "SELECT id_siswa FROM tb_siswa WHERE uuid='$getID' LIMIT 1");
$result = mysqli_fetch_assoc($data_siswa);
if (mysqli_num_rows($data_siswa) != 1) {
    echo "uuid tidak terdaftar";
    return;
    // jika uuid tidak ada program berhenti
}

$id_siswa = $result['id_siswa'];
$delete = mysqli_query($db, "DELETE FROM `temp_rfid` WHERE `temp_rfid`.`jenis_scan` = 'absen';");
// menambahkan ke temporary rfid
$insert = mysqli_query($db, "INSERT INTO `temp_rfid` (`id_temp`, `rfid`, `jenis_scan`, `kode_mesin`, `last_use`)
VALUES (NULL, '$getID', '$getStat', '$getMesin', '$waktu')");

$qry_absen = mysqli_query($db, "SELECT id_absen_siswa, tgl, masuk FROM tb_absen_siswa WHERE id_siswa = '$id_siswa' AND tgl = '$tgl'");
$absen_terbaru = mysqli_fetch_assoc($qry_absen);
$row_absen = mysqli_num_rows($qry_absen);
// jarak waktu masuk dan scan berikutnya
if ($row_absen < 1) {
    // masuk data baru
    $insert_absen = mysqli_query($db, "INSERT INTO `tb_absen_siswa`
(`id_absen_siswa`, `id_siswa`, `tgl`, `masuk`, `keterangan_absen`, `status_absen`, `ket_a`)
VALUES (NULL, '$id_siswa', '2023-05-18', '$waktu', 'Masuk', '$ket', 'H');");
    echo "buat baru";
    return;
}


$tempo = strtotime($waktu) - strtotime($absen_terbaru['masuk']);
// update masuk
if ($absen_terbaru['tgl'] == $tgl && $tempo <= 600) {
    // 600 detik
    $id_absen = $absen_terbaru['id_absen_siswa'];
    $absen = mysqli_query($db, "UPDATE `tb_absen_siswa` SET `masuk` = '$waktu', `status_absen` = '$ket'
    WHERE `tb_absen_siswa`.`id_absen_siswa` = '$id_absen' ");
    echo "masuk";
    return;
}

// update pulang
if ($absen_terbaru['tgl'] == $tgl && $tempo >= 600) {
    $id_absen = $absen_terbaru['id_absen_siswa'];
    $absen = mysqli_query($db, "UPDATE `tb_absen_siswa` SET `pulang` = '$waktu'
    WHERE `tb_absen_siswa`.`id_absen_siswa` = '$id_absen' ");
    echo "pulang";
    return;
}