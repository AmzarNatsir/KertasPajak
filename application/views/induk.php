<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"> INDUK</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <table class="table" style="width: 100%;">
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
          <td><b>Pph Badan</b></td>
          <td style="text-align: center">B</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Penghasilan Kena Pajak</td>
          <td></td>
          <td style="text-align: right;"><?php echo number_format($penjualan_local_spt->n_spt, 0, ",", ".");?></td>
          <td style="text-align: right;"><?php echo number_format($penjualan_local_pmrs->n_pemeriksa, 0, ",", ".");?></td>
          <td style="text-align: right;"><?php echo number_format($penjualan_local_spt->n_spt - $penjualan_local_pmrs->n_pemeriksa, 0, ",", ".");?></td>
        </tr>
        <tr>
          <td>PPh Badan Terutang</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Kredit Pajak</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Badan Kurang (Lebih) Bayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Sanksi Administrasi</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Badan Yang Masih Harus Dibayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>

        <tr style="background: #f8f9fa">
          <td><b>Pph Pasal 21</b></td>
          <td style="text-align: center">C</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Objek PPh Pasal 21</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 21 Terutang</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Kredit Pajak</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 21 Kurang (Lebih) Bayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Sanksi Administrasi</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 21 Yang Masih Harus Dibayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>

        <tr style="background: #f8f9fa">
          <td><b>Pph Pasal 22</b></td>
          <td style="text-align: center">E</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Objek PPh Pasal 22</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 22 Terutang</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Kredit Pajak</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 22 Kurang (Lebih) Bayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Sanksi Administrasi</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 22 Yang Masih Harus Dibayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>

        <tr style="background: #f8f9fa">
          <td><b>Pph Pasal 23</b></td>
          <td style="text-align: center">G</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Objek PPh Pasal 23</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 23 Terutang</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Kredit Pajak</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 23 Kurang (Lebih) Bayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Sanksi Administrasi</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 23 Yang Masih Harus Dibayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>

        <tr style="background: #f8f9fa">
          <td><b>PPh Pasal 26 Final</b></td>
          <td style="text-align: center">J</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Objek PPh Pasal 26 Final</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 26 Final Terutang</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Kredit Pajak</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 26 Final Kurang (Lebih) Bayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Sanksi Administrasi</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 26 Final Yang Masih Harus Dibayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>

        <tr style="background: #f8f9fa">
          <td><b>PPh Final Pasal 4 Ayat (2)</b></td>
          <td style="text-align: center">K</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Objek PPh Final Pasal 4 Ayat (2)</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Final Pasal 4 Ayat (2) Terutang</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Kredit Pajak</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Final Pasal 4 Ayat (2) Kurang (Lebih) Bayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Sanksi Administrasi</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Final Pasal 4 Ayat (2) Yang Masih Harus Dibayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>

        <tr style="background: #f8f9fa">
          <td><b>PPh Pasal 15</b></td>
          <td style="text-align: center">L</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>Objek PPh Pasal 15</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 15 Terutang</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Kredit Pajak</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 15 Kurang (Lebih) Bayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Sanksi Administrasi</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPh Pasal 15 Yang Masih Harus Dibayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>

        <tr style="background: #f8f9fa">
          <td><b>PPN Penyerahan BKP/JKP</b></td>
          <td style="text-align: center">N</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>DPP PPN Yang Harus Dipungut Sendiri</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Pajak Keluaran Yang Harus Dipungut Sendiri</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Pajak Masukan Yang Dapat Diperhitungkan</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPN Kurang (Lebih) Bayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Dikompensasi</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPN Kurang (Lebih) Bayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Sanksi Administrasi</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>PPN Yang Masih Harus (Lebih) Dibayar</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>STP</td>
          <td></td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
      </table>
    </div>
  </div>
</div>

