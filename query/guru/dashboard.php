<?php
$idKariyawan = $_SESSION['id'];
$qry_siswa = mysqli_query($db, "SELECT * FROM `tb_siswa` LEFT JOIN tb_kelas ON tb_siswa.id_kelas = tb_kelas.id_kelas LEFT JOIN kariyawan ON kariyawan.id_kelas = tb_kelas.id_kelas WHERE kariyawan.id_kariyawan = '$idKariyawan'");
$totalSiswa = mysqli_num_rows($qry_siswa);
$idKelas = mysqli_fetch_array($qry_siswa);
$idKls = $idKelas['id_kelas'];
// absensi
$date = date('Y-m-d');
$qry_absensi = mysqli_query($db, "SELECT * FROM `tb_absen_siswa` LEFT JOIN tb_siswa ON tb_absen_siswa.id_siswa = tb_siswa.id_siswa WHERE tb_siswa.id_kelas = '$idKls' ORDER BY `tb_absen_siswa`.`tgl` DESC;");
$qryAbsensiSekarang = mysqli_query($db, "SELECT * FROM `tb_absen_siswa` LEFT JOIN tb_siswa ON tb_absen_siswa.id_siswa = tb_siswa.id_siswa WHERE tb_siswa.id_kelas = '$idKls' AND tb_absen_siswa.tgl = '$date';");
if (mysqli_num_rows($qry_absensi) == null) {
    $hitungKehadiran = 0;
    $tidakHadir = $totalSiswa;
} else {
    $hitungKehadiran = (mysqli_num_rows($qryAbsensiSekarang) / $totalSiswa) * 100;
    $tidakHadir = $totalSiswa - mysqli_num_rows($qryAbsensiSekarang);
}
