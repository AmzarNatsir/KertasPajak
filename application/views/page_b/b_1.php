<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"> B.1 Peredaran Usaha</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Peredaran Usaha</li>
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
            <table class="table"  style="width: 100%">
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
</div>