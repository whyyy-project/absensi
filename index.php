<?php
include "query/koneksi.php";
//session untuk login
session_start();
// session untuk logout
// contoh session

if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $query_akun = mysqli_query($db, "SELECT * FROM akun LEFT JOIN kariyawan ON akun.id_akun = kariyawan.id_kariyawan WHERE akun.username = '$username' AND akun.password = MD5('$password') LIMIT 1;");
    $data_akun = mysqli_fetch_array($query_akun);

    $_SESSION['nama'] = $data_akun['nama_kariyawan'];
    $_SESSION['id'] = $data_akun['id_kariyawan'];
    $_SESSION['level'] = $data_akun['level_akun'];
    header("location:./?hlm=dashboard");
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
            case 'login':
                include "./public/view/layouts/login.php";
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
    $title = "admin | Sistem Absensi";
    if (isset($_REQUEST['hlm'])) {
        $hlm = $_REQUEST['hlm'];
        switch ($hlm) {
            case 'dashboard':
                include "./public/view/layouts/admin/admin_dashboard.php";
                break;
            case 'kelas':
                include "./public/view/layouts/admin/data_kelas.php";
                break;
            case 'guru':
                include "./public/view/layouts/admin/data_guru.php";
                break;
            case 'siswa':
                include "./public/view/layouts/admin/data_siswa.php";
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
