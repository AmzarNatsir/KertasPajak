<main>
  <div class="container-fluid">
    <h1 class="mt-4">B.2 Harga Pokok Penjualan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">B.2 Harga Pokok Penjualan</li>
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
      <?php if ($this->session->flashdata('konfirm')): ?>
        <div class="alert alert-info alert-dismissible" id="success-alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-info"></i> Konfirmasi !</h4>
          <?php echo $this->session->flashdata('konfirm'); ?>
        </div>
      <?php endif; ?>
      <form action="<?php echo base_url();?>harga_pokok_penjualan/simpan_data" method="post" onsubmit="return konfirm()">
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
          <td>Persediaan Awal Bahan Baku</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_spt_row_1" id="inp_spt_row_1" value="<?php echo (empty($res->b_2_1_spt)) ? 0 : $res->b_2_1_spt;?>" style="text-align: right;" oninput="goSPTRow_1(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pem_row_1" id="inp_pem_row_1" value="<?php echo (empty($res->b_2_1_pem)) ? 0 : $res->b_2_1_pem;?>" style="text-align: right;" oninput="goPEMRow_1(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_kor_row_1" id="inp_kor_row_1" value="<?php echo (empty($res->b_2_1_spt)) ? 0 : $res->b_2_1_spt - $res->b_2_1_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Pembelian Bahan Baku</td>
          <td style="text-align: center;">B.2.1</td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_spt_row_2" id="inp_spt_row_2" value="<?php echo (empty($res->b_2_2_spt)) ? 0 : $res->b_2_2_spt;?>" style="text-align: right;" oninput="goSPTRow_2(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pem_row_2" id="inp_pem_row_2" value="<?php echo (empty($res->b_2_2_pem)) ? 0 : $res->b_2_2_pem;?>" style="text-align: right;" oninput="goPEMRow_2(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_kor_row_2" id="inp_kor_row_2" value="<?php echo (empty($res->b_2_2_spt)) ? 0 : $res->b_2_2_spt - $res->b_2_2_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Persediaan Akhir Bahan Baku</td>
          <td style="text-align: center;">B.2.2</td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_spt_row_3" id="inp_spt_row_3" value="<?php echo (empty($res->b_2_3_spt)) ? 0 : $res->b_2_3_spt;?>" style="text-align: right;" oninput="goSPTRow_3(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pem_row_3" id="inp_pem_row_3" value="<?php echo (empty($res->b_2_3_pem)) ? 0 : $res->b_2_3_pem;?>" style="text-align: right;" oninput="goPEMRow_3(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_kor_row_3" id="inp_kor_row_3" value="<?php echo (empty($res->b_2_3_spt)) ? 0 : $res->b_2_3_spt - $res->b_2_3_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<b>Pemakaian Bahan Baku</b></td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_spt_row_4" id="tot_spt_row_4" value="<?php echo (empty($res->b_total_1_spt)) ? 0 : $res->b_total_1_spt;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_pem_row_4" id="tot_pem_row_4" value="<?php echo (empty($res->b_total_1_pem)) ? 0 : $res->b_total_1_pem;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_kor_row_4" id="tot_kor_row_4" value="<?php echo (empty($res->b_total_1_spt)) ? 0 : $res->b_total_1_spt - $res->b_total_1_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Tenaga Kerja Langsung</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_spt_row_5" id="inp_spt_row_5" value="<?php echo (empty($res->b_2_4_spt)) ? 0 : $res->b_2_4_spt;?>" style="text-align: right;" oninput="goSPTRow_5(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pem_row_5" id="inp_pem_row_5" value="<?php echo (empty($res->b_2_4_pem)) ? 0 : $res->b_2_4_pem;?>" style="text-align: right;" oninput="goPEMRow_5(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_kor_row_5" id="inp_kor_row_5" value="<?php echo (empty($res->b_2_4_spt)) ? 0 : $res->b_2_4_spt - $res->b_2_4_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Biaya Overhead</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_spt_row_6" id="inp_spt_row_6" value="<?php echo (empty($res->b_2_5_spt)) ? 0 : $res->b_2_5_spt;?>" style="text-align: right;" oninput="goSPTRow_6(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pem_row_6" id="inp_pem_row_6" value="<?php echo (empty($res->b_2_5_pem)) ? 0 : $res->b_2_5_pem;?>" style="text-align: right;" oninput="goPEMRow_6(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_kor_row_6" id="inp_kor_row_6" value="<?php echo (empty($res->b_2_5_spt)) ? 0 : $res->b_2_5_spt - $res->b_2_5_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<b>Jumlah Biaya Produksi</b></td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_spt_row_7" id="tot_spt_row_7" value="<?php echo (empty($res->b_total_2_spt)) ? 0 : $res->b_total_2_spt;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_pem_row_7" id="tot_pem_row_7" value="<?php echo (empty($res->b_total_2_pem)) ? 0 : $res->b_total_2_pem;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_kor_row_7" id="tot_kor_row_7" value="<?php echo (empty($res->b_total_2_spt)) ? 0 : $res->b_total_2_spt - $res->b_total_2_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Persediaan Awal</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_spt_row_8" id="inp_spt_row_8" value="<?php echo (empty($res->b_2_6_spt)) ? 0 : $res->b_2_6_spt;?>" style="text-align: right;" oninput="goSPTRow_8(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pem_row_8" id="inp_pem_row_8" value="<?php echo (empty($res->b_2_6_pem)) ? 0 : $res->b_2_6_pem;?>" style="text-align: right;" oninput="goPEMRow_8(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_kor_row_8" id="inp_kor_row_8" value="<?php echo (empty($res->b_2_6_spt)) ? 0 : $res->b_2_6_spt - $res->b_2_6_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<b>Barang Tersedia Untuk Dijual</b></td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_spt_row_9" id="tot_spt_row_9" value="<?php echo (empty($res->b_total_3_spt)) ? 0 : $res->b_total_3_spt;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_pem_row_9" id="tot_pem_row_9" value="<?php echo (empty($res->b_total_3_pem)) ? 0 : $res->b_total_3_pem;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_kor_row_9" id="tot_kor_row_9" value="<?php echo (empty($res->b_total_3_spt)) ? 0 : $res->b_total_3_spt - $res->b_total_3_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>Persediaan Akhir Barang Jadi</td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_spt_row_10" id="inp_spt_row_10" value="<?php echo (empty($res->b_2_7_spt)) ? 0 : $res->b_2_7_spt;?>" style="text-align: right;" oninput="goSPTRow_10(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_pem_row_10" id="inp_pem_row_10" value="<?php echo (empty($res->b_2_7_pem)) ? 0 : $res->b_2_7_pem;?>" style="text-align: right;" oninput="goPEMRow_10(this)" required></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="inp_kor_row_10" id="inp_kor_row_10" value="<?php echo (empty($res->b_2_7_spt)) ? 0 : $res->b_2_7_spt - $res->b_2_7_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<b>HPP</b></td>
          <td></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_spt_row_11" id="tot_spt_row_11" value="<?php echo (empty($res->b_total_4_spt)) ? 0 : $res->b_total_4_spt;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_pem_row_11" id="tot_pem_row_11" value="<?php echo (empty($res->b_total_4_pem)) ? 0 : $res->b_total_4_pem;?>" style="text-align: right;" readonly></td>
          <td style="text-align: right;"><input type="text" class="form-control angka" name="tot_kor_row_11" id="tot_kor_row_11" value="<?php echo (empty($res->b_total_4_spt)) ? 0 : $res->b_total_4_spt - $res->b_total_4_pem;?>" style="text-align: right;" readonly></td>
        </tr>
        <tr>
          <td colspan="5" style="text-align: center; padding-top: 20px"><button type="submit" class="btn btn-primary">Perbaharui Data</button></td>
        </tr>
      </table>
      </form>
    </div>
  </div>
</main>
<script type="text/javascript">
  $(document).ready(function() 
  {
    window.setTimeout(function () { $("#success-alert").alert('close'); }, 2000);
    $('.angka').number( true, 0 );
  });
  var goSPTRow_1 = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pem_row_1").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_1").val(t_koreksi);
    $("#tot_spt_row_4").val(total_spt_pemakaian_bb);
    $("#tot_kor_row_4").val(total_kor_pemakaian_bb);
    $("#tot_spt_row_7").val(total_spt_biaya_produksi);
    $("#tot_kor_row_7").val(total_kor_biaya_produksi);
    $("#tot_spt_row_9").val(total_spt_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_spt_row_11").val(total_spt_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  var goSPTRow_2 = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pem_row_2").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_2").val(t_koreksi);
    $("#tot_spt_row_4").val(total_spt_pemakaian_bb);
    $("#tot_kor_row_4").val(total_kor_pemakaian_bb);
    $("#tot_spt_row_7").val(total_spt_biaya_produksi);
    $("#tot_kor_row_7").val(total_kor_biaya_produksi);
    $("#tot_spt_row_9").val(total_spt_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_spt_row_11").val(total_spt_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  var goSPTRow_3 = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pem_row_3").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_3").val(t_koreksi);
    $("#tot_spt_row_4").val(total_spt_pemakaian_bb);
    $("#tot_kor_row_4").val(total_kor_pemakaian_bb);
    $("#tot_spt_row_7").val(total_spt_biaya_produksi);
    $("#tot_kor_row_7").val(total_kor_biaya_produksi);
    $("#tot_spt_row_9").val(total_spt_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_spt_row_11").val(total_spt_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  var goPEMRow_1 = function(el)
  {
    var inp_pmrks  = $(el).val();
    var inp_spt = $("#inp_spt_row_1").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_1").val(t_koreksi);
    $("#tot_pem_row_4").val(total_pem_pemakaian_bb);
    $("#tot_kor_row_4").val(total_kor_pemakaian_bb);
    $("#tot_pem_row_7").val(total_pem_biaya_produksi);
    $("#tot_kor_row_7").val(total_kor_biaya_produksi);
    $("#tot_pem_row_9").val(total_pem_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_pem_row_11").val(total_pem_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  var goPEMRow_2 = function(el)
  {
    var inp_pmrks  = $(el).val();
    var inp_spt = $("#inp_spt_row_2").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_2").val(t_koreksi);
    $("#tot_pem_row_4").val(total_pem_pemakaian_bb);
    $("#tot_kor_row_4").val(total_kor_pemakaian_bb);
    $("#tot_pem_row_7").val(total_pem_biaya_produksi);
    $("#tot_kor_row_7").val(total_kor_biaya_produksi);
    $("#tot_pem_row_9").val(total_pem_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_pem_row_11").val(total_pem_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  var goPEMRow_3 = function(el)
  {
    var inp_pmrks  = $(el).val();
    var inp_spt = $("#inp_spt_row_3").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_3").val(t_koreksi);
    $("#tot_pem_row_4").val(total_pem_pemakaian_bb);
    $("#tot_kor_row_4").val(total_kor_pemakaian_bb);
    $("#tot_pem_row_7").val(total_pem_biaya_produksi);
    $("#tot_kor_row_7").val(total_kor_biaya_produksi);
    $("#tot_pem_row_9").val(total_pem_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_pem_row_11").val(total_pem_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  function total_spt_pemakaian_bb()
  {
    var n_spt_1 = $("#inp_spt_row_1").val();
    var n_spt_2 = $("#inp_spt_row_2").val();
    var n_spt_3 = $("#inp_spt_row_3").val();
    return tot_spt_pemakaian_bb = (parseFloat(n_spt_1) + parseFloat(n_spt_2)) - parseFloat(n_spt_3);
  }
  function total_pem_pemakaian_bb()
  {
    var n_pem_1 = $("#inp_pem_row_1").val();
    var n_pem_2 = $("#inp_pem_row_2").val();
    var n_pem_3 = $("#inp_pem_row_3").val();
    return tot_pem_pemakaian_bb = (parseFloat(n_pem_1) + parseFloat(n_pem_2)) - parseFloat(n_pem_3);
  }
  function total_kor_pemakaian_bb()
  {
    var n_kor_1 = $("#inp_kor_row_1").val();
    var n_kor_2 = $("#inp_kor_row_2").val();
    var n_kor_3 = $("#inp_kor_row_3").val();
    return tot_kor_pemakaian_bb = (parseFloat(n_kor_1) + parseFloat(n_kor_2)) - parseFloat(n_kor_3);
  }
  //tk
  var goSPTRow_5 = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pem_row_5").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_5").val(t_koreksi);
    $("#tot_spt_row_7").val(total_spt_biaya_produksi);
    $("#tot_kor_row_7").val(total_kor_biaya_produksi);
    $("#tot_spt_row_9").val(total_spt_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_spt_row_11").val(total_spt_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  var goSPTRow_6 = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pem_row_6").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_6").val(t_koreksi);
    $("#tot_spt_row_7").val(total_spt_biaya_produksi);
    $("#tot_kor_row_7").val(total_kor_biaya_produksi);
    $("#tot_spt_row_9").val(total_spt_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_spt_row_11").val(total_spt_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  var goPEMRow_5 = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_spt_row_5").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_5").val(t_koreksi);
    $("#tot_pem_row_7").val(total_pem_biaya_produksi);
    $("#tot_kor_row_7").val(total_kor_biaya_produksi);
    $("#tot_pem_row_9").val(total_pem_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_pem_row_11").val(total_pem_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  var goPEMRow_6 = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_spt_row_6").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_6").val(t_koreksi);
    $("#tot_pem_row_7").val(total_pem_biaya_produksi);
    $("#tot_kor_row_7").val(total_kor_biaya_produksi);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_pem_row_9").val(total_pem_persediaan_awal);
    $("#tot_pem_row_11").val(total_pem_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  function total_spt_biaya_produksi()
  {
    var n_spt_1 = $("#tot_spt_row_4").val();
    var n_spt_2 = $("#inp_spt_row_5").val();
    var n_spt_3 = $("#inp_spt_row_6").val();
    return tot_spt_biaya_produk = parseFloat(n_spt_1) + parseFloat(n_spt_2) + parseFloat(n_spt_3);
  }
  function total_pem_biaya_produksi()
  {
    var n_pem_1 = $("#tot_pem_row_4").val();
    var n_pem_2 = $("#inp_pem_row_5").val();
    var n_pem_3 = $("#inp_pem_row_6").val();
    return tot_pem_biaya_produk = parseFloat(n_pem_1) + parseFloat(n_pem_2) + parseFloat(n_pem_3);
  }
  function total_kor_biaya_produksi()
  {
    var n_kor_1 = $("#tot_kor_row_4").val();
    var n_kor_2 = $("#inp_kor_row_5").val();
    var n_kor_3 = $("#inp_kor_row_6").val();
    return tot_kor_biaya_produk = parseFloat(n_kor_1) + parseFloat(n_kor_2) + parseFloat(n_kor_3);
  }
  //persediaan awal
  var goSPTRow_8 = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pem_row_8").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_8").val(t_koreksi);
    $("#tot_spt_row_9").val(total_spt_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_spt_row_11").val(total_spt_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  var goPEMRow_8 = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_spt_row_8").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_8").val(t_koreksi);
    $("#tot_pem_row_9").val(total_pem_persediaan_awal);
    $("#tot_kor_row_9").val(total_kor_persediaan_awal);
    $("#tot_pem_row_11").val(total_pem_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  function total_spt_persediaan_awal()
  {
    var n_spt_1 = $("#tot_spt_row_7").val();
    var n_spt_2 = $("#inp_spt_row_8").val();
    return tot_spt = parseFloat(n_spt_1) + parseFloat(n_spt_2);
  }
  function total_pem_persediaan_awal()
  {
    var n_pem_1 = $("#tot_pem_row_7").val();
    var n_pem_2 = $("#inp_pem_row_8").val();
    return tot_pem = parseFloat(n_pem_1) + parseFloat(n_pem_2);
  }
  function total_kor_persediaan_awal()
  {
    var n_kor_1 = $("#tot_kor_row_7").val();
    var n_kor_2 = $("#inp_kor_row_8").val();
    return tot_kor = parseFloat(n_kor_1) + parseFloat(n_kor_2);
  }
  //HPP
  var goSPTRow_10 = function(el)
  {
    var inp_spt = $(el).val();
    var inp_pmrks = $("#inp_pem_row_10").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_10").val(t_koreksi);
    $("#tot_spt_row_11").val(total_spt_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  var goPEMRow_10 = function(el)
  {
    var inp_pmrks = $(el).val();
    var inp_spt = $("#inp_spt_row_10").val();
    var t_koreksi = inp_spt - inp_pmrks;
    $("#inp_kor_row_10").val(t_koreksi);
    $("#tot_pem_row_11").val(total_pem_hpp);
    $("#tot_kor_row_11").val(total_kor_hpp);
  }
  function total_spt_hpp()
  {
    var n_spt_1 = $("#tot_spt_row_9").val();
    var n_spt_2 = $("#inp_spt_row_10").val();
    return tot_spt = parseFloat(n_spt_1) - parseFloat(n_spt_2);
  }
  function total_pem_hpp()
  {
    var n_pem_1 = $("#tot_pem_row_9").val();
    var n_pem_2 = $("#inp_pem_row_10").val();
    return tot_pem = parseFloat(n_pem_1) - parseFloat(n_pem_2);
  }
  function total_kor_hpp()
  {
    var n_kor_1 = $("#tot_kor_row_9").val();
    var n_kor_2 = $("#inp_kor_row_10").val();
    return tot_kor = parseFloat(n_kor_1) - parseFloat(n_kor_2);
  }

  /*
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
  */
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