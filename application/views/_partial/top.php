<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <a href="../../index3.html" class="navbar-brand">
      <img src="<?php echo base_url();?>assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Kertas Pajak</span>
    </a>
    
    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?php echo base_url();?>utama" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Master</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="#" class="dropdown-item">Cart of Account (COA)</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pengaturan</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="<?php echo base_url();?>pengaturan/profil-perusahaan" class="dropdown-item">Profil Perusahaan </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Transaksi</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="<?php echo base_url();?>transaksi/penerimaan-kasbank" class="dropdown-item">Penerimaan Kas/Bank </a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pelaporan</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="<?php echo base_url();?>induk" class="dropdown-item">Induk</a></li>
            <li class="dropdown-divider"></li>

            <!-- Level two dropdown-->
            <li class="dropdown-submenu dropdown-hover">
              <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">B</a>
              <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                <li><a tabindex="-1" href="<?php echo base_url();?>pph_badan" class="dropdown-item">Pph Badan</a></li>
                <li><a href="<?php echo base_url();?>peredaran_usaha" class="dropdown-item">B.1. Peredaran Usaha</a></li>
                <li><a href="<?php echo base_url();?>penjualan_lokal" class="dropdown-item">B.1.1 Penjualan Lokal</a></li>

                <li><a href="<?php echo base_url();?>harga_pokok_penjualan" class="dropdown-item">B.2 Harga Pokok Penjualan</a></li>
                <li><a href="<?php echo base_url();?>biaya_usaha_lainnya" class="dropdown-item">B.3 Biaya Usaha Lainnya</a></li>
                <li><a href="<?php echo base_url();?>biaya_usaha_lainnya" class="dropdown-item">B.3 Biaya Usaha Lainnya</a></li>
                <li><a href="<?php echo base_url();?>gaji_kesejahteraan_karyawan" class="dropdown-item">B.3.1 Gaji dan Kesejahteraan Karyawan</a></li>
                <li><a href="<?php echo base_url();?>pemasaran" class="dropdown-item">B.3.2 Pemasaran</a></li>
                <li><a href="<?php echo base_url();?>sewa" class="dropdown-item">B.3.3 Sewa</a></li>
                <li><a href="<?php echo base_url();?>consultant_fee" class="dropdown-item">B.3.4 Consultant Fee</a></li>
                <li><a href="<?php echo base_url();?>penyisihan_piutang_ragu_ragu" class="dropdown-item">B.3.5 Penyisihan Piutang Ragu-Ragu</a></li>

                <li><a href="<?php echo base_url();?>penghasilan_dari_luar_usaha" class="dropdown-item">B.4 Penghasilan dari luar usaha</a></li>
                <li><a href="<?php echo base_url();?>biaya_dari_luar_usaha" class="dropdown-item">B.5 Biaya dari luar usaha</a></li>
                <li><a href="<?php echo base_url();?>penghasilan_neto_luar_negeri" class="dropdown-item">B.6 Penghasilan neto luar negeri</a></li>
                <li><a href="<?php echo base_url();?>penyesuaian_fiskal_positif" class="dropdown-item">B.7 Penyesuaian Fiskal Positif</a></li>
                <li><a href="<?php echo base_url();?>penyesuaian_fiskal_negatif" class="dropdown-item">B.8 Penyesiaan Fiskal Negatif</a></li>
                <li><a href="<?php echo base_url();?>pengurangan_penghasilan_neto" class="dropdown-item">B.9 Fasilitas Penanaman Modal Berupa Pengurangan Penghasilan Neto</a></li>
                <li><a href="<?php echo base_url();?>kompensasi_kerugian" class="dropdown-item">B.10 Kompensasi Kerugian</a></li>
                <li><a href="<?php echo base_url();?>pph_badan_terutang" class="dropdown-item">B.11 PPh Badan Terutang</a></li>
                <li><a href="<?php echo base_url();?>kredit_pajak" class="dropdown-item">B.12 Kredit Pajak</a></li>
                
              </ul>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url();?>login/logout" class="nav-link">LogOut</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- /.navbar -->
<div class="content-wrapper">