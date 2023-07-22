<?php
include "query/koneksi.php";
include "query/encrypt.php";
//session untuk login
session_start();
// session untuk logout
// contoh session

if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $_SESSION['temp'] = $username;

    $query_akun = mysqli_query($db, "SELECT * FROM akun LEFT JOIN kariyawan ON akun.id_akun = kariyawan.id_kariyawan WHERE akun.username = '$username' AND akun.password = MD5('$password');");
    $data_akun = mysqli_fetch_array($query_akun);
    if (mysqli_num_rows($query_akun) != 1) {
        header("location:./?hlm=login");
    } else {
        $_SESSION['nama'] = $data_akun['nama_kariyawan'];
        $_SESSION['id'] = $data_akun['id_kariyawan'];
        $_SESSION['level'] = $data_akun['level_akun'];
        header("location:./?hlm=dashboard");
    }
}
if (isset($_POST['changePassword'])) {
    $passwordOld = md5(htmlspecialchars($_POST['passwordOld']));
    $passwordNew = md5(htmlspecialchars($_POST['passwordNew']));
    $idKariyawan = $_SESSION['id'];
    $getData = mysqli_query($db, "SELECT * FROM kariyawan LEFT JOIN akun ON akun.id_akun = kariyawan.id_akun WHERE kariyawan.id_kariyawan = '$idKariyawan' AND akun.password ='$passwordOld'");
    $baris = mysqli_num_rows($getData);
    if ($baris == 1) {
        $updatePw = mysqli_query($db, "UPDATE akun LEFT JOIN kariyawan ON akun.id_akun = kariyawan.id_akun SET akun.password = '$passwordNew' WHERE kariyawan.id_kariyawan = '$idKariyawan' ");
        $status = "berhasil";
    } else {
        $status = "gagal";
    }
    header("location:./?hlm=changePassword&status={$status}");
}

if (isset($_GET['logout'])) {
    session_destroy();
}

if (empty($_SESSION['level'])) {
    if (isset($_REQUEST['hlm'])) {
        $hlm = $_REQUEST['hlm'];
        switch ($hlm) {
            case 'scan':
                include "./public/view/layouts/scan.php";
                break;
            case 'login':
                include "./public/view/layouts/login.php";
                break;
            case 'cover':
                include "./public/view/layouts/cover.php";
                break;
            case '404':
                include "./public/view/eror/404.php";
                break;
            default:
                include "./public/view/layouts/cover.php";
        }
    } else {
        include "./public/view/layouts/cover.php";
    }
    return;
}

if ($_SESSION['level'] == "guru") {
    $title = "Guru | Sistem Absensi";
    if (isset($_REQUEST['hlm'])) {
        $hlm = $_REQUEST['hlm'];
        switch ($hlm) {
            case 'dashboard':
                include "./public/view/layouts/guru/dashboard.php";
                break;
            case 'wali':
                include "./public/view/layouts/guru/wali_kelas.php";
                break;
            case 'rekap':
                include "./public/view/layouts/guru/rekap.php";
                break;
            case 'cover':
                include "./public/view/layouts/cover.php";
                break;
            case '404':
                include "./public/view/eror/404.php";
                break;
            case 'scan':
                include "./public/view/layouts/scan.php";
                break;
            default:
                include "./public/view/layouts/guru/dashboard.php";
                break;
        }
    } else {
        include "./public/view/layouts/cover.php";
    }
}

if ($_SESSION['level'] == "admin") {
    if (isset($_POST['tambah-kelas'])) {
        $namaKelas = htmlspecialchars($_POST['nama-kelas']);
        $tambahKelas = mysqli_query($db, "INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES (NULL, '$namaKelas')");
        $tambahKelas ? $stat = "berhasil" : $stat = "gagal";
    }
    $title = "admin | Sistem Absensi";
    if (isset($_REQUEST['hlm'])) {
        $hlm = $_REQUEST['hlm'];
        switch ($hlm) {
            case 'dashboard':
                include "./public/view/layouts/admin/admin_dashboard.php";
                break;
            case 'TambahKelas':
                include "./public/view/layouts/admin/tambah_kelas.php";
                break;
            case 'DataKelas':
                include "./public/view/layouts/admin/data_kelas.php";
                break;
            case 'guru':
                include "./public/view/layouts/admin/data_guru.php";
                break;
            case 'siswa':
                include "./public/view/layouts/admin/data_siswa.php";
                break;
            case 'cover':
                include "./public/view/layouts/cover.php";
                break;
            case '404':
                include "./public/view/eror/404.php";
                break;
            case 'scan':
                include "./public/view/layouts/scan.php";
                break;
            default:
                include "./public/view/layouts/admin/admin_dashboard.php";
                break;
        }
    } else {
        include "./public/view/layouts/cover.php";
    }
}
