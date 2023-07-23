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
            <form method="post" action="proses_pencarian.php">
                <label for="id_pelanggan">ID PELANGGAN</label>
                <input type="text" name="id_pelanggan" placeholder="Masukkan ID Pelanggan ...." style="margin-bottom: 10px; padding: 10px; border-radius: 5px; border: none; color: #fff; background-color: #fff; color: #3498db; width: 100%;">
                <button type="submit" name="bcari_id" style="background-color: #fff; color: #3498db; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Cari</button>
            </form>
        </div>
    </div>


    <div class="col-sm-12">
        <!-- Tampilan informasi tagihan -->
        <div style="margin: 20px auto; color: #fff; font-family: Arial, sans-serif;">
            <h2 style="text-align: center;">Informasi Tagihan</h2>
            <table style="width: 100%; background-color: #f2f2f2; color: #3498db; border-collapse: collapse;">
                <tr style="background-color: #3498db; color: #fff;">
                    <th style="padding: 12px; border: 1px solid #3498db;">ID Pelanggan</th>
                    <th style="padding: 12px; border: 1px solid #3498db;">Nama Pelanggan</th>
                    <th style="padding: 12px; border: 1px solid #3498db;">Jumlah Meter</th>
                    <th style="padding: 12px; border: 1px solid #3498db;">Periode Pembayaran</th>
                    <th style="padding: 12px; border: 1px solid #3498db;">Total Tagihan</th>
                    <th style="padding: 12px; border: 1px solid #3498db;">Status</th>
                    <th style="padding: 12px; border: 1px solid #3498db;">Aksi</th>
                </tr>
                <tr style="background-color: #f2f2f2; color: #3498db;">
                    <td style="padding: 12px; border: 1px solid #3498db;">20230718140858</td>
                    <td style="padding: 12px; border: 1px solid #3498db;">Rismawati Dewi</td>
                    <td style="padding: 12px; border: 1px solid #3498db;">12684697</td>
                    <td style="padding: 12px; border: 1px solid #3498db;">July 20203</td>
                    <td style="padding: 12px; border: 1px solid #3498db;">Rp. 500,000</td>
                    <td style="padding: 12px; border: 1px solid #3498db;">Belum dibayar</td>
                    <td style="padding: 12px; border: 1px solid #3498db;"><button class="btn-pembayaran" onclick="bayarTagihan('20230718140858')">Bayar</button></td>
                </tr>
                <!-- Tambahkan baris berikut untuk menampilkan data tagihan lain -->
                <!-- <tr style="background-color: #f2f2f2; color: #3498db;">
                    <td style="padding: 12px; border: 1px solid #3498db;">ID Pelanggan</td>
                    <td style="padding: 12px; border: 1px solid #3498db;">Nama Pelanggan</td>
                    <td style="padding: 12px; border: 1px solid #3498db;">Total Tagihan</td>
                    <td style="padding: 12px; border: 1px solid #3498db;"><button class="btn-pembayaran" onclick="bayarTagihan('ID_PELANGGAN')">Bayar</button></td>
                </tr> -->
            </table>
        </div>
    </div>
</div>

<style>
    /* CSS untuk tombol pembayaran */
    .btn-pembayaran {
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        border-radius: 5px;
        cursor: pointer;
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
                <h5 class="modal-title" id="paymentModalLabel">Pilih Metode Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Pilihan Pembayaran:</p>
                <button class="btn btn-primary" onclick="prosesPembayaran('Virtual Account')">Virtual Account</button>
                <button class="btn btn-primary" onclick="prosesPembayaran('Credit Card')">Credit Card</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Hidden input untuk menyimpan ID Pelanggan -->
<input type="hidden" id="inputIdPelanggan">

<!-- Add Bootstrap CSS link -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Add Bootstrap JavaScript link -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Fungsi untuk menampilkan modal pemilihan metode pembayaran
    function bayarTagihan(idPelanggan) {
        // Simpan ID Pelanggan yang akan dibayar ke dalam hidden input pada modal
        document.getElementById('inputIdPelanggan').value = idPelanggan;
        // Tampilkan modal pemilihan pembayaran
        $('#paymentModal').modal('show');
    }

    // Fungsi untuk memproses pembayaran
    function prosesPembayaran(metodePembayaran) {
        // Ambil ID Pelanggan dari hidden input pada modal
        var idPelanggan = document.getElementById('inputIdPelanggan').value;
        // Lakukan proses pembayaran sesuai dengan metode pembayaran yang dipilih
        alert('ID Pelanggan: ' + idPelanggan + ', Metode Pembayaran: ' + metodePembayaran);
        // Anda dapat mengganti alert dengan kode untuk memproses pembayaran sesuai kebutuhan
        // Misalnya, jika menggunakan AJAX, Anda bisa kirim data ke server untuk proses pembayaran.
        // Setelah itu, tutup modal dengan kode berikut:
        // $('#paymentModal').modal('hide');
    }
</script>

<?php $this->endSection(); ?>