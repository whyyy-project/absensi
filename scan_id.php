<?php
include "query/koneksi.php";
$getID = htmlspecialchars($_GET['id']);
$getMesin = htmlentities($_GET['m']);
$getStat = htmlspecialchars($_GET['stat']);

$waktu = date('H:i:s');
$delete = mysqli_query($db, "DELETE FROM `temp_rfid` WHERE `temp_rfid`.`jenis_scan` = 'absen';");

$insert = mysqli_query($db, "INSERT INTO `temp_rfid` (`id_temp`, `rfid`, `jenis_scan`, `kode_mesin`, `last_use`) VALUES (NULL, '$getID', '$getStat', '$getMesin', '$waktu')");