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
                                        <h1>Form Tambah Penerimaan Zakat</h1>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
<?php foreach ($data['bagi'] as $dt_bagi) : ?>
<?php endforeach;?>
   
      <form action="<?= BASEURL; ?>/Penerimaan/aksi_tambah" method="POST">
          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Tanggal Penerimaan</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="date" id="last-name" name="tgl_penerimaan" required="required" class="form-control">
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

          <table class="table border-table">
                    <thead>
                        <tr>
                            <th>No </th>
                            <th>Nama Mustahik</th>
                            <th>Jumlah Penerimaan Uang (Rp)</th>       
                            <th>Jumlah Penerimaan Beras (Kg)</th>       
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach( $data['pnr'] as $pnr) : 
                        ?>
                        <tr>
                            <td><?=$no++ ?>.</td>
                            <td>
                              <input type="hidden" name="id_penerima[]" required="required" class="form-control" value="<?= $pnr['id_penerima'];?>">
                              <?= $pnr['nama_penerima'];?>
                            </td>
                            <td>
                              <input type="text" name="jumlah_penerimaan_uang[]" class="form-control" value="<?= $dt_bagi['bagi_uang'];?>">
                            </td>
                            <td>
                              <input type="text" name="jumlah_penerimaan_beras[]" class="form-control" value="<?= $dt_bagi['bagi_beras'];?>">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <table> 
                <br>
                <p align="left"><b>Total Donasi: </b> Rp. <?= number_format($dt_bagi['total_donasi']);?></p>
                <p align="left"><b>Total Zakat Uang: </b> Rp. <?= number_format($dt_bagi['total_uang']);?></p>
                <p align="left"><b>Total Zakat Beras: </b> <?= $dt_bagi['total_beras'];?> Kg</p>
                <p align="left"><b>Total Penerima Zakat: </b> <?= $dt_bagi['jumlah_penerima'];?> Orang</p>
          
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