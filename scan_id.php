<?php
// menambahkan koneksi db dan menerima data
include "query/koneksi.php";
if (empty($_GET['id'] && $_GET['m'] && $_GET['stat'] && $_GET['token'])) {
    echo "hekel";
    return;
}
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
if ($waktu > "07:00:00") {
    $ket = "Terlambat";
    $ket_a = "T";
} else {
    $ket = "Tepat Waktu";
    $ket_a = "H";
}

// mencari id siswanya
$data_siswa = mysqli_query($db, "SELECT * FROM `tb_siswa`WHERE uuid = '$getID'");
$result = mysqli_fetch_assoc($data_siswa);
if (mysqli_num_rows($data_siswa) < 1) {
    echo "uuid tidak terdaftar";
    return;
    // jika uuid tidak ada program berhenti
}


$id_siswa = $result['id_siswa'];
// menghapus temporary dari mesin sebelumnya
$delete = mysqli_query($db, "DELETE FROM `temp_rfid` WHERE `temp_rfid`.`kode_mesin` = '$getMesin';");
// menambahkan ke temporary rfid
$insert = mysqli_query($db, "INSERT INTO `temp_rfid` (`id_temp`, `rfid`, `jenis_scan`, `kode_mesin`, `last_use`)
VALUES (NULL, '$getID', '$getStat', '$getMesin', '$waktu')");
$qry_absen = mysqli_query($db, "SELECT * FROM tb_absen_siswa WHERE id_siswa = $id_siswa ORDER BY tgl DESC LIMIT 1");
$absen_terbaru = mysqli_fetch_array($qry_absen);
$row_absen = mysqli_num_rows($qry_absen);


echo $tempo = strtotime($waktu) - strtotime($absen_terbaru['masuk']);
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
        echo "pulang";
        return;
    }
}


// jarak waktu masuk dan scan berikutnya
if ($row_absen < 1) {
    // masuk data baru
    $insert_absen = mysqli_query($db, "INSERT INTO `tb_absen_siswa`
(`id_absen_siswa`, `id_siswa`, `tgl`, `masuk`, `keterangan_absen`, `status_absen`, `ket_a`)
VALUES (NULL, '$id_siswa', '2023-05-18', '$waktu', 'Masuk', '$ket', '$ket_a');");
    echo "buat baru";
    return;
}