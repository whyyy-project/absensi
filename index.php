<?php
//session untuk login
session_start();
// session untuk logout
// session_destroy();
// contoh session
$_SESSION['level'] = "admin";

if (isset($_POST['login'])) {
    echo "login";
}


include "query/koneksi.php";
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
