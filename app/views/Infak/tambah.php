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
                                            <li><span class="bread-blod">Infak</span>
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
                                            <li><span class="bread-blod">Infak</span>
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
                                        <h1>Form Tambah Infak</h1>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
      <form action="<?= BASEURL; ?>/Infak/aksi_tambah" method="POST">

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Nama Pembayar</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="text" class="form-control" name="nama_pembayar" required="">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Tanggal Infak</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="date" class="form-control" name="tgl_infak" required="">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Total Infak</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="text" class="form-control" name="total_infak" required="">
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
                              <a href="<?= BASEURL; ?>/Zakat/"  button type="button" class="btn btn-primary">Kembali</a>
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