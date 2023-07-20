<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Sistem Absensi</title>

    <!-- Custom fonts for this template-->
    <link href="public/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="public/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/images/abror.ico" />

    <style>
        .bg-login-image-2 {
            background: url("public/images/cover/slide-3.png");
            background-position: center;
            background-size: cover;
        }
    </style>

</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image-2"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                                    </div>
                                    <form class="user" action="./" method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" value="<?= isset($_SESSION['temp']) ? $_SESSION['temp']  : '' ?>" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Enter Username..." style=" <?= isset($_SESSION['temp']) ? 'border-color: red;'  : '' ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" oninput="validation()" id="passwordAkun" style=" <?= isset($_SESSION['temp']) ? 'border-color: red;'  : '' ?>" placeholder="Password">
                                        </div>
                                        <div class="badge badge-danger d-none" role="alert" id="minLenght">
                                            Minimal Password 8 digit !
                                        </div>
                                        <div class="badge badge-danger <?= isset($_SESSION['temp']) ? ''  : 'd-none' ?>" role="alert" id="minLenght">
                                            Username atau Password salah !
                                        </div>
                                        <div class="form-group sh">
                                        </div>
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="./" class="btn btn-link">Back to Dashboard</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script>
        function validation() {
            const inputPassword = document.getElementById("passwordAkun").value;
            if (inputPassword.length < 8) {
                inputPassword.style.borderColor = '#dc3545';
                document.getElementById("minLenght").classList.remove('d-none');
            } else {
                inputPassword.style.borderColor = '';
                document.getElementById("minLenght").classList.add('d-none');

            }
        }
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="public/assets/vendor/jquery/jquery.min.js"></script>
    <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="public/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="public/assets/js/sb-admin-2.min.js"></script>

</body>

</html>