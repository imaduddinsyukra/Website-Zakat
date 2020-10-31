<?php foreach( $data['pnr'] as $dt ) : ?>
<?php endforeach;?>
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
                                        <h1>Form Edit Pembayaran Zakat</h1>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
      <form action="<?= BASEURL; ?>/Pembayaran/edit_data" method="POST">
      <input type="hidden" id="last-name" name="id_pembayaran" required="required" class="form-control" value="<?= $dt['id_pembayaran']?>">
        <h3><center>Data Pembayar</center></h3>
          
          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Nama Pembayar</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                        <input type="hidden" name='id_pembayar' class="form-control" required="" value="<?= $dt['id_pembayar']?>">
                         <input type="text" name='nama_pembayar' class="form-control" required="" value="<?= $dt['nama_pembayar']?>">
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
                         <input type="text" name='no_hp_pembayar' class="form-control" required="" value="<?= $dt['no_hp_pembayar']?>">
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
                         <input type="text" name='alamat_pembayar' class="form-control" required="" value="<?= $dt['alamat_pembayar']?>">
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
                          <select name="id_mesjid" class="form-control">
                              <option>Pilih Mesjid</option>
                              <?php foreach( $data['Mesjid'] as $dt2 ) : ?>
                              <?php 
                                  $selected = '';
                                  if($dt2['id_mesjid'] == $dt['id_mesjid']){
                                  $selected = 'selected="selected"';
                                  }
                              ?>
                              <option value="<?= $dt2['id_mesjid'];?>" <?= $selected;?>>
                              <?= $dt2['nama_mesjid'];?></option>
                          <?php endforeach; ?>
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
                              <option>Pilih Jenis Zakat</option>
                              <?php foreach( $data['Zakat'] as $dt3 ) : ?>
                              <?php 
                                  $selected = '';
                                  if($dt3['id_zakat'] == $dt['id_zakat']){
                                  $selected = 'selected="selected"';
                                  }
                              ?>
                              <option value="<?= $dt3['id_zakat'];?>" <?= $selected;?>>
                              <?= $dt3['jenis_zakat'];?></option>
                          <?php endforeach; ?>
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
                          <input type="text" name="jumlah_tanggungan" class="form-control" placeholder="Jumlah anggota keluarga yang dibayarkan" value="<?= $dt['jumlah_tanggungan']?>">
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
                            <option value="0" <?php if( $dt['pembayaran_beras']=='0'){echo "selected"; } ?>>--Pilih Jenis--</option>
                            <option value="2.5" <?php if( $dt['pembayaran_beras']=='2.5'){echo "selected"; } ?>>2,5 kg</option>
                            <option value="2.7" <?php if( $dt['pembayaran_beras']=='2.7'){echo "selected"; } ?>>2,7 kg</option>
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
                      <?php if($dt['pembayaran_uang']==0){ ?>
                          <input type="text" name="pembayaran_uang" class="form-control" id="txt2"  onkeyup="sum();" placeholder="Total yang harus dibayarkan. Contoh: 48000" value="<?= $dt['pembayaran_uang']?>">
                      <?php } else { ?>
                          <input type="text" name="pembayaran_uang" class="form-control" id="txt2"  onkeyup="sum();" placeholder="Total yang harus dibayarkan. Contoh: 48000" value="<?= $dt['total_pembayaran']?>">
                      <?php } ?>
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
                          <input type="date" id="last-name" name="tgl_penyerahan" required="required" class="form-control" value="<?= $dt['tgl_penyerahan']?>">
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