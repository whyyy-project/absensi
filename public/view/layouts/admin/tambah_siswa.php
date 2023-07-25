<?php
// memanggil partials
include "public/view/layouts/header.php";
include "public/view/partials/admin/admin_sidebar.php";
include "public/view/partials/admin/admin_wrapper.php";
include "public/view/partials/admin/admin_modal.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Siswa</h1>
    </div>
    <?php include "query/admin/kelas.php" ?>
    <?php
    if (isset($stat) == "berhasil") {
        $class = "success";
        $message = "Berhasil menambah Siswa";
        $uuid == 'Belum terisi' ? ''  : mysqli_query($db, "DELETE FROM temp_rfid WHERE `temp_rfid`.`rfid` = '$uuid'");
    } elseif (isset($stat) == "gagal") {
        $class = "danger";
        $message = "Gagal menambah Siswa !";
    } else {
        $class = " d-none";
        $message = "";
    } ?>
    <div class="alert alert-<?= $class ?>" role="alert">
        <?= $message ?>
        <div class="badge badge-<?= $class ?>" role="alert" id="minLenght">
            <a href="?hlm=siswa" class="text-decoration-none text-white <?= $class ?>">lihat daftar kelas</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="p-3">
                    <div class="text-center">
                        <h4 class="text-gray-900 m-4">Form Tambah Siswa</h4>
                    </div>
                    <form action="?hlm=tambah-siswa" method="post" class="user">
                        <div class="form-group d-flex">
                            <label for="nama-siswa" class="col-4 mt-2 text-center">Nama Siswa </label>
                            <input type="text" name="nama-siswa" id="nama-siswa" class="text-center form-control col-6" placeholder="Nama Siswa">
                        </div>
                        <div class="form-group d-flex">
                            <label for="nis" class="col-4 mt-2 text-center">NIS</label>
                            <input type="text" name="nis" id="nama-kelas" class="text-center form-control col-6" placeholder="NIS Siswa">
                        </div>
                        <div class="form-group d-flex">
                            <label for="angkatan" class="col-4 mt-2 text-center">Angkatan</label>
                            <input type="text" name="angkatan" id="nama-kelas" class="text-center form-control col-6" placeholder="Angkatan Kelas">
                        </div>
                        <div id="id-card"></div>
                        <div class="form-group d-flex">
                            <label for="kelas" class="col-4 mt-2 text-center">Kelas</label>
                            <select class="custom-select col-6 text-center" name="kelas" id="kelas" required>
                                <option value="" disabled selected>Pilih Kelas</option>
                                <?php foreach (seluruhKelas($db) as $kelas) : ?>
                                    <option value="<?= encrypt($kelas['id_kelas'], $key) ?>"><?= $kelas['nama_kelas'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <div class="form-group text-center mt-5">
                            <button type="submit" name="tambah-siswa" class="btn btn-success">Simpan</button>
                            <a href="?hlm=siswa" class="btn btn-danger ml-3">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    // Mendapatkan referensi ke elemen div dengan id "id_card"
    var idCardDiv = document.getElementById("id-card");

    // Fungsi untuk memuat isi file content.php ke dalam elemen div
    function loadContent() {
        // Membuat objek XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Menentukan metode dan URL untuk permintaan AJAX
        xhr.open("GET", "query/admin/id_card.php", true);

        // Mengatur fungsi penanganan ketika permintaan selesai
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Mengisi isi div dengan respon dari content.php
                idCardDiv.innerHTML = xhr.responseText;
            }
        };

        // Mengirim permintaan AJAX
        xhr.send();
    }

    // Memanggil fungsi loadContent setiap detik
    setInterval(loadContent, 1000);
</script>
<?php
include "public/view/layouts/footer.php";
?>