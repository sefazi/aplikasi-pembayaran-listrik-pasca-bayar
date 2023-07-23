<?php $this->extend('template/page'); ?>
<?php $this->section('pelanggan'); ?>
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
          <form id="form1" action="<?= baseurl('/pelanggan_input') ?>" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="daya">ID Pelanggan</label>
                <input type="text" id="id_pelanggan" name="id_pelanggan" class="form-control" placeholder="Masukan ID Pelanggan" required value="">
              </div>
              <div class="form-group">
                <label>No. Meter</label>
                <input id="nomor_meter" name="nomor_meter" type="text" class="form-control" placeholder="" disabled>
                <input type="hidden" name="no_meter">
              </div>
              <div class="form-group">
                <label>Nama Pelanggan</label>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control" placeholder="" disabled>
              </div>
              <div class="form-group">
                <label>Alamat Pelanggan</label>
                <textarea id="alamat" name="alamat" class="form-control" rows="3" required></textarea>
              </div>
              <div class="form-group">
                <label>Daya Yang Digunakan</label>
                <select id="daya" name="daya" class="form-control" required>
                  <?php foreach ($datadaya  as $key => $value) : ?>
                    <option value="<?= $value->id_tarif ?>"><?= $value->daya ?>VA - <?= $value->tarifperkwh ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <button type="button" onclick="_submit()" class="btn btn-block btn-outline-primary">Submit</button>
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
                  <th>Daya</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $index = 1;
                foreach ($datatable as $key => $value) : ?>
                  <tr>
                    <td><?= $index ?></td>
                    <td><?= $value->id_pelanggan ?></td>
                    <td><?= $value->nomor_kwh ?></td>
                    <td><?= $value->nama_pelanggan ?></td>
                    <td><?= $value->alamat ?></td>
                    <td><?= $value->id_tarif ?></td>
                    <td>
                      <div class="btn-group">
                        <button type="button" onclick="" class="btn btn-sm btn-default"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                    <?php $index++ ?>
                  </tr>
                <?php endforeach ?>
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
            $('#nomor_meter').val('0');
            $('#no_meter').val('0');
          } else {
            $('#nomor_meter').val(data.nomorMeter);
            $('#no_meter').val(data.nomorMeter);
          }

          $('#nama_pelanggan').val(data.namaPelanggan);
          $('#alamat').val(data.alamat);
          $('#daya').val(data.daya);

          toastr.info('Data berhasil ditemukan')
        },
        error: function(e) {
          toastr.info('Data tidak ditemukan')
        }
      });
    });
  });

  function _submit() {
    if ($('#daya').val() == null || $('#daya').val() == "") {
      toastr.error('Daya tidak boleh kosong')
    } else if ($('#id_pelanggan').val() == "" || $('#id_pelanggan').val() == null) {
      toastr.error('ID Pelanggan tidak boleh kosong')
    } else {
      $('#form1').submit();
    }
  }
</script>

<?php $this->endSection(); ?>