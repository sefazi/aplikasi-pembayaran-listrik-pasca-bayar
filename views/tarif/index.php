<?php $this->extend('template/page'); ?>
<?php $this->section('tarif'); ?>
<div class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tarif</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pembayaran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 id="h3-title" class="card-title">Masukan Tarif</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="form_" action="<?= baseurl('/tarif') ?>" method="post">
                            <input type="hidden" id="type" name="type" value="insert">
                            <input type="hidden" id="id" name="id" value="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="daya">Masukkan Daya</label>
                                    <input type="text" id="daya" name="daya" class="form-control" placeholder="Masukkan Daya" required value="" list="day">
                                    <datalist id="day">
                                        <option value="450">450VA</option>
                                        <option value="900">900VA</option>
                                        <option value="1300">1300VA</option>
                                        <option value="2200">2200VA</option>
                                    </datalist>
                                </div>
                                <div class="form-group">
                                    <label>TARIF/KWH</label>
                                    <input type="text" id="tarifperkwh" name="tarif" class="form-control" placeholder="Masukkan Tarif" required value="">
                                </div>
                                <button id="btn-submit" type="button" onclick="_submit()" class="btn btn-block btn-outline-primary">Submit</button>
                                <button type="reset" class="btn btn-block btn-outline-primary">Reset</button>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                </div><!-- pnutup col -->
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Tarif</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="tarif" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Tarif</th>
                                        <th>Tarif/KwH</th>
                                        <th width="20">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1;
                                    foreach ($datatable as $key => $value) : ?>
                                        <tr>
                                            <td><?= $index ?></td>
                                            <td><?= $value->daya ?></td>
                                            <td><?= $value->tarifperkwh ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <!-- <button type="button" onclick="" class="btn btn-sm btn-default"><i class="fas fa-trash"></i></button> -->
                                                    <button type="button" onclick="edit('edit','<?= $value->id_tarif ?>','<?= $value->daya ?>','<?= $value->tarifperkwh ?>');" class="btn btn-sm btn-default"><i class="fas fa-edit"></i></button>
                                                </div>
                                            </td>
                                            <?php $index++ ?>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<script>
    function edit(type, id, daya, tarif) {
        $('#type').val(type);
        $('#id').val(id);
        $('#daya').val(daya);
        $('#tarifperkwh').val(tarif);
        $('#btn-submit').html('Edit')
        $('#h3-title').html('Edit Tarif')
    }

    function _submit() {
        $('#form_').submit();
    }
</script>
<!-- Toastr -->
<script src="<?= baseurl() ?>/assets/plugins/toastr/toastr.min.js"></script>
<?php if (hasFlashError('daya-has')) : ?>
    <script>
        toastr.info('<?= getFlash('exist'); ?>')
    </script>
<?php endif; ?>
<?php if (hasFlashError('edit-success')) : ?>
    <script>
        toastr.info('<?= getFlash('berhasil-edit'); ?>')
    </script>
<?php endif; ?>
<?php $this->endSection(); ?>