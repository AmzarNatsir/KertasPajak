<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"> B.3.1 Gaji dan Kesejahteraan Karyawan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">B.3.1 Gaji dan Kesejahteraan Karyawan</li>
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
      <?php if ($this->session->flashdata('konfirm')): ?>
        <div class="alert alert-info alert-dismissible" id="success-alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-info"></i> Konfirmasi !</h4>
          <?php echo $this->session->flashdata('konfirm'); ?>
        </div>
      <?php endif; ?>
      <form action="<?php echo base_url();?>gaji_kesejahteraan_karyawan/simpan_data" method="post" onsubmit="return konfirm()">
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
        <tr>
          <td>Januari</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_jan" id="inp_sptwp_jan" value="<?php echo $bln_1_1;?>" style="text-align: right;" oninput="goSPTJan(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_jan" id="inp_pemeriksa_jan" value="<?php echo $bln_1_2;?>" style="text-align: right;" oninput="goPEMJan(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_jan" id="inp_koreksi_jan" value="<?php echo $bln_1_1 - $bln_1_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Februari</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_feb" id="inp_sptwp_feb" value="<?php echo $bln_2_1;?>" style="text-align: right;" oninput="goSPTFeb(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_feb" id="inp_pemeriksa_feb" value="<?php echo $bln_2_2;?>" style="text-align: right;" oninput="goPEMFeb(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_feb" id="inp_koreksi_feb" value="<?php echo $bln_2_1 - $bln_2_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Maret</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_mar" id="inp_sptwp_mar" value="<?php echo $bln_3_1;?>" style="text-align: right;" oninput="goSPTMar(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_mar" id="inp_pemeriksa_mar" value="<?php echo $bln_3_2;?>" style="text-align: right;" oninput="goPEMMar(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_mar" id="inp_koreksi_mar" value="<?php echo $bln_3_1 - $bln_3_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>April</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_apr" id="inp_sptwp_apr" value="<?php echo $bln_4_1;?>" style="text-align: right;" oninput="goSPTApr(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_apr" id="inp_pemeriksa_apr" value="<?php echo $bln_4_2;?>" style="text-align: right;" oninput="goPEMApr(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_apr" id="inp_koreksi_apr" value="<?php echo $bln_4_1 - $bln_4_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Mei</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_mei" id="inp_sptwp_mei" value="<?php echo $bln_5_1;?>" style="text-align: right;" oninput="goSPTMei(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_mei" id="inp_pemeriksa_mei" value="<?php echo $bln_5_2;?>" style="text-align: right;" oninput="goPEMMei(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_mei" id="inp_koreksi_mei" value="<?php echo $bln_5_1 - $bln_5_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Juni</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_jun" id="inp_sptwp_jun" value="<?php echo $bln_6_1;?>" style="text-align: right;" oninput="goSPTJun(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_jun" id="inp_pemeriksa_jun" value="<?php echo $bln_6_2;?>" style="text-align: right;" oninput="goPEMJun(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_jun" id="inp_koreksi_jun" value="<?php echo $bln_6_1 - $bln_6_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Juli</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_jul" id="inp_sptwp_jul" value="<?php echo $bln_7_1;?>" style="text-align: right;" oninput="goSPTJul(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_jul" id="inp_pemeriksa_jul" value="<?php echo $bln_7_2;?>" style="text-align: right;" oninput="goPEMJul(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_jul" id="inp_koreksi_jul" value="<?php echo $bln_7_1 - $bln_7_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Agustus</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_agu" id="inp_sptwp_agu" value="<?php echo $bln_8_1;?>" style="text-align: right;" oninput="goSPTAgu(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_agu" id="inp_pemeriksa_agu" value="<?php echo $bln_8_2;?>" style="text-align: right;" oninput="goPEMAgu(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_agu" id="inp_koreksi_agu" value="<?php echo $bln_8_1 - $bln_8_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>September</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_sep" id="inp_sptwp_sep" value="<?php echo $bln_9_1;?>" style="text-align: right;" oninput="goSPTSep(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_sep" id="inp_pemeriksa_sep" value="<?php echo $bln_9_2;?>" style="text-align: right;" oninput="goPEMSep(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_sep" id="inp_koreksi_sep" value="<?php echo $bln_9_1 - $bln_9_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Oktober</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_okt" id="inp_sptwp_okt" value="<?php echo $bln_10_1;?>" style="text-align: right;" oninput="goSPTOkt(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_okt" id="inp_pemeriksa_okt" value="<?php echo $bln_10_2;?>" style="text-align: right;" oninput="goPEMOkt(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_okt" id="inp_koreksi_okt" value="<?php echo $bln_10_1 - $bln_10_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>November</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_nov" id="inp_sptwp_nov" value="<?php echo $bln_11_1;?>" style="text-align: right;" oninput="goSPTNov(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_nov" id="inp_pemeriksa_nov" value="<?php echo $bln_11_2;?>" style="text-align: right;" oninput="goPEMNov(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_nov" id="inp_koreksi_nov" value="<?php echo $bln_11_1 - $bln_11_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Desember</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_des" id="inp_sptwp_des" value="<?php echo $bln_12_1;?>" style="text-align: right;" oninput="goSPTDes(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_des" id="inp_pemeriksa_des" value="<?php echo $bln_12_2;?>" style="text-align: right;" oninput="goPEMDes(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_des" id="inp_koreksi_des" value="<?php echo $bln_12_1 - $bln_12_2;?>" style="text-align: right;" readonly></td>
        </tr>
        <?php
        $tot_spt = $bln_1_1 + $bln_2_1 + $bln_3_1 + $bln_4_1 + $bln_5_1 + $bln_6_1 + $bln_7_1 + $bln_8_1 + $bln_9_1 + $bln_10_1 + $bln_11_1 + $bln_12_1;
        $total_pemeriksa = $bln_1_2 + $bln_2_2 + $bln_3_2 + $bln_4_2 + $bln_5_2 + $bln_6_2 + $bln_7_2 + $bln_8_2 + $bln_9_2 + $bln_10_2 + $bln_11_2 + $bln_12_2;
        $total_koreksi = $tot_spt - $total_pemeriksa;
        ?>
        <tr style="background: #f8f9fa">
          <td>&nbsp;&nbsp;Jumlah</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_sptwp_total" id="inp_sptwp_total" value="<?php echo $tot_spt;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pemeriksa_total" id="inp_pemeriksa_total" value="<?php echo $total_pemeriksa;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_koreksi_total" id="inp_koreksi_total" value="<?php echo $total_koreksi;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td colspan="5" style="text-align: center; padding-top: 20px"><button type="submit" class="btn btn-primary">Perbaharui Data</button></td>
        </tr>
      </table>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() 
  {
    window.setTimeout(function () { $("#success-alert").alert('close'); }, 2000);
    $('.angka').number( true, 0 );
  });
  var goSPTJan = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_jan").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_jan").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTFeb = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_feb").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_feb").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTMar = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_mar").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_mar").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTApr = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_apr").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_apr").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTMei = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_mei").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_mei").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTJun = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_jun").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_jun").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTJul = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_jul").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_jul").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTAgu = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_agu").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_agu").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTSep = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_sep").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_sep").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTOkt = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_okt").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_okt").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTNov = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_nov").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_nov").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goSPTDes = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pemeriksa_des").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_des").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  //Pemeriksa
  var goPEMJan = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_jan").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_jan").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMFeb = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_feb").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_feb").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMMar = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_mar").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_mar").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMApr = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_apr").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_apr").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMMei = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_mei").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_mei").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMJun = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_jun").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_jun").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMJul = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_jul").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_jul").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMAgu = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_agu").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_agu").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMSep = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_sep").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_sep").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMOkt = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_okt").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_okt").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMNov = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_nov").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_nov").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  var goPEMDes = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_sptwp_des").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_koreksi_des").val(t_koreksi);
    $("#inp_sptwp_total").val(total_spt);
    $("#inp_pemeriksa_total").val(total_pemeriksa);
    $("#inp_koreksi_total").val(total_koreksi);
  }
  function total_spt()
  {
    var n_jan = $("#inp_sptwp_jan").val();
    var n_feb = $("#inp_sptwp_feb").val();
    var n_mar = $("#inp_sptwp_mar").val();
    var n_apr = $("#inp_sptwp_apr").val();
    var n_mei = $("#inp_sptwp_mei").val();
    var n_jun = $("#inp_sptwp_jun").val();
    var n_jul = $("#inp_sptwp_jul").val();
    var n_agu = $("#inp_sptwp_agu").val();
    var n_sep = $("#inp_sptwp_sep").val();
    var n_okt = $("#inp_sptwp_okt").val();
    var n_nov = $("#inp_sptwp_nov").val();
    var n_des = $("#inp_sptwp_des").val();
    return tot_spt = parseFloat(n_jan) + parseFloat(n_feb) + parseFloat(n_mar) + parseFloat(n_apr) + parseFloat(n_mei) + parseFloat(n_jun) + parseFloat(n_jul) + parseFloat(n_agu) + parseFloat(n_sep) + parseFloat(n_okt) + parseFloat(n_nov) + parseFloat(n_des);
  }
  function total_pemeriksa()
  {
    var n_jan = $("#inp_pemeriksa_jan").val();
    var n_feb = $("#inp_pemeriksa_feb").val();
    var n_mar = $("#inp_pemeriksa_mar").val();
    var n_apr = $("#inp_pemeriksa_apr").val();
    var n_mei = $("#inp_pemeriksa_mei").val();
    var n_jun = $("#inp_pemeriksa_jun").val();
    var n_jul = $("#inp_pemeriksa_jul").val();
    var n_agu = $("#inp_pemeriksa_agu").val();
    var n_sep = $("#inp_pemeriksa_sep").val();
    var n_okt = $("#inp_pemeriksa_okt").val();
    var n_nov = $("#inp_pemeriksa_nov").val();
    var n_des = $("#inp_pemeriksa_des").val();
    return tot_spt = parseFloat(n_jan) + parseFloat(n_feb) + parseFloat(n_mar) + parseFloat(n_apr) + parseFloat(n_mei) + parseFloat(n_jun) + parseFloat(n_jul) + parseFloat(n_agu) + parseFloat(n_sep) + parseFloat(n_okt) + parseFloat(n_nov) + parseFloat(n_des);
  }
  function total_koreksi()
  {
    var n_jan = $("#inp_koreksi_jan").val();
    var n_feb = $("#inp_koreksi_feb").val();
    var n_mar = $("#inp_koreksi_mar").val();
    var n_apr = $("#inp_koreksi_apr").val();
    var n_mei = $("#inp_koreksi_mei").val();
    var n_jun = $("#inp_koreksi_jun").val();
    var n_jul = $("#inp_koreksi_jul").val();
    var n_agu = $("#inp_koreksi_agu").val();
    var n_sep = $("#inp_koreksi_sep").val();
    var n_okt = $("#inp_koreksi_okt").val();
    var n_nov = $("#inp_koreksi_nov").val();
    var n_des = $("#inp_koreksi_des").val();
    return tot_spt = parseFloat(n_jan) + parseFloat(n_feb) + parseFloat(n_mar) + parseFloat(n_apr) + parseFloat(n_mei) + parseFloat(n_jun) + parseFloat(n_jul) + parseFloat(n_agu) + parseFloat(n_sep) + parseFloat(n_okt) + parseFloat(n_nov) + parseFloat(n_des);
  }
  function konfirm()
  {
    var psn = confirm("Yakin akan menyimpan data ?");
    if(psn==true)
    {
      return true;
    } else {
      return false;
    }
  }
</script>