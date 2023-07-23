<?php $this->extend('template/page'); ?>
<?php $this->section('penggunaan'); ?>
<div class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Penggunaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Penggunaan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"> <!-- Ubah col-md-4 menjadi col-md-6 -->
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Input Data Penggunaan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="form2" action="<?= baseurl('/penggunaan_input') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Pelanggan</label>
                                    <input name="id_pelanggan" type="text" class="form-control" id="id_pelanggan" placeholder="Masukan ID pelanggan" value="">
                                </div>
                                <div class="form-group">
                                    <label for="text">Bulan</label>
                                    <input name="bulan_penggunaan" type="text" class="form-control" id="bulan_penggunaan" placeholder="Masukan bulan" value="<?= date('F') ?>" disabled>
                                    <input type="hidden" name="bulan_penggunaan_val" value="<?= date('F') ?>">
                                    <input type="hidden" name="tahun_penggunaan_val" value="<?= date('Y') ?>">
                                </div>
                                <div class="form-group">
                                    <label for="text">Meter Awal</label>
                                    <input name="meter_awal" type="text" class="form-control" id="meter_awal" placeholder="Masukan meteran awal" disabled>
                                    <input type="hidden" id="meterAwal" name="meterAwal" value="">
                                </div>
                                <div class="form-group">
                                    <label for="text">Meter Akhir</label>
                                    <input name="meter_akhir" type="number" class="form-control" id="meter_akhir" placeholder="Masukan meter akhir">
                                </div>
                                <!-- /.card-body -->
                                <button type="button" onclick="_submit()" class="btn btn-block btn-outline-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8"> <!-- Tambahkan co-md-6 untuk tabel -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Penggunaan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="penggunaan" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Penggunaan</th>
                                    <th>ID Pelanggan</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Bulan</th>
                                    <th>Meter Awal</th>
                                    <th>Meter Akhir</th>
                                    <!-- <th>Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1;
                                foreach ($datatable as $key => $val) : ?>
                                    <tr>
                                        <td><?= $index ?></td>
                                        <td><?= $val->id_penggunaan ?></td>
                                        <td><?= $val->id_pelanggan ?></td>
                                        <td><?= $val->bulan ?></td>
                                        <td><?= $val->tahun ?></td>
                                        <td><?= $val->meter_awal ?></td>
                                        <td><?= $val->meter_akhir ?></td>
                                    </tr>
                                <?php $index++;
                                endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div>
<!-- /.container-fluid -->

<input type="hidden" id="baseurl" value="<?= baseurl('/get_data_pelanggan') ?>">
<!-- Toastr -->
<script src="<?= baseurl() ?>/assets/plugins/toastr/toastr.min.js"></script>
<script>
    $(document).ready(function() {
        $("#id_pelanggan").on("change", function() {
            let baseUrl = $('#baseurl').val();
            nopelanggan = $('#id_pelanggan').val();

            $.ajax({
                url: baseUrl,
                type: "POST",
                data: {
                    nopelanggan: nopelanggan
                },
                dataType: "json",
                success: function(data) {

                    if (data.nomorMeter == "" || data.nomorMeter == null) {
                        $('#meter_awal').val('0');
                        $('#meterAwal').val('0');
                    } else {
                        $('#meter_awal').val(data.nomorMeter);
                        $('#meterAwal').val(data.nomorMeter);
                    }

                    toastr.info('Data berhasil ditemukan')
                },
                error: function(e) {
                    toastr.info('Data tidak ditemukan')
                }
            });
        });
    });

    function _submit() {
        id = $('#id_pelanggan').val();
        meterAkhir = $('#meter_akhir').val();
        meterAwal = $('#meterAwal').val()



        if (id == "" || id == null) {
            toastr.error('ID Pelanggan tidak boleh kosong');
        } else if (meterAkhir == null || meterAkhir == "") {
            toastr.error('Meter akhir tidak boleh kosong');
        } else if (parseInt(meterAkhir) <= parseInt(meterAwal)) {
            toastr.error('Meter akhir tidak lebih kecil dari meter awal');
        } else {
            $('#form2').submit();
        }
    }
</script>
<?php $this->endSection(); ?>