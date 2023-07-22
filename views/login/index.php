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

<body class="pace-primary login-page" style="background-color:#bbb;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <p class="h2"><b><?= $title ?></b></p>
            </div>
            <div class="card-body">
                <!-- <?php //if (getFlash('wrong-pass') != null) : 
                        ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span style="color:cornsilk"><? //= //getFlash('wrong-pass'); 
                                                        ?></span>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php //endif; 
                ?> -->
                <form action="<?= baseurl('/auth') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" id="username" name="username" class="form-control <?= (hasFlashError('user-has')) ? 'is-invalid' : ''; ?>" placeholder="Username" value="<?= old('username') ?>" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= getFlash('no-user'); ?>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <?php $pass = old('password') ?>
                        <input type="password" id="password" name="password" class="form-control <?= (hasFlashError('pass-has')) ? 'is-invalid' : ''; ?>" placeholder="Password" value="<?= $pass ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            <?= getFlash('wrong-pass'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
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
    </script>
</body>

</html>