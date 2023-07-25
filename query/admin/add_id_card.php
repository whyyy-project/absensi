<?php
function getData($db)
{
    $qryIdCard = mysqli_query($db, "SELECT * FROM temp_rfid WHERE jenis_scan 'tambah' ORDER BY id_temp DESC LIMIT 1");
    $isi = mysqli_fetch_array($qryIdCard);
    $qryIdCard = null ? $data = "Kosong" : $data = $isi['rfid'];
    return $data;
}
