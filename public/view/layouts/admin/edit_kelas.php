<?php
// memanggil partials
include "public/view/layouts/header.php";
include "public/view/partials/admin/admin_sidebar.php";
include "public/view/partials/admin/admin_wrapper.php";
include "public/view/partials/admin/admin_modal.php";
include "query/admin/kelas.php";

?>
<?php
if (isset($_GET['opt'])) {
    $id_kelas = decrypt($_GET['id'], $key);
    switch ($_GET['opt']) {
        case 'aktif':
            $update = mysqli_query($db, "UPDATE `tb_kelas` SET `status_kelas` = '1' WHERE `tb_kelas`.`id_kelas` = $id_kelas;");
            $update ? $notif = "Berhasil Update Status Kelas" : $notif = "Gagal Update Status Kelas";
            $update ? $class = "success" : $class = "danger";
            break;
        case 'lulus':
            $update = mysqli_query($db, "UPDATE `tb_kelas` SET `status_kelas` = '0' WHERE `tb_kelas`.`id_kelas` = $id_kelas;");
            $update ? $notif = "Berhasil Update Status Kelas"  : $notif = "Gagal Update Status Kelas";
            $update ? $class = "success" : $class = "danger";
            break;
        case 'wali':
            $kariyawan = decrypt($_GET['wali'], $key);;
            $update = mysqli_query($db, "UPDATE `kariyawan` SET `id_kelas` = '$id_kelas' WHERE `kariyawan`.`id_kariyawan` = '$kariyawan'");
            $update ? $notif = "Berhasil Update Wali Murid"  : $notif = "Gagal Update Wali Murid";
            $update ? $class = "success" : $class = "danger";
        case 'nama-kelas':
            if (empty($_POST['update-nama-kelas']) && empty($_POST['nama_kelas'])) {
                $notif = "Gagal Update, Data kosong";
                $class = "danger";
            } else {
                $nama_kelas = htmlspecialchars($_POST['nama_kelas']);
                $update = mysqli_query($db, "UPDATE `tb_kelas` SET `nama_kelas` = '$nama_kelas' WHERE `tb_kelas`.`id_kelas` = $id_kelas;");
                $update ? $notif = "Berhasil Update Nama Kelas"  : $notif = "Gagal Update Nama Kelas";
                $update ? $class = "success" : $class = "danger";
            }
            break;
        case 'angkatan':
            if (empty($_POST['update-angkatan']) && empty($_POST['angkatan'])) {
                $notif = "Gagal Update, Data kosong";
                $class = "danger";
            } else {
                $angkatan = htmlspecialchars($_POST['angkatan']);
                $update = mysqli_query($db, "UPDATE `tb_kelas` SET `angkatan_kelas` = '$angkatan' WHERE `tb_kelas`.`id_kelas` = $id_kelas;");
                $update ? $notif = "Berhasil Update Nama Kelas"  : $notif = "Gagal Update Nama Kelas";
                $update ? $class = "success" : $class = "danger";
            }
            break;
    }
}

