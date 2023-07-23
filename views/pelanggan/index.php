<?php $this->extend('template/page'); ?>
<?php $this->section('pelanggan'); ?>
<div class="content">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
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
            <h3 class="card-title">DATA PELANGGAN</h3>
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
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
              </thead>
              <tbody>
                <!-- Data tabel pelanggan akan diisikan secara dinamis -->
              </tbody>
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