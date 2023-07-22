<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($title) ? $title : '' ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= baseurl() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= baseurl() ?>assets/dist/css/adminlte.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <!-- <div class="content-wrapper"> -->
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <div class="error-page" style="margin:100px auto 0;">
                    <h2 class="headline text-warning"><?= isset($headline) ? $headline : '' ?></h2>

                    <div class="error-content">
                        <h3><i class="fas fa-exclamation-triangle text-warning"></i> <?= isset($header) ? $header : '' ?></h3>

                        <p>
                            <?= isset($message) ? $message : '' ?></p>
                        <p>
                            Meanwhile, you may <a href="<?= baseurl('/home') ?>">return to home</a> or try using the search form.
                        </p>

                        <form class="search-form">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.input-group -->
                        </form>
                    </div>
                    <!-- /.error-content -->
                </div>
                <!-- /.error-page -->
            </section>
            <!-- /.content -->
            <!-- </div> -->
        </div>
        <!-- ./wrapper -->
    </div>
    <!-- fluid -->

    <!-- jQuery -->
    <script src="<?= baseurl() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= baseurl() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= baseurl() ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>