?>
<?php
$encryptID = htmlspecialchars($_GET['id']);
$id_kelas = decrypt($encryptID, $key);
$data_kelas = mysqli_query($db, "SELECT * FROM tb_kelas LEFT JOIN kariyawan ON tb_kelas.id_kelas = kariyawan.id_kelas WHERE tb_kelas.id_kelas = '$id_kelas'");
$dataSpesifik = mysqli_fetch_array($data_kelas);

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelas <?= $dataSpesifik['nama_kelas'] ?></h1>

    </div>
    <!-- end page heading -->
    <?php if (isset($notif)) : ?>
        <div class="alert alert-<?= $class ?>" role="alert">
            <?= $notif ?>
            <div class="badge badge-<?= $class ?>" role="alert" id="minLenght">
                <a href="?hlm=DataKelas" class="text-decoration-none text-white">lihat daftar Kelas</a>
            </div>
        </div>
    <?php endif; ?>

    <!-- Content Row -->
    <div class="row">
        <!-- Area top -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Setting Data Kelas</h6>
                </div>
                <div class="card-body">

                    <div class="dropdown mb-2">
                        <label for="status" class="col-6"> Status Kelas</label>
                        <button class="btn btn-outline-secondary col-5 text-center dropdown-toggle" type="button" id="status" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="#">
                            <span class=""><?= $dataSpesifik['status_kelas'] == 1 ? "Aktif" : "Lulus" ?></span>
                        </button>
                        <div class="dropdown-menu col-5 text-center" aria-labelledby="status">
                            <a class="dropdown-item" href="?hlm=detail-kelas&id=<?= $_GET['id'] ?>&opt=aktif" data-value="Aktif">Aktif</a>
                            <a class="dropdown-item" href="?hlm=detail-kelas&id=<?= $_GET['id'] ?>&opt=lulus" data-value="Lulus">Lulus</a>
                        </div>
                    </div>
                    <div class="dropdown mb-2">
                        <label for="wali" class="col-6">Wali Kelas</label>
                        <button class="btn btn-outline-secondary col-5 text-center dropdown-toggle" type="button" id="wali" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-selected="<?= $siswa[$i] ?>">
                            <span class=""><?= $dataSpesifik['nama_kariyawan'] != null ? $dataSpesifik['nama_kariyawan'] : 'Wali Kelas belum ditentukan' ?></span>
                        </button>
                        <div class="dropdown-menu col-5 text-center" aria-labelledby="wali">
                            <?php $hitung = 1; ?>
                            <?php foreach (showWali($db) as $wali) : ?>
                                <a class="dropdown-item" href="?hlm=detail-kelas&id=<?= $_GET['id'] ?>&opt=wali&wali=<?= encrypt($wali['id_kariyawan'], $key) ?>" data-value="Aktif"><?= $wali['nama_kariyawan'] ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <form action="?hlm=detail-kelas&id=<?= $_GET['id'] ?>&opt=nama-kelas" method="post">
                        <div class="form-group d-flex mb-2">
                            <label for="nama-kelas" class="col-6 mt-2">Nama Kelas</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-center col-8" placeholder="Nama Kelas" aria-label="Nama Kelas" name="nama_kelas" aria-describedby="button-addon2" value="<?= $dataSpesifik['nama_kelas'] ?>">
                                <button class="btn btn-outline-secondary ml-2" name="update-nama-kelas" type="submit" id="Nama Kelas">Update</button>
                            </div>
                        </div>
                    </form>
                    <form action="?hlm=detail-kelas&id=<?= $_GET['id'] ?>&opt=angkatan" method="post">
                        <div class="form-group d-flex mb-2">
                            <label for="nama-kelas" class="col-6 mt-2">Angkatan</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-center col-8" placeholder="Angkatan Kelas" aria-label="angkatan Kelas" name="angkatan" aria-describedby="button-addon2" value="<?= $dataSpesifik['angkatan_kelas'] ?>">
                                <button class="btn btn-outline-secondary ml-2" name="update-angkatan" type="submit" id="button-addon2">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end area top -->
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Siswa Kelas</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>


                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Id Card</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                ?>
                                <?php foreach (siswaByKelas($id_kelas, $db) as $data) : ?>
                                    <tr class="text-center">
                                        <td><?= $no;
                                            $no++ ?></td>
                                        <td><?= $data['uuid'] ?></td>
                                        <td><?= $data['nis'] ?></td>
                                        <td><?= $data['nama_siswa'] ?></td>
                                        <td><?= $data['status'] == 1 ? "Aktif" : "Lulus/Keluar" ?></td>
                                        <td>
                                            <a href="?hlm=edit-siswa&id=<?= encrypt($data['id_siswa'], $key) ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>


        </div>
        <!-- end row -->
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include "public/view/layouts/footer.php";
?>