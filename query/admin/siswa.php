<?php
$qrySiswa = mysqli_query($db, "SELECT * FROM tb_siswa LEFT JOIN tb_kelas ON tb_kelas.id_kelas = tb_siswa.id_kelas ORDER BY tb_siswa.angkatan DESC;");

if (isset($_GET['id'])) {
    $encryptUUID = htmlspecialchars($_GET['id']);
    $uuid = decrypt($encryptUUID, $key);
    $querySiswa = mysqli_query($db, "SELECT * FROM tb_siswa WHERE id_siswa = '$uuid' ORDER BY id_siswa DESC LIMIT 1");
    $getSiswa = mysqli_fetch_array($querySiswa);
}
