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
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= baseurl('/assets') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= baseurl('/assets') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= baseurl('/assets') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= baseurl() ?>/assets/plugins/toastr/toastr.min.css">
    <!-- jQuery -->
    <script src="<?= baseurl('/assets') ?>/plugins/jquery/jquery.min.js"></script>
</head>

<body class="pace-primary sidebar-collapse">

    <?php load(JUMPUP . VIEWSPATH . 'template/navbar' . PHPEXT); ?>
    <?php $this->renderSection($render) ?>


    <!-- Bootstrap 4 -->
    <script src="<?= baseurl('/assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- pace-progress -->
    <script src="<?= baseurl('/assets') ?>/plugins/pace-progress/pace.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= baseurl('/assets') ?>/dist/js/adminlte.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= baseurl('/assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= baseurl('/assets') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Toastr -->
    <script src="<?= baseurl() ?>/assets/plugins/toastr/toastr.min.js"></script>

    <script>
        $(function() {
            $("#pelanggan").DataTable({
                "responsive": false,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#pelanggan_wrapper .col-md-6:eq(0)');
        });
        $(function() {
            $("#tarif").DataTable({
                "responsive": false,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tarif_wrapper .col-md-6:eq(0)');
        });
        $(function() {
            $("#penggunaan").DataTable({
                "responsive": false,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#penggunaan_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>