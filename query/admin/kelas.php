<?php
$qry_kelas = mysqli_query($db, "SELECT * FROM tb_kelas");

function totalSiswa($kodeKelas, $db)
{
    $qryKelasSiswa = mysqli_query($db, "SELECT * FROM tb_siswa WHERE id_kelas = '$kodeKelas'");
    return mysqli_num_rows($qryKelasSiswa);
}
