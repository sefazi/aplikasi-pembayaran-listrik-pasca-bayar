<?php $this->extend('template/page'); ?>
<?php $this->section('tagihan'); ?>
<div class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                        <li class="breadcrumb-item active">Home/Tagihan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div style="background-color: #3498db; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
        <div style="max-width: 400px; margin: 0 auto; color: #fff; font-family: Arial, sans-serif;">
            <h2 style="text-align: center;">Tagihan</h2>
            <form method="post" action="<?= baseurl('/tagihan') ?>">
                <label for="id_pelanggan">ID PELANGGAN</label>
                <input type="text" name="id_pelanggan" placeholder="Masukkan ID Pelanggan ...." style="margin-bottom: 10px; padding: 10px; border-radius: 5px; border: none; color: #fff; background-color: #fff; color: #3498db; width: 100%;" required>
                <button type="submit" style="background-color: #fff; color: #3498db; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Cari</button>
            </form>
        </div>
    </div>


    <div class="col-sm-12 <?= isset($datatable) ? '' : 'd-none' ?>">
        <!-- Tampilan informasi tagihan -->
        <div style="margin: 20px auto; color: #fff; font-family: Arial, sans-serif;">
            <h2 style="text-align: center;">Informasi Tagihan</h2>
            <table style="width: 100%; background-color: #f2f2f2; color: #3498db; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #3498db; color: #fff;">
                        <th style="padding: 12px; border: 1px solid #3498db;">ID Pelanggan</th>
                        <th style="padding: 12px; border: 1px solid #3498db;">Nama Pelanggan</th>
                        <th style="padding: 12px; border: 1px solid #3498db;">Jumlah Meter</th>
                        <th style="padding: 12px; border: 1px solid #3498db;">Periode Pembayaran</th>
                        <th style="padding: 12px; border: 1px solid #3498db;">Total Tagihan</th>
                        <th style="padding: 12px; border: 1px solid #3498db;">Status</th>
                        <th style="padding: 12px; border: 1px solid #3498db;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($datatable)) {
                        foreach ($datatable as $key => $value) : ?>
                            <tr style="background-color: #f2f2f2; color: #3498db;">
                                <td style="padding: 12px; border: 1px solid #3498db;"><?= $value->id_pelanggan ?></td>
                                <td style="padding: 12px; border: 1px solid #3498db;"><?= $value->nama_pelanggan ?></td>
                                <td style="padding: 12px; border: 1px solid #3498db;"><?= $value->jumlah_meter ?></td>
                                <td style="padding: 12px; border: 1px solid #3498db;"><?= $value->bulan;
                                                                                        $value->tahun ?></td>
                                <td style="padding: 12px; border: 1px solid #3498db;">Rp. <?= number_format(((int)$value->meter_akhir - (int)$value->meter_awal) * (int)$value->tarifperkwh, 2, ',', '.') ?></td>
                                <td style="padding: 12px; border: 1px solid #3498db;"><?= $value->status ?></td>
                                <td style="padding: 12px; border: 1px solid #3498db;"><button style="<?= $value->status != "Belum dibayar" ? 'background-color: #123123;' : 'background-color: #3498db;cursor: pointer' ?>" <?= $value->status != "Belum dibayar" ? 'disabled' : '' ?> class="btn-pembayaran" onclick="bayarTagihan('<?= $value->id_tagihan ?>','<?= $value->id_pelanggan ?>')"><?= $value->status != "Belum dibayar" ? 'Lunas' : 'Bayar' ?></button></td>
                            </tr>
                    <?php endforeach;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    /* CSS untuk tombol pembayaran */
    .btn-pembayaran {
        /* background-color: #3498db; */
        color: #fff;
        border: none;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        border-radius: 5px;
        /* cursor: pointer; */
    }
</style>
<!-- Tampilan informasi tagihan -->
<div class="col-sm-12">
    <div style="margin: 20px auto; color: #fff; font-family: Arial, sans-serif;">
        <h2 style="text-align: center;">Informasi Tagihan</h2>
        <table style="width: 100%; background-color: #f2f2f2; color: #3498db; border-collapse: collapse;">
            <!-- Kode lainnya ... -->
        </table>
    </div>
</div>
</div>

<!-- Modal Pilihan Pembayaran -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Nomor Virtual Account:</p>
                <form id="formpembayaran" action="<?= baseurl('/bayar_tagihan') ?>" method="post">
                    <!-- Hidden input untuk menyimpan ID Pelanggan -->
                    <input type="hidden" id="id_pel" name="id_pel">
                    <input type="hidden" id="id_tag" name="id_tag">
                    <h3 id="no_pembayaran"></h3>
                    <!-- <button class="btn btn-primary" onclick="prosesPembayaran('Virtual Account')">Virtual Account</button> -->
                    <!-- <button class="btn btn-primary" onclick="prosesPembayaran('Credit Card')">Credit Card</button> -->
                </form>
            </div>
            <div class="modal-footer">
                <button onclick="prosesPembayaran()" type="button" class="btn btn-primary" data-dismiss="modal">Sudah Bayar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Bootstrap JavaScript link -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script>
    function bayarTagihan(idTagihan, idPelanggan) {
        $('#id_tag').val(idTagihan);
        $('#id_pel').val(idPelanggan);
        $('#no_pembayaran').html("09 " + idPelanggan + " " + idTagihan);
        $('#paymentModal').modal('show');
    }

    // Fungsi untuk memproses pembayaran
    function prosesPembayaran() {
        idTag = $('#id_tag').val();
        idpel = $('#id_pel').val();
        $('#formpembayaran').submit();
    }
</script>

<?php $this->endSection(); ?>