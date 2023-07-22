<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($title) ? $title : 'Pembayaran Listrik Pascabayar' ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= baseurl('/assets') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- pace-progress -->
    <link rel="stylesheet" href="<?= baseurl('/assets') ?>/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
    <!-- adminlte-->
    <link rel="stylesheet" href="<?= baseurl('/assets') ?>/dist/css/adminlte.min.css">
</head>

<body class="pace-primary sidebar-collapse">

    <?php load(JUMPUP . VIEWSPATH . 'template/navbar' . PHPEXT); ?>
    <?php $this->renderSection($render) ?>


    <!-- jQuery -->
    <script src="<?= baseurl('/assets') ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= baseurl('/assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- pace-progress -->
    <script src="<?= baseurl('/assets') ?>/plugins/pace-progress/pace.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= baseurl('/assets') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>