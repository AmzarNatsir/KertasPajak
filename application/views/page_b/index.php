<!-- Content Wrapper. Contains page content -->
<?php
//B.1
$b_1_spt = $penjualan_local_spt->n_spt;
$b_1_pmrks = $penjualan_local_pmrs->n_pemeriksa;
$b_1_koreksi = $penjualan_local_spt->n_spt - $penjualan_local_pmrs->n_pemeriksa;

$b_2_spt = (empty($hpp->b_total_4_spt)) ? 0 : "-".$hpp->b_total_4_spt;
$b_2_pem = (empty($hpp->b_total_4_pem)) ? 0 : "-".$hpp->b_total_4_pem;
$b_2_koreksi = $b_2_spt - $b_2_pem;

$laba_bruto_spt = $b_1_spt + $b_2_spt;
$laba_bruto_pem = $b_1_pmrks + $b_2_pem;
$laba_bruto_koreksi = $b_1_koreksi - $b_2_koreksi;
?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"> Pph Badan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Pph Badan</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <table class="table" style="width: 100%">
        <tr style="background: #f8f9fa">
          <td rowspan="2" style="width: 50%; text-align: center">Uraian</td>
          <td rowspan="2" style="width: 5%; text-align: center">Ref</td>
          <td colspan="2" style="text-align: center">Menurut</td>
          <td rowspan="2" style="width: 15%; text-align: center">Koreksi</td>
        </tr>
        <tr style="background: #f8f9fa">
          <td style="width: 15%; text-align: center">SPT WP</td>
          <td style="width: 15%; text-align: center">Pemeriksa</td>
        </tr>
        <tr style="background: #f8f9fa">
          <td>Peredaran Usaha</td>
          <td style="text-align: center">B.1</td>
          <td style="text-align: right;"><?php echo number_format($b_1_spt, 0, ",", ".");?></td>
          <td style="text-align: right;"><?php echo number_format($b_1_pmrks, 0, ",", ".");?></td>
          <td style="text-align: right;"><?php echo number_format($b_1_koreksi, 0, ",", ".");?></td>
        </tr>
        <tr>
          <td>Harga Pokok Penjualan</td>
          <td style="text-align: center">B.2</td>
          <td style="text-align: right;"><?php echo number_format($b_2_spt, 0, ",", "."); ?></td>
          <td style="text-align: right;"><?php echo number_format($b_2_pem, 0, ",", "."); ?></td>
          <td style="text-align: right;"><?php echo number_format($b_2_koreksi, 0, ",", ".");?></td>
        </tr>
        <tr style="background: #f8f9fa">
          <td>&nbsp;&nbsp;Laba Bruto</td>
          <td></td>
          <td style="text-align: right;"><b><?php echo number_format($laba_bruto_spt, 0, ",", "."); ?></b></td>
          <td style="text-align: right;"><b><?php echo number_format($laba_bruto_pem, 0, ",", "."); ?></b></td>
          <td style="text-align: right;"><b><?php echo number_format($laba_bruto_koreksi, 0, ",", "."); ?></b></td>
        </tr>
        <tr>
          <td>Biaya Usaha Lainnya</td>
          <td style="text-align: center">B.3</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr style="background: #f8f9fa">
          <td>&nbsp;&nbsp;Laba Operasi</td>
          <td></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
        </tr>
        <tr>
          <td>Penghasilan dari Luar Usaha</td>
          <td style="text-align: center">B.4</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Biaya dari Luar Usaha</td>
          <td style="text-align: center">B.5</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Penghasilan Neto Luar Usaha</td>
          <td style="text-align: center">B.6</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr style="background: #f8f9fa">
          <td>&nbsp;&nbsp;Laba Neto Komersial</td>
          <td></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
        </tr>
        <tr>
          <td>Penyesuaian Fiskal Positif</td>
          <td style="text-align: center">B.7</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Penyesuaian Fiskal Negatif</td>
          <td style="text-align: center">B.8</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Fasilitas Penanaman Modal Berupa</td>
          <td style="text-align: center">B.9</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Pengurangan Penghasilan Neto</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr style="background: #f8f9fa">
          <td>&nbsp;&nbsp;Penghasilan Neto Fiskal</td>
          <td></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
        </tr>
        <tr>
          <td>Kompensasi Kerugian</td>
          <td style="text-align: center">B.10</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr style="background: #f8f9fa">
          <td>&nbsp;&nbsp;Penghasilan Kena Pajak</td>
          <td></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
        </tr>
        <tr>
          <td>PPh Badan Terutang</td>
          <td style="text-align: center">B.11</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Kredit Pajak</td>
          <td style="text-align: center">B.12</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        
        <tr style="background: #f8f9fa">
          <td colspan="2"><b>PPh Badan Kurang (Lebih) Bayar</b></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
        </tr>
        <tr style="background: #f8f9fa">
          <td colspan="5">Sanksi Administrasi</td>
        </tr>
        <tr style="background: #f8f9fa">
          <td colspan="2"><b>Pasal 13 (2) UU KUP (2% x 24 Bulan x Rp)</b></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
        </tr>
        
        <tr style="background: #f8f9fa">
          <td colspan="2"><b>PPh Badan Yang Masih Harus Dibayar</b></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
          <td style="text-align: right;"><b>0</b></td>
        </tr>
      </table>
    </div>
  </div>
</div>