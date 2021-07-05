<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"> B.1.1 Penjualan Lokal</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">B.1.1 Penjualan Lokal</li>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Input Penjualan Lokal</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                              <label class="col-sm-3 col-form-label text-left">Nomor Invoice</label>
                              <label class="col-sm-3 col-form-label text-left">Tanggal Invoice</label>
                              <label class="col-sm-4 col-form-label text-left">Jumlah (Rp.)</label>
                        </div>
                        <div id="posItem">
                            <div class="form-group row">
                              <div class="col-sm-3">
                                  <input type="text" class="form-control" id="no_invoice" name="no_invoice[]" maxlength="50" required>
                              </div>
                              <div class="col-sm-3">
                                  <input type="date" class="form-control" name="tanggal[]" value="<?php echo date("Y-m-d");?>">                                
                              </div>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control angka" name="jumlah[]" value="0" style="text-align: right;">                                
                              </div>
                              <div class="col-sm-2">
                                  <button type="button" id="addBaris" data-original-title="Tambah Baris" class="btn btn-success btn-sm waves-effect waves-light"><i class="fa fa-plus"></i></button>
                              </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function() 
  {
    window.setTimeout(function () { $("#success-alert").alert('close'); }, 2000);
    $('.angka').number( true, 0 );
    $("#addBaris").on('click', function(e){
        const pKreditOption = ['option-1'];
        if(pKreditOption.length < 6){
          let newOption = pKreditOption.length + 1;
          let item = `option-${newOption}`;
          pKreditOption.push(item);

         let content = `<div class="form-group row">
                          <div class="col-sm-3">
                              <input type="text" class="form-control" id="no_invoice" name="no_invoice[]" maxlength="50" required>
                          </div>
                          <div class="col-sm-3">
                              <input type="date" class="form-control" name="tanggal[]" value="<?php echo date("Y-m-d");?>">                                
                          </div>
                          <div class="col-sm-4">
                              <input type="text" class="form-control angka" name="jumlah[]" value="0" style="text-align: right;">                                
                          </div>
                          <div class="col-sm-2">
                            <button type="button" id="removeItem" rel="tooltip" name="btnRemove[]" class="btn btn-danger btn-sm waves-effect waves-light"><i class="fa fa-minus"></i></button>
                          </div>                                
                        </div>`

              $("#posItem").append(content);
              $('.angka').number( true, 0 );
            }
            $("#posItem").on('click','#removeItem',function(e){
              e.preventDefault();
              $(this).closest('div.form-group').remove();                        
              pKreditOption.splice(-1,1);                     
          });
    });
});
</script>