<?php
$idKariyawan = $_SESSION['id'];
$qry_siswa = mysqli_query($db, "SELECT * FROM `tb_siswa` WHERE tb_siswa.status = 1;");
$totalSiswa = mysqli_num_rows($qry_siswa);
$idKelas = mysqli_fetch_array($qry_siswa);
// kelas
$kelas = mysqli_query($db, "SELECT * FROM tb_kelas");
$totalKelas = mysqli_num_rows($kelas);
// absensi
$date = date('Y-m-d');
$qry_absensi = mysqli_query($db, "SELECT * FROM `tb_absen_siswa` LEFT JOIN tb_siswa ON tb_absen_siswa.id_siswa = tb_siswa.id_siswa ORDER BY `tb_absen_siswa`.`tgl` DESC;");
$qryAbsensiSekarang = mysqli_query($db, "SELECT * FROM `tb_absen_siswa` LEFT JOIN tb_siswa ON tb_absen_siswa.id_siswa = tb_siswa.id_siswa WHERE tb_absen_siswa.tgl = '$date';");
$hitungKehadiran = (mysqli_num_rows($qryAbsensiSekarang) / $totalSiswa) * 100;
$tidakHadir = $totalSiswa - mysqli_num_rows($qryAbsensiSekarang);
