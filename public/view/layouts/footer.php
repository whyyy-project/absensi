<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Whyyy-Project <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<script>
    function togglePassword(inputId) {
        const passwordInput = document.getElementById(inputId);
        const icon = passwordInput.nextElementSibling.querySelector('i');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordInput.type = "password";
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    }

    function validatePassword() {
        const passwordNew = document.getElementById("passwordNew").value;
        const passwordConfirm = document.getElementById("passwordConfirm").value;
        if (passwordNew !== passwordConfirm) {
            alert("Password Baru tidak sesuai.");
            return false; // Prevent form submission
        }
        if ((passwordNew.length < 8) || (passwordConfirm < 8)) {
            alert("Minimal Password 8 digit.");
            return false; // Prevent form submission
        }
        return true; // Proceed with form submission
    }

    function autoValidate() {
        const passwordNew = document.getElementById("passwordNew").value;
        const passwordConfirm = document.getElementById("passwordConfirm").value;
        const alertConfirm = document.getElementById("alertPw");
        if ((passwordNew.length < 8) || (passwordConfirm < 8)) {
            document.getElementById("minLenght").classList.remove('d-none');
        } else {
            document.getElementById("minLenght").classList.add('d-none');

        }
        if (passwordNew !== passwordConfirm) {
            alertConfirm.classList.remove('d-none');
            document.getElementById("passwordConfirm").style.borderColor = '#dc3545';
        } else {
            alertConfirm.classList.add('d-none');
            document.getElementById("passwordConfirm").style.borderColor = '';
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
<script src="public/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="public/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="public/assets/js/demo/datatables-demo.js"></script>
</body>

</html>