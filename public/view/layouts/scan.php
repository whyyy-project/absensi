<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scan Absensi</title>

    <!-- Custom fonts for this template-->
    <link href="public/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="public/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/images/abror.ico" />


    <style>
        .bg-scan-image {
            background-image: url("public/images/scan_image.jpg");
            background-position: center;
            background-size: cover;
        }

        .bg-scan2-image {
            background-image: url("public/images/scan_image2.jpg");
            background-position: center;
            background-size: cover;
        }

        .bg-scan3-image {
            background-image: url("public/images/scan_image3.jpg");
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;

        }

        .bg-scan4-image {
            background-image: url("public/images/goodbye.jpg");
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body class="bg-gradient-success d-flex">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- content card -->
                        <div id="id_card"> </div>
                        <!-- end content card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="public/assets/vendor/jquery/jquery.min.js"></script>
    <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="public/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="public/assets/js/sb-admin-2.min.js"></script>

    <script>
        // Mendapatkan referensi ke elemen div dengan id "id_card"
        var idCardDiv = document.getElementById("id_card");

        // Fungsi untuk memuat isi file content.php ke dalam elemen div
        function loadContent() {
            // Membuat objek XMLHttpRequest
            var xhr = new XMLHttpRequest();

            // Menentukan metode dan URL untuk permintaan AJAX
            xhr.open("GET", "query/rfid.php", true);

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
</body>

</html>