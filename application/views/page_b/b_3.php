<main>
  <div class="container-fluid">
    <h1 class="mt-4">B.3 Biaya Usaha Lainnya</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Biaya Usaha Lainnyaa</li>
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
          <td>Gaji dan Kesejahteraan Karyawan</td>
          <td>B.3.1</td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_1" id="inp_sptwp_1" value="<?php echo $gaji_karyawan_spt->n_spt;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_1" id="inp_pemeriksa_1" value="<?php echo $gaji_karyawan_pem->n_pemeriksa;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_1" id="inp_koreksi_1" value="<?php echo $gaji_karyawan_spt->n_spt - $gaji_karyawan_pem->n_pemeriksa;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Pemasaran</td>
          <td>B.3.2</td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_2" id="inp_sptwp_2" value="0" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_2" id="inp_pemeriksa_2" value="0" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_2" id="inp_koreksi_2" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Sewa</td>
          <td>B.3.3</td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_3" id="inp_sptwp_3" value="0" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_3" id="inp_pemeriksa_3" value="0" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_3" id="inp_koreksi_3" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Perjalana Dinas</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_4" id="inp_sptwp_4" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_4" id="inp_pemeriksa_4" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_4" id="inp_koreksi_4" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Pemeliharaan Gedung dan Peralatan</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_5" id="inp_sptwp_5" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_5" id="inp_pemeriksa_5" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_5" id="inp_koreksi_5" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Telepon dan Teleks</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_6" id="inp_sptwp_6" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_6" id="inp_pemeriksa_6" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_6" id="inp_koreksi_6" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Beban Bank</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_7" id="inp_sptwp_7" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_7" id="inp_pemeriksa_7" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_7" id="inp_koreksi_7" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Asuransi</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_8" id="inp_sptwp_8" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_8" id="inp_pemeriksa_8" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_8" id="inp_koreksi_8" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Pos Cetakan ATK Fotocopy & Angkutan</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_9" id="inp_sptwp_9" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_9" id="inp_pemeriksa_9" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_9" id="inp_koreksi_9" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Consultant Fee</td>
          <td>B.3.4</td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_10" id="inp_sptwp_10" value="0" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_10" id="inp_pemeriksa_10" value="0" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_10" id="inp_koreksi_10" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Penyisihan Piutang Ragu-Ragu</td>
          <td>B.3.5</td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_11" id="inp_sptwp_11" value="0" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_11" id="inp_pemeriksa_11" value="0" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_11" id="inp_koreksi_11" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Seminar dan Latihan</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_12" id="inp_sptwp_12" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_12" id="inp_pemeriksa_12" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_12" id="inp_koreksi_12" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Penyusutan</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_13" id="inp_sptwp_13" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_13" id="inp_pemeriksa_13" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_13" id="inp_koreksi_13" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Listrik dan Air</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_14" id="inp_sptwp_14" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_14" id="inp_pemeriksa_14" value="0" style="text-align: right;" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_14" id="inp_koreksi_14" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr style="background: #f8f9fa">
          <td>&nbsp;&nbsp;Jumlah</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_total" id="inp_sptwp_total" value="0" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_total" id="inp_pemeriksa_total" value="0" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_total" id="inp_koreksi_total" value="0" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td colspan="5" style="text-align: center; padding-top: 20px"><button type="submit" class="btn btn-primary">Perbaharui Data</button></td>
        </tr>
      </table>
    </div>
  </div>
</main>
<script type="text/javascript">
  $(document).ready(function() 
  {
    window.setTimeout(function () { $("#success-alert").alert('close'); }, 2000);
    $('.angka').number( true, 0 );
  });
</script>