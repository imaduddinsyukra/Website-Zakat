<?php foreach( $data['pnr'] as $dt ) : ?>
<?php endforeach;?>

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
                                            <li><span class="bread-blod">Penerimaan Zakat</span>
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
                                            <li><span class="bread-blod">Penerimaan Zakat</span>
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
                                        <h1>Form Edit Penerimaan Zakat</h1>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
      <form action="<?= BASEURL; ?>/Penerimaan/edit_data" method="POST">
      <input type="hidden" id="last-name" name="id_penerimaan" required="required" class="form-control" value="<?= $dt['id_penerimaan']?>">
        <h3><center>Data Penerima</center></h3>
          
          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Nama Penerima</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                        <input type="hidden" name='id_penerima' class="form-control" required="" value="<?= $dt['id_penerima']?>">
                         <input type="text" name='nama_penerima' class="form-control" required="" value="<?= $dt['nama_penerima']?>" readonly>
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
                         <input type="text" name='alamat_penerima' class="form-control" required="" value="<?= $dt['alamat_penerima']?>" readonly>
                      </div>
                  </div>
              </div>
          </div>


          <hr>                     
          <h3><center>Data Penerimaan Zakat</center></h3>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Tanggal Penerimaan</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="date" name="tgl_penerimaan" class="form-control" value="<?= $dt['tgl_penerimaan']?>">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Jumlah Penerimaan Uang (Rp)</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="text" name="jumlah_penerimaan_uang" class="form-control" value="<?= $dt['jumlah_penerimaan_uang']?>">
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Jumlah Penerimaan Beras (Kg)</label>
                  </div>
                  <div class="col-lg-9">
                      <input type="text" name="jumlah_penerimaan_beras" class="form-control" value="<?= $dt['jumlah_penerimaan_beras']?>">
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
              <div class="login-btn-inner">
                  <div class="row">
                      <div class="col-lg-3"></div>
                      <div class="col-lg-9">
                          <div class="login-horizental cancel-wp pull-left">
                              <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                              <button class="btn btn-warning" type="reset">Reset</button>
                              <a href="<?= BASEURL; ?>/Penerimaan/"  button type="button" class="btn btn-primary">Kembali</a>
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