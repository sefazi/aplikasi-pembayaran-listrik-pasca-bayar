<?php $this->extend('template/page'); ?>
<?php $this->section('pembayaran'); ?>
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
                            <h3 class="card-title">Masukan Tarif</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= baseurl('/pembayaran') ?>" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="daya">Masukkan Daya</label>
                                    <input type="text" name="daya" class="form-control" placeholder="Masukkan Daya" required value="" list="day">
                                    <datalist id="day">
                                        <option value="450">450VA</option>
                                        <option value="900">900VA</option>
                                        <option value="1300">1300VA</option>
                                        <option value="2200">2200VA</option>
                                    </datalist>
                                </div>
                                <div class="form-group">
									<label>TARIF/KWH</label>
									<input type="text" name="tarif" class="form-control" placeholder="Masukkan Tarif" required value="">
                                </div>
                                <button type="submit" class="btn btn-block btn-outline-primary">Submit</button>
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
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Tarif</th>
                                        <th>Tarif/KwH</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>123</td>
                                        <td>10000</td>
                                        <td><a href="<?= baseurl('/pembayaran') ?>" class="btn btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <?php //foreach($data as $key => $val): ?>
                                    <?php //endforeach ?>
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
<?php $this->endSection(); ?>