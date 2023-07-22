<?php
$qry_kelas = mysqli_query($db, "SELECT * FROM tb_kelas ORDER BY nama_kelas");

function totalSiswa($kodeKelas, $db)
{
    $qryKelasSiswa = mysqli_query($db, "SELECT * FROM tb_siswa WHERE id_kelas = '$kodeKelas'");
    return mysqli_num_rows($qryKelasSiswa);
}
function waliKelas($kodeKelas, $db)
{
    $qryWali = mysqli_query($db, "SELECT * FROM `tb_kelas` LEFT JOIN kariyawan ON kariyawan.id_kelas = tb_kelas.id_kelas WHERE tb_kelas.id_kelas = $kodeKelas LIMIT 1;");
    $namaWali = mysqli_fetch_array($qryWali);
    $namaWali['nama_kariyawan'] == null ? $wali = "Belum dipilih" : $wali = $namaWali['nama_kariyawan'];
    return $wali;
}
function seluruhKelas($db)
{
    $qryKelas = mysqli_query($db, "SELECT * FROM tb_kelas WHERE status_kelas = 1 ORDER BY nama_kelas ASC");
    return $qryKelas;
}
