<?php
//session untuk login
session_start();
// session untuk logout
session_destroy();
// contoh session
<<<<<<< HEAD
// $_SESSION['level'] = "admin";
=======
$_SESSION['level'] = "guru";
>>>>>>> 4df6fb6c4f05e1b7d9c58ff6a550ffec12e3ff5a
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

<<<<<<< HEAD
if (isset($_SESSION['level']) == "admin") {
    $title = "admin | Sistem Absensi";
    if (isset($_REQUEST['hlm'])) {
        $hlm = $_REQUEST['hlm'];
        switch ($hlm) {
            case 'admin':
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
            default:
                include "./public/view/layouts/admin/admin_dashboard.php";
                break;
        }
    } else {
        include "./public/view/layouts/cover.php";
    }
}
=======
// if ($_SESSION['level'] == "admin") {
//     $title = "admin | Sistem Absensi";
//     if (isset($_REQUEST['hlm'])) {
//         $hlm = $_REQUEST['hlm'];
//         switch ($hlm) {
//             case 'admin':
//                 include "./public/view/layouts/admin/admin_dashboard.php";
//                 break;
//             case 'kelas':
//                 include "./public/view/layouts/admin/data_kelas.php";
//                 break;
//             case 'guru':
//                 include "./public/view/layouts/admin/data_guru.php";
//                 break;
//             case 'siswa':
//                 include "./public/view/layouts/admin/data_siswa.php";
//                 break;
//             case 'login':
//                 include "./public/view/layouts/login.php";
//                 break;
//             case 'cover':
//                 include "./public/view/layouts/cover.php";
//                 break;
//             case '404':
//                 include "./public/view/eror/404.php";
//                 break;
//             default:
//                 include "./public/view/layouts/admin/admin_dashboard.php";
//                 break;
//         }
//     } else {
//         include "./public/view/layouts/cover.php";
//     }
// }
>>>>>>> 4df6fb6c4f05e1b7d9c58ff6a550ffec12e3ff5a
