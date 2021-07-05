<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <img src="<?php echo base_url();?>assets/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url();?>assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="<?php echo base_url();?>induk" class="nav-link active"><i class="nav-icon fas fa-book"></i><p>Induk</p></a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>B<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>pph_badan"><i class="nav-icon fas fa-th"></i><p>Pph Badan</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>peredaran_usaha">
                        <i class="nav-icon fas fa-th"></i><p>B.1. Peredaran Usaha</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>penjualan_lokal">
                    <i class="nav-icon fas fa-th"></i><p>B.1.1 Penjualan Lokal</a>
                </li>
            </ul>
        </li>

    </ul>
    </nav>
</aside>

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="<?php echo base_url();?>induk">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Induk
                </a>
                <div class="sb-sidenav-menu-heading">B</div>
                <a class="nav-link" href="<?php echo base_url();?>pph_badan">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Pph Badan
                </a>
                <a class="nav-link" href="<?php echo base_url();?>peredaran_usaha">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    B.1. Peredaran Usaha
                </a>
                <a class="nav-link" href="<?php echo base_url();?>penjualan_lokal">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.1.1 Penjualan Lokal
                </a>
                <!--
                <a class="nav-link" href="<?php echo base_url();?>penjualan_lokal/tambah_data">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    1.1.1 Penjualan Lokal
                </a>
                -->
                <a class="nav-link" href="<?php echo base_url();?>harga_pokok_penjualan">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    B.2 Harga Pokok Penjualan
                </a>
                <!--
                <a class="nav-link" href="<?php echo base_url();?>pembelian_bahan_baku">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    B.2.1 Pembelian Bahan Baku
                </a>
                <a class="nav-link" href="<?php echo base_url();?>pembelian_dpp_ppn">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    B.2.1.1 Pembelian Berdasarkan DPP PPN Pajak Masukan
                </a>
                -->
                <a class="nav-link" href="<?php echo base_url();?>biaya_usaha_lainnya">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.3 Biaya Usaha Lainnya
                </a>
                <a class="nav-link" href="<?php echo base_url();?>gaji_kesejahteraan_karyawan">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.3.1 Gaji dan Kesejahteraan Karyawan
                </a>
                <a class="nav-link" href="<?php echo base_url();?>pemasaran">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.3.2 Pemasaran
                </a>
                <a class="nav-link" href="<?php echo base_url();?>sewa">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.3.3 Sewa
                </a>
                <a class="nav-link" href="<?php echo base_url();?>consultant_fee">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.3.4 Consultant Fee
                </a>
                <a class="nav-link" href="<?php echo base_url();?>penyisihan_piutang_ragu_ragu">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.3.5 Penyisihan Piutang Ragu-Ragu
                </a>
                <a class="nav-link" href="<?php echo base_url();?>penghasilan_dari_luar_usaha">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.4 Penghasilan dari luar usaha
                </a>
                <a class="nav-link" href="<?php echo base_url();?>biaya_dari_luar_usaha">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.5 Biaya dari luar usaha
                </a>
                <a class="nav-link" href="<?php echo base_url();?>penghasilan_neto_luar_negeri">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.6 Penghasilan neto luar negeri
                </a>
                <a class="nav-link" href="<?php echo base_url();?>penyesuaian_fiskal_positif">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.7 Penyesuaian Fiskal Positif
                </a>
                <a class="nav-link" href="<?php echo base_url();?>penyesuaian_fiskal_negatif">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.8 Penyesiaan Fiskal Negatif
                </a>
                <a class="nav-link" href="<?php echo base_url();?>pengurangan_penghasilan_neto">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.9 Fasilitas Penanaman Modal Berupa Pengurangan Penghasilan Neto
                </a>
                <a class="nav-link" href="<?php echo base_url();?>kompensasi_kerugian">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.10 Kompensasi Kerugian
                </a>
                <a class="nav-link" href="<?php echo base_url();?>pph_badan_terutang">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.11 PPh Badan Terutang
                </a>
                <a class="nav-link" href="<?php echo base_url();?>kredit_pajak">
                    <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                    B.12 Kredit Pajak
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
<div id="layoutSidenav_content">