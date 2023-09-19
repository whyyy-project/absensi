<?php
$qryKariyawan = mysqli_query($db, "SELECT * FROM kariyawan LEFT JOIN akun ON akun.id_akun = kariyawan.id_akun LEFT JOIN tb_kelas ON kariyawan.id_kelas = tb_kelas.id_kelas ORDER BY akun.level_akun DESC");
