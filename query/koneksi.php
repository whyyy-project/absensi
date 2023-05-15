<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "app_absensi";
$db = mysqli_connect($host, $username, $password, $database);
date_default_timezone_set('Asia/Jakarta');

if (!$db) {
    return;
}