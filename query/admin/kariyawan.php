<?php
$qryKariyawan = mysqli_query($db, "SELECT * FROM kariyawan LEFT JOIN akun ON akun.id_akun = kariyawan.id_akun ORDER BY akun.level_akun DESC");
