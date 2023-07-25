<?php
$qrySiswa = mysqli_query($db, "SELECT * FROM tb_siswa LEFT JOIN tb_kelas ON tb_kelas.id_kelas = tb_siswa.id_kelas ORDER BY tb_siswa.angkatan DESC;");

if (isset($_GET['id'])) {
    $uuid = htmlspecialchars($_GET['id']);
    $querySiswa = mysqli_query($db, "SELECT * FROM tb_siswa WHERE uuid = '$uuid' ORDER BY id_siswa DESC LIMIT 1");
    $getSiswa = mysqli_fetch_array($querySiswa);
}
