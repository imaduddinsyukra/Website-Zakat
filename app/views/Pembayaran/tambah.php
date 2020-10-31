<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
</script>
<!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?=BASEURL;?>/home_index">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Pembayaran Zakat</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->

            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?=BASEURL;?>/home_index">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Pembayaran Zakat</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Form Tambah Pembayaran Zakat</h1>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
      <form action="<?= BASEURL; ?>/Pembayaran/aksi_tambah" method="POST">
        <h3><center>Data Pembayar</center></h3>
          
          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Nama Pembayar</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                         <input type="text" name='nama_pembayar' class="form-control" required="">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">No. HP Pembayar</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                         <input type="text" name='no_hp_pembayar' class="form-control" required="">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Alamat</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                         <input type="text" name='alamat_pembayar' class="form-control" required="">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Mesjid</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <select name='id_mesjid' class="form-control" required="">
                            <?php foreach ($data['Mesjid'] as $dt):
                            ?>
                            <option value="<?=$dt['id_mesjid'];?>"><?= $dt['nama_mesjid'];?> </option>
                            <?php endforeach ?>
                          </select>
                      </div>
                  </div>
              </div>
          </div>

          <hr>                     
          <h3><center>Data Zakat</center></h3>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Jenis Zakat</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <select name='id_zakat' class="form-control" class="jenis_zakat" required="">
                            <?php foreach ($data['Zakat'] as $pnr):
                            ?>
                            <option value="<?=$pnr['id_zakat'];?>"><?= $pnr['jenis_zakat'];?> </option>
                            <?php endforeach ?>
                          </select>
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Jumlah Tanggungan</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="text" name="jumlah_tanggungan" class="form-control" placeholder="Jumlah anggota keluarga yang dibayarkan">
                      </div>
                  </div>
              </div>
          </div>


          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Pembayaran Beras</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <select name="pembayaran_beras" class="form-control">
                            <option value="0">--Pilih Jenis--</option>
                            <option value="2.5">2,5 kg</option>
                            <option value="2.7">2,7 kg</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>

          <hr>
          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Pembayaran Uang</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="text" name="pembayaran_uang" class="form-control" id="txt2"  onkeyup="sum();" placeholder="Total yang harus dibayarkan. Contoh: 48000">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Uang Yang Dibayarkan</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="text" class="form-control" id="txt1"  onkeyup="sum();" placeholder="Total yang dibayarkan Mustahik. Contoh: 50000">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Infak</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="number" name="infak" class="form-control" id="txt3"  onkeyup="sum();" placeholder="Sisa pembayaran apabila Mustahik ingin berinfak.">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Nama Amil</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                      <?php foreach ($data['Amil'] as $aml):?>
                      <?php endforeach ?>
                      <input type="hidden" name='id_amil' class="form-control" value="<?= $aml['id_amil'];?>" readonly>
                          <input type="text" name='nama_amil' class="form-control" value="<?= $_SESSION['username'];?>" readonly>
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Tanggal Penyerahan</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="date" id="last-name" name="tgl_penyerahan" required="required" class="form-control">
                      </div>
                  </div>
              </div>
          </div>
          
          <div class="form-group-inner">
              <div class="login-btn-inner">
                  <div class="row">
                      <div class="col-lg-3"></div>
                      <div class="col-lg-9">
                          <div class="login-horizental cancel-wp pull-left">
                              <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                              <button class="btn btn-warning" type="reset">Reset</button>
                              <a href="<?= BASEURL; ?>/Pembayaran/"  button type="button" class="btn btn-primary">Kembali</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>