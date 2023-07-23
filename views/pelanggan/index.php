<?php $this->extend('template/page'); ?>
<?php $this->section('tagihan'); ?>
<div class="content">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">PELANGGAN</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Data Pelanggan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Input Data Pelanggan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="<?= baseurl('/pembayaran') ?>" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="daya">ID Pelanggan</label>
                <input type="text" name="ID_pelanggan" class="form-control" placeholder="Masukan ID Pelanggan" required value="" id="ID_pelanggan">
              </div>
              <div class="form-group">
                <label>No. Meter</label>
                <input type="text" class="form-control" placeholder="Auto." disabled>
              </div>
              <div class="form-group">
                <label>Nama Pelanggan</label>
                <input type="text" class="form-control" placeholder="Auto." disabled>
              </div>
              <div class="form-group">
                <label>Alamat Pelanggan</label>
                <textarea class="form-control" rows="3" placeholder="Enter ..." required></textarea>
              </div>
              <div class="form-group">
                <label>Daya Yang Digunakan</label>
                <select class="form-control">
                  <option>450VA</option>
                  <option>900VA</option>
                  <option>1300VA</option>
                  <option>2200VA</option>
                  <option>5500VA</option>
                </select>
              </div>
              <button type="submit" class="btn btn-block btn-outline-primary">Submit</button>
              <button type="reset" class="btn btn-block btn-outline-primary">Reset</button>
            </div>
          </form>
        </div>
      </div>

      <!-- Tabel Pelanggan -->
      <div class="col-sm-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Pelanggan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table id="pelanggan" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Pelanggan</th>
                  <th>No. Meter</th>
                  <th>Nama Pelanggan</th>
                  <th>Alamat Pelanggan</th>
                  <th>Batas Waktu Bayar</th>
                  <th>Daya</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12345367</td>
                                        <td>09823563</td>
                                        <td>Eris</td>
                                        <td>Jakarta</td>
                                        <td>20 Juli</td>
                                        <td>250KVA</td>
                                        <td><a href="<?= baseurl('/pelanggan') ?>" class="btn btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                <!-- Data tabel pelanggan akan diisikan secara dinamis -->
             
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection(); ?>