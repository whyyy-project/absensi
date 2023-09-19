<?php
include "query/guru/dashboard.php";
include "query/guru/rekap_absensi.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= strtoupper($_SESSION['rekap']) . "_" . $idKelas['nama_kelas'] ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <a href="?hlm=rekap" class="btn btn-outline-primary m-3">« Back to Rekap</a>
    <div class="mt-3 ml-5">
        <h3 class="mb-3">Data Absensi <?= strtoupper($_SESSION['rekap']) . " " . $idKelas['nama_kelas'] ?></h3>
        <div class="data-tables datatable-dark">

            <table class="table table-striped" id="mauexport" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Bulan/Tahun</th>
                        <?php for ($i = 1; $i <= 31; $i++) :

                        ?>
                            <th><?= $i ?></th>
                        <?php endfor; ?>
                        <th>Hadir</th>
                        <th>Izin</th>
                        <th>Sakit</th>
                        <th>Alfa</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $no = 1;
                    $hadir = 0;
                    $sakit = 0;
                    $izin = 0;
                    $alfa = 0;
                    ?>
                    <?php foreach ($getRekap as $siswa) : ?>
                        <tr>
                            <td><?= $no;
                                $no++ ?></td>
                            <td><?= $siswa['nama_siswa'] ?></td>
                            <td><?= $siswa['bulan'] ?></td>
                            <?php $hari = date('d'); ?>
                            <?php for ($i = 1; $i <= 31; $i++) : ?>
                                <?php
                                $getDateNow = date('d-m-Y');
                                $hari == $i ? $detail = ' ' : $detail = '';
                                $tglharian =  $i . "-" . $siswa['bulan'];
                                $dateOld = date('D-m-Y', strtotime($tglharian));
                                $date_explode = explode("-", $dateOld);
                                $nama_hari = $date_explode['0'];
                                $date_explode['0'] == "Sun" ? $detail = 'bg-danger text-white' : '';
                                ?>
                                <td class="<?= $detail ?>">
                                    <div class="dropdown">
                                        <span class="<?= $detail ?>">
                                            <?php
                                            if ($nama_hari == "Sun") {
                                                echo "Ahad";
                                            } else if ($siswa[$i] == null && $nama_hari != "Sun") {
                                                echo "A";
                                                $alfa++;
                                            } else {
                                                echo $siswa[$i];
                                                switch ($siswa[$i]) {
                                                    case 'H':
                                                        $hadir++;
                                                        break;
                                                    case 'I':
                                                        $izin++;
                                                        break;
                                                    case 'S':
                                                        $sakit++;
                                                        break;
                                                    case 'A':
                                                        $alfa++;
                                                        break;
                                                }
                                            }

                                            ?>
                                        </span>
                                    </div>
                                </td>
                            <?php endfor; ?>
                            <td><?= $hadir ?></td>
                            <td><?= $izin ?></td>
                            <td><?= $sakit ?></td>
                            <td><?= $alfa ?></td>
                        </tr>
                        <?php
                        $sakit = 0;
                        $hadir = 0;
                        $alfa = 0;
                        $izin = 0; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>