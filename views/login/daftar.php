<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= baseurl() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= baseurl() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= baseurl() ?>assets/dist/css/adminlte.min.css">
    <!-- pace-progress -->
    <link rel="stylesheet" href="<?= baseurl('/assets') ?>/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= baseurl() ?>assets/plugins/toastr/toastr.min.css">
</head>

<body class="pace-primary login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <p class="h2"><b><?= $title ?></b></p>
            </div>
            <div class="card-body">
                <form action="<?= baseurl('/auth') ?>" method="post">
                    <input type="hidden" name="daftar">
                    <div class="input-group mb-3">
                        <input type="text" id="username" name="username" class="form-control <?= (hasFlashError('user-has')) ? 'is-invalid' : ''; ?>" placeholder="Username" value="<?= old('username') ?>" autocomplete="off" autofocus>
                        <div class="invalid-feedback">
                            <?= getFlash('registered'); ?>
                        </div>
                    </div>
                    <?php $pass = old('password') ?>
                    <div class="input-group mb-3">
                        <input type="text" id="password" name="password" class="form-control" placeholder="Password" value="<?= $pass ?>">
                    </div>
                    <!-- <div class="input-group mb-3">
                        <input type="text" id="no_kwh" name="no_kwh" class="form-control" placeholder="Nomor KWH" value="" disabled>
                    </div> -->
                    <div class="input-group mb-3">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama Lengkap" value="<?= old('name') ?>">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" value="<?= old('alamat') ?>">
                    </div>
                    <!-- <div class="input-group mb-3">
                        <input type="text" id="id_tarif" name="id_tarif" class="form-control" placeholder="ID Tarif" value="" disabled>
                    </div> -->
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4 mb-2">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-2 mb-0">
                    <a href="<?= baseurl('/login') ?>">Log In</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= baseurl() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= baseurl() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= baseurl() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- pace-progress -->
    <script src="<?= baseurl('/assets') ?>/plugins/pace-progress/pace.min.js"></script>
    <!-- Toastr -->
    <script src="<?= baseurl() ?>assets/plugins/toastr/toastr.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            err = $('username').val()
            // location.reload();
        });
    </script>
</body>

</html>