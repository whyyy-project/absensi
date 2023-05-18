<?php
//session untuk login
session_start();
// session untuk logout
// session_destroy();
// contoh session
$_SESSION['level'] = "guru";
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

if (isset($_SESSION['level']) == "guru") {
    $title = "Guru | Sistem Absensi";
    if (isset($_REQUEST['hlm'])) {
        $hlm = $_REQUEST['hlm'];
        switch ($hlm) {
            case 'guru':
                include "./public/view/layouts/guru/dashboard.php";
                break;
            case 'wali':
                include "./public/view/layouts/guru/wali_kelas.php";
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
                include "./public/view/layouts/guru/dashboard.php";
                break;
        }
    } else {
        include "./public/view/layouts/cover.php";
    }
}