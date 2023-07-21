<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="./?logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- modal change password -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Ubah Password ?</h1>
                    </div>
                    <form class="user" action="./?hlm=dashboard" method="post" onsubmit="return validatePassword()">
                        <div class="form-group position-relative">
                            <input type="password" name="passwordOld" class="form-control form-control-user" id="passwordOld" aria-describedby="emailHelp" placeholder="Enter Old Password" pattern=".{8,}">
                            <span class="toggle-password" onclick="togglePassword('passwordOld')">
                                <i class="fas fa-solid fa-eye-slash"></i>
                            </span>
                        </div>
                        <div class="form-group position-relative">
                            <input type="password" name="passwordNew" class="form-control form-control-user" id="passwordNew" placeholder="New Password" pattern=".{8,}" oninput="autoValidate()">
                            <span class="toggle-password" onclick="togglePassword('passwordNew')">
                                <i class="fas fa-solid fa-eye-slash"></i>
                            </span>
                        </div>
                        <div class="form-group position-relative">
                            <input type="password" name="passwordConfirm" class="form-control form-control-user" id="passwordConfirm" placeholder="Confirm New Password" oninput="autoValidate()">
                            <span class="toggle-password" onclick="togglePassword('passwordConfirm')">
                                <i class="fas fa-solid fa-eye-slash"></i>
                            </span>
                        </div>
                        <div class="badge badge-danger d-none" role="alert" id="alertPw">
                            Password tidak sama!
                        </div>
                        <div class="badge badge-danger d-none" role="alert" id="minLenght">
                            Minimal Password 8 digit!
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" name="changePassword" class="btn btn-danger btn-user btn-block">
                                    Ubah
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-secondary btn-user btn-block" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>