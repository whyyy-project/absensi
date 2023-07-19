<?php
// menambahkan koneksi db dan menerima data
include "query/koneksi.php";
if (empty($_GET['id'] && $_GET['m'] && $_GET['stat'] && $_GET['token'])) {
    echo "hekel";
    return;
}
// contoh link http://localhost/GitHub/absensi/scan_id.php?id=(rfid-nya)&m=(kode mesin)&stat=(absen/tambah)&token=(default = 123456789)
$getID = htmlspecialchars($_GET['id']);
$getMesin = htmlentities($_GET['m']);
$getStat = htmlspecialchars($_GET['stat']);
$getToken = htmlspecialchars($_GET['token']);
if ($getToken != "12345678") {
    echo "token salah";
    return;
}
// setup waktu
$waktu = date('H:i:s');
$tgl = date('Y-m-d');
$bulan = date('m-Y');
$hari = date('d');
if ($waktu > "07:00:00") {
    $ket = "Terlambat";
    $ket_a = "T";
} else {
    $ket = "Tepat Waktu";
    $ket_a = "H";
}

// mencari id siswanya
$data_siswa = mysqli_query($db, "SELECT * FROM `tb_siswa`WHERE uuid = '$getID' AND status = 1 ORDER BY id_siswa DESC LIMIT 1");
$result = mysqli_fetch_assoc($data_siswa);
if (mysqli_num_rows($data_siswa) == 0) {
    http_response_code(404);
    echo "uuid tidak terdaftar";
    return;
    // jika uuid tidak ada program berhenti
}


$id_siswa = $result['id_siswa'];
// menghapus temporary dari mesin sebelumnya
$delete = mysqli_query($db, "DELETE FROM `temp_rfid` WHERE `temp_rfid`.`kode_mesin` = '$getMesin' AND jenis_scan ='absen';");
// menambahkan ke temporary rfid
$insert = mysqli_query($db, "INSERT INTO `temp_rfid` (`id_temp`, `rfid`, `jenis_scan`, `kode_mesin`, `last_use`)
VALUES (NULL, '$getID', '$getStat', '$getMesin', '$waktu')");
$qry_absen = mysqli_query($db, "SELECT * FROM tb_absen_siswa WHERE id_siswa = $id_siswa AND tgl = '$tgl' LIMIT 1");
$absen_terbaru = mysqli_fetch_array($qry_absen);
$row_absen = mysqli_num_rows($qry_absen);

if ($row_absen == 0) {
    $status_absen = "Selamat Datang";
    if (str_replace(":", "", $waktu) > 70000) {
        $status_absen = "Terlambat";
    }
    mysqli_query($db, "INSERT INTO `tb_absen_siswa` (`id_absen_siswa`, `id_siswa`, `tgl`, `masuk`, `pulang`, `keterangan_absen`, `status_absen`) VALUES (NULL, '$id_siswa', '$tgl', '$waktu', '', 'Masuk', '$status_absen')");
    echo "berhasil";
    return;
}

$tempo = str_replace(":", "", $waktu) - str_replace(":", "", $absen_terbaru['masuk']);

if ($absen_terbaru['tgl'] == $tgl) {
    // update masuk
    if ($tempo < 600) {
        // 600 detik
        $id_absen = $absen_terbaru['id_absen_siswa'];
        $absen = mysqli_query($db, "UPDATE `tb_absen_siswa` SET `masuk` = '$waktu', `status_absen` = '$ket'
    WHERE `tb_absen_siswa`.`id_absen_siswa` = '$id_absen' ");
        echo "masuk";
        return;
    }
    // update pulang
    if ($tempo >= 600) {
        $id_absen = $absen_terbaru['id_absen_siswa'];
        $absen = mysqli_query($db, "UPDATE `tb_absen_siswa` SET `pulang` = '$waktu', `status_absen` ='Selamat Jalan', `keterangan_absen` = 'Pulang'
    WHERE `tb_absen_siswa`.`id_absen_siswa` = '$id_absen' ");

        // check rekap ada tidak ?
        $rekap = mysqli_query($db, "SELECT * FROM tb_rekap WHERE id_siswa = $id_siswa AND bulan = '$bulan' limit 1");
        $total_rekap = mysqli_num_rows($rekap);
        if ($total_rekap == 0) {
            // jika bulan ini belum ada data-nya
            mysqli_query($db, "INSERT INTO `tb_rekap` (`id_rekap`, `id_siswa`, `bulan`, `$hari`) VALUES ('', '$id_siswa', '$bulan', 'H')");
            echo "berhasil absen Hadir hari " . $tgl;
        } else {
            mysqli_query($db, "UPDATE `tb_rekap` SET `$hari` = 'H' WHERE `tb_rekap`.`id_siswa` = $id_siswa");
            echo "berhasil absen Hadir hari " . $tgl;
        }


        echo " pulang";
        return;
    }
}
