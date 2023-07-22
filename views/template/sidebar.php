<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-1">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight ml-4">Sejahtera Medika</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline mt-2">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="true">
                <li class="nav-item">
                    <a href="<?= baseurl('/'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Registrasi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= baseurl('/antrian'); ?>" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Antrian Rawat Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= baseurl('/rj'); ?>" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Rawat Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= baseurl('/dp'); ?>" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Data Pasien</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Kasir
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= baseurl('apotek'); ?>" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Penjualan Apotik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= baseurl('tindakan'); ?>" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Tindakan & Obat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= baseurl('kwitansi'); ?>" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Kwitansi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-briefcase-medical"></i>
                        <p>
                            Farmasi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pesan_obat" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Pemesanan Obat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="terima_obat" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Penerimaan Obat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adjust_obat" class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Adjust Stok Obat</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-file-alt nav-icon"></i>
                                <p>Pendaftaran<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_pendaftaran'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Pendaftaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_ps_poli'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Pasien Poli</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_del'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Hapus Pendaftaran</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-file-alt nav-icon"></i>
                                <p>Kasir<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_tp_poli'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Tindakan-Pemeriksaan Poli</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_ks_shift'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Shift Kasir</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_js_dr'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Jasa DR</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_pen'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Penjualan Obat</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-file-alt nav-icon"></i>
                                <p>Farmasi<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_po'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>PO Obat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_to'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Penerimaan Obat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_so'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Stock Obat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_obt'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Buku Besar Obat</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-file-alt nav-icon"></i>
                                <p>Lain-lain<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_pn_obt'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Pendapatan Obat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('lap_inv'); ?>" class="nav-link">
                                        <i class="far fa-file-pdf nav-icon"></i>
                                        <p>Piutang Perusahaan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Referensi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-folder-open nav-icon"></i>
                                <p>Farmasi<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= baseurl('obat'); ?>" class="nav-link">
                                        <i class="fas fa-database nav-icon"></i>
                                        <p>Obat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('pabrik'); ?>" class="nav-link">
                                        <i class="fas fa-database nav-icon"></i>
                                        <p>Pabrik</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('suplier'); ?>" class="nav-link">
                                        <i class="fas fa-database nav-icon"></i>
                                        <p>Suplier</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-folder-open nav-icon"></i>
                                <p>Poli<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= baseurl('rf_td'); ?>" class="nav-link">
                                        <i class="fas fa-database nav-icon"></i>
                                        <p>Tindakan/Pemeriksaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('rf_dr'); ?>" class="nav-link">
                                        <i class="fas fa-database nav-icon"></i>
                                        <p>Dokter</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-folder-open nav-icon"></i>
                                <p>Lain-lain<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= baseurl('rf_perusahaan'); ?>" class="nav-link">
                                        <i class="fas fa-database nav-icon"></i>
                                        <p>Perusahaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('rf_kota'); ?>" class="nav-link">
                                        <i class="fas fa-database nav-icon"></i>
                                        <p>Kota</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('rf_kecamatan'); ?>" class="nav-link">
                                        <i class="fas fa-database nav-icon"></i>
                                        <p>Kecamatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('rf_kelurahan'); ?>" class="nav-link">
                                        <i class="fas fa-database nav-icon"></i>
                                        <p>Kelurahan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= baseurl('/otoritasi'); ?>" class="nav-link">
                                        <i class="fas fa-database nav-icon"></i>
                                        <p>Otoritasi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>