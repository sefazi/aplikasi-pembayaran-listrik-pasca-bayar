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
</div>
<?php $this->endSection(); ?>
