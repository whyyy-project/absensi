<?php
include "../koneksi.php";

$qryIdCard = mysqli_query($db, "SELECT * FROM temp_rfid WHERE jenis_scan = 'tambah' ORDER BY id_temp DESC LIMIT 1");
if (mysqli_num_rows($qryIdCard) < 1) {
    $data = "Harap Scan";
} else {
    $isi = mysqli_fetch_array($qryIdCard);
    $data = $isi['rfid'];
    $time_explode = explode(":", $isi['last_use']);
    $last_use = $time_explode[0] . $time_explode[1] . $time_explode[2];
    $interval = $last_use - date('His');
    $interval < -300 ? mysqli_query($db, "DELETE FROM `temp_rfid` WHERE `temp_rfid`.`rfid` = '$data'") : '';
} ?>

<div class="form-group d-flex">
    <label for="idcard" class="col-4 mt-2 text-center">ID Card</label>
    <input type="text" name="uuid" id="idcard" class="text-center form-control col-6" placeholder="Harap Scan ID Card" readonly value="<?= $data ?>">
</div>