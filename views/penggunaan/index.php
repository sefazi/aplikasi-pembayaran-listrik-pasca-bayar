<?php $this->extend('template/page'); ?>
<?php $this->section('penggunaan'); ?>
<div class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pengguna</h1>
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
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID Pelanggan</label>
                                    <input name="id_pelanggan" type="text" class="form-control" id="id_pelanggan"
                                        placeholder="Masukan ID pelanggan">
                                </div>
                                <div class="form-group">
                                    <label for="text">Bulan</label>
                                    <input name="bulan_penggunaan" type="text" class="form-control"
                                        id="bulan_penggunaan" placeholder="Masukan bulan">
                                </div>
                                <div class="form-group">
                                    <label for="text">Meter Awal</label>
                                    <input name="meter_awal" type="text" class="form-control" id="meter_awal"
                                        placeholder="Masukan meteran awal">
                                </div>
                                <div class="form-group">
                                    <label for="text">Meter Akhir</label>
                                    <input name="meter_akhir" type="text" class="form-control" id="meter_akhir"
                                        placeholder="Masukan meter akhir">
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
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
                        <div class="card-body table-responsive p-0">
                            <table id="penggunan" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Penggunaan</th>
                                        <th>ID Pelanggan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Bulan</th>
                                        <th>Meter Awal</th>
                                        <th>Meter Akhir</th>
                                        <th>Tanggal Cek</th>
                                        <th>Admin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12345367</td>
                                        <td>09823563</td>
                                        <td>Eris</td>
                                        <td>Juli 2023</td>
                                        <td>1555</td>
                                        <td>1654</td>
                                        <td>30 Juni 2023</td>
                                        <td>Rismawati Dewi</td>
                                        <td><a href="<?= baseurl('/penggunaan') ?>" class="btn btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
</footer>
</div>
</div>
</section>
<?php $this->endSection(); ?>

