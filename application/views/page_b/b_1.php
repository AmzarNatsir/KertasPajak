<main>
  <div class="container-fluid">
    <h1 class="mt-4">B.1 Peredaran Usaha</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Peredaran Usaha</li>
    </ol>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Nama Wajib Pajak : PT. ABC</div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">No. NPWP : xxxxxxx</div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Masa/Tahun Pajak : <?php echo date("Y");?></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
      <table  style="width: 100%" border="1" cellpadding="4">
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
        <tr>
          <td>Penjualan Export</td>
          <td>B.1.1</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
          <td style="text-align: right;">0</td>
        </tr>
        <tr>
          <td>Penjualan Lokal</td>
          <td></td>
          <td style="text-align: right;"><?php echo number_format($penjualan_local_spt->n_spt, 0, ",", ".");?></td>
          <td style="text-align: right;"><?php echo number_format($penjualan_local_pmrs->n_pemeriksa, 0, ",", ".");?></td>
          <td style="text-align: right;"><?php echo number_format($penjualan_local_spt->n_spt - $penjualan_local_pmrs->n_pemeriksa, 0, ",", ".");?></td>
        </tr>
        <tr style="background: #f8f9fa">
          <td>&nbsp;&nbsp;Jumlah</td>
          <td></td>
          <td style="text-align: right;"><b><?php echo number_format($penjualan_local_spt->n_spt + 0, 0, ",", ".");?></b></td>
          <td style="text-align: right;"><b><?php echo number_format($penjualan_local_pmrs->n_pemeriksa + 0, 0, ",", ".");?></b></td>
          <td style="text-align: right;"><b><?php echo number_format(($penjualan_local_spt->n_spt - $penjualan_local_pmrs->n_pemeriksa) + 0, 0, ",", ".");?></b></td>
        </tr>
      </table>
    </div>
  </div>
</main>