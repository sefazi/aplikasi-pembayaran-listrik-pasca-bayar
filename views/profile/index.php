<?php $this->extend('template/page'); ?>
<?php $this->section('profile'); ?>
<div class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-user icon"></i> PROFILE
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">ID Pelanggan</label>
                                <input type="text" class="form-control" placeholder="" value="<?= $user->id_user ?>" disabled>
                                <input type="hidden" name="id_pel" value="<?= $user->id_user ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama" value="<?= $user->nama_admin ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Password</label>
                                <input type="text" class="form-control" id="password" placeholder="Password" value="<?= $user->password ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea type="text" rows="3" class="form-control" id="alamat" placeholder="Masukan Alamat" required><?= isset($alamat->alamat) || ($alamat) ? $alamat->alamat : '' ?></textarea>
                            </div>
                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="animated-table-container">
                    <h1><i class="fa fa-users icon"></i> User Status</h1>
                    <table class="animated-table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $nama_user ?></td>
                                <td><?= $user->nama_level ?></td>
                            </tr>

                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Gaya CSS tabel dan kontainer */
    .container-fluid {
        padding: 20px;
    }

    .animated-table-container {
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .animated-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .animated-table th,
    .animated-table td {
        padding: 12px;
        border-bottom: 1px solid #ccc;
        text-align: left;
    }

    .animated-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }



    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    /* Gaya CSS untuk ikon */
    .icon {
        font-size: 24px;
        margin-right: 5px;
        color: #3498db;
    }
</style>

<?php $this->endSection(); ?>