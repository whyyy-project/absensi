<?php
include "query/koneksi.php";
// contoh link : http://localhost/GitHub/absensi/add_rfid.php?id=(rfid-nya)&m=(kode mesin)&stat=tambah
if (empty($_GET['id']) || empty($_GET['m']) || empty($_GET['stat'])) {
    echo "<h1 style='display:flex; justify-content:center;margin-top:200px;'>Apa yang anda cari ?</h1>";
    return;
}
$getID = htmlspecialchars($_GET['id']);
$getKodeMesin = htmlspecialchars($_GET['m']);
$getStatus = htmlspecialchars($_GET['stat']);
$time = date('H:i:s');

if ($getStatus != 'tambah') {
    echo "<h1 style='display:flex; justify-content:center;margin-top:250px'> 404 Not Found!</h1>";
    return;
}
$periksaData = mysqli_query($db, "SELECT * FROM tb_siswa WHERE uuid = '$getID'");
$hitungData = mysqli_num_rows($periksaData);
if ($hitungData != 0) {
    mysqli_query($db, "UPDATE `tb_siswa` SET `uuid` = 'ID Card $getID Dipakai orang lain', `updated_at` = now() WHERE `tb_siswa`.`uuid` = '$getID';");
    echo "RFID sudah ada";
    // return;
}
mysqli_query($db, "INSERT INTO `temp_rfid` (`id_temp`, `rfid`, `jenis_scan`, `kode_mesin`, `last_use`) VALUES (NULL, '$getID', '$getStatus', '$getKodeMesin', '$time')");
echo "berhasil menyimpan";
