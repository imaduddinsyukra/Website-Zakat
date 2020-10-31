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
                                            <li><span class="bread-blod">Mustahik</span>
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
                                            <li><span class="bread-blod">Mustahik</span>
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
                                        <h1>Form Edit Mustahik</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
      <form action="<?= BASEURL; ?>/Penerima/edit_data" method="POST">
          <input type="hidden" id="first-name" required="required" class="form-control " name="id_penerima" value="<?= $dt['id_penerima']?>">

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Nama Penerima</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="text" name="nama_penerima" required="required" class="form-control" value="<?= $dt['nama_penerima']?>">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Kategori Penerima</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <select name="kategori" class="form-control">
                            <option value="Kosong" <?php if( $dt['kategori']=='Kosong'){echo "selected"; } ?>>--Pilih Jenis--</option>
                            <option value="Fakir" <?php if( $dt['kategori']=='Fakir'){echo "selected"; } ?>>Fakir</option>
                            <option value="Miskin" <?php if( $dt['kategori']=='Miskin'){echo "selected"; } ?>>Miskin</option>
                            <option value="Riqab" <?php if( $dt['kategori']=='Riqab'){echo "selected"; } ?>>Riqab</option>
                            <option value="Gharim" <?php if( $dt['kategori']=='Gharim'){echo "selected"; } ?>>Gharim</option>
                            <option value="Mualaf" <?php if( $dt['kategori']=='Mualaf'){echo "selected"; } ?>>Mualaf</option>
                            <option value="Fisabilillah" <?php if( $dt['kategori']=='Fisabilillah'){echo "selected"; } ?>>Fisabililah</option>
                            <option value="Ibnu Sabil" <?php if( $dt['kategori']=='Ibnu Sabil'){echo "selected"; } ?>>Ibnu Sabil</option>
                            <option value="Amil Zakat" <?php if( $dt['kategori']=='Amil Zakat'){echo "selected"; } ?>>Amil Zakat</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Alamat Penerima</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input id="middle-name" class="form-control" type="text" name="alamat_penerima"  value="<?= $dt['alamat_penerima']?>">
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
                              <a href="<?= BASEURL; ?>/Penerima/"  button type="button" class="btn btn-primary">Kembali</a>
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