<?php
$qrySiswa = mysqli_query($db, "SELECT * FROM tb_siswa LEFT JOIN tb_kelas ON tb_kelas.id_kelas = tb_siswa.id_kelas ORDER BY tb_siswa.angkatan DESC;");
