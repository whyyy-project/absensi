<?php
include "koneksi.php";
$getID = htmlspecialchars($_GET['id']);
$waktu = date('H:i:s');
$delete = mysqli_query($db, "DELETE FROM `temp_rfid` WHERE `temp_rfid`.`jenis_scan` = 'absen';");
$insert = mysqli_query($db, "INSERT INTO `temp_rfid` (`rfid`, `jenis_scan`, `last_use`) VALUES ('$getID', 'absen', '$waktu')
");