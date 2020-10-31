<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtSecondNumberValue) - parseInt(txtFirstNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
</script>
<form action="<?= BASEURL; ?>/Pembayaran/aksi_tambah" method="POST">

	<table width="50%" style="text-align: center;"> 
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Pembayaran </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a class="dropdown-item" href="#">Settings 1</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <h3><center>Data Pembayar</center></h3>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Pembayar </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name='nama_pembayar' class="form-control" required="">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">No. Handphone </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name='no_hp_pembayar' class="form-control" required="">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alamat</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name='no_hp_pembayar' class="form-control" required="">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Desa</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name='no_hp_pembayar' class="form-control" required="">
                        </div>
                    </div>
                    <hr>                     
                    <h3><center>Data Zakat</center></h3>
                       <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jenis Zakat</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select name='jenis_zakat' class="form-control" class="jenis_zakat" required="">
                            <?php foreach ($data['Zakat'] as $pnr):
                            ?>
               <option value="<?=$pnr['jenis_zakat'];?>"><?= $pnr['jenis_zakat'];?> </option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                       <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Pembayaran Beras (Kg)</label>
                        <div class="col-md-6 col-sm-6 ">
                          <select name="pembayaran_beras" class="form-control">
                            <option value="0">--Pilih Jenis--</option>
                            <option value="2.5">2,5 kg</option>
                            <option value="2.7">2,7 kg</option>
                            
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Tanggungan</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="tanggungan" class="form-control" placeholder="Jumlah anggota keluarga yang dibayarkan">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Pembayaran (Rp)</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="pembayaran_uang" class="form-control" id="txt1"  onkeyup="sum();" placeholder="Total yang harus dibayarkan. Contoh: 48000">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Yang Dibayarkan (Rp)</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" class="form-control" id="txt2"  onkeyup="sum();" placeholder="Total yang dibayarkan Mustahik. Contoh: 50000">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Infak (Rp)</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="pembayaran_uang" class="form-control" id="txt3"  onkeyup="sum();" readonly="" placeholder="Sisa pembayaran apabila Mustahik ingin berinfak.">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Amil </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name='id_amil' class="form-control" value="<?= $_SESSION['username'];?>" readonly>
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tanggal Penyerahan <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="date" id="last-name" name="tgl_penyerahan" required="required" class="form-control">
                        </div>
                      </div>
                    
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        <a href="<?= BASEURL; ?>/Pembayaran/"  button type="button" class="btn btn-primary">Kembali</a>
              <button class="btn btn-primary" type="reset" value="reset">Reset</button>
                          <button type="submit" class="btn btn-success" value="simpan">Simpan</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>


