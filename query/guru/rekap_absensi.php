<?php

if (isset($_GET['changeAbsensi']) && isset($_GET['id']) && isset($_GET['tgl']) && isset($_GET['status'])) {
    $tgl = decrypt($_GET['tgl'], $key);
    $status = decrypt($_GET['status'], $key);
    $idRekap = decrypt($_GET['id'], $key);
    // echo "<h1>" . $tgl . $status . $idRekap . "</h1>";
    if ($tgl != null && $status != null) {
        mysqli_query($db, "UPDATE `tb_rekap` SET `$tgl` = '$status' WHERE `tb_rekap`.`id_rekap` = $idRekap;");
        $message = "Berhasil Update Data";
        $class = "alert alert-success";
    } elseif ($idRekap == null) {
    } else {
        $class = "alert alert-danger";
        $message = "Gagal Update, Data Invalid !";
    }
}
$getBulanRekap = mysqli_query($db, "SELECT DISTINCT tb_rekap.bulan FROM `tb_siswa` inner join tb_rekap ON tb_rekap.id_siswa = tb_siswa.id_siswa WHERE tb_siswa.id_kelas = '$idKls' ORDER BY tb_rekap.bulan DESC;");
if (isset($_GET['filter'])) {
    $_SESSION['rekap'] = htmlspecialchars($_GET['filter']);
}
if (empty($_SESSION['rekap']) || $_SESSION['rekap'] == "all") {
    $getRekap = mysqli_query($db, "SELECT * FROM `tb_siswa` inner join tb_rekap ON tb_rekap.id_siswa = tb_siswa.id_siswa WHERE tb_siswa.id_kelas = '$idKls' ORDER BY tb_rekap.bulan DESC;");
} else {
    $selected = $_SESSION['rekap'];
    $getRekap = mysqli_query($db, "SELECT * FROM `tb_siswa` inner join tb_rekap ON tb_rekap.id_siswa = tb_siswa.id_siswa WHERE tb_siswa.id_kelas = '$idKls' AND tb_rekap.bulan = '$selected' ORDER BY tb_siswa.nama_siswa ASC;");
}
