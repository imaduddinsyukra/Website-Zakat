<style type="text/css">
    /* [IMAGE] */
.zoomD {
  width: 600px;
  height: auto;
  cursor: pointer;
}

/* [LIGHTBOX] */
#lb-back {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background: rgba(0, 0, 0, 0.5);
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  transition: all 0.4s;
}
#lb-back.show {
  visibility: visible;
  opacity: 1;
}
#lb-img {
  text-align: center;
}

/* [DOES NOT MATTER] */
html, body {
  padding: 0;
  margin: 0;
}
</style>

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
                                            <li><span class="bread-blod">Donasi</span>
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
                                            <li><span class="bread-blod">Donasi</span>
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
                                        <h1>Form Edit Status Donasi</h1>
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
<?php foreach ($data['Amil'] as $aml):?>
<?php endforeach ?>                                                
      <form action="<?= BASEURL; ?>/Donasi/edit_data" method="POST">
        <input type="hidden" id="first-name" required="required" class="form-control " name="id_donasi" value="<?= $dt['id_donasi']?>">
          <input type="hidden" name='id_amil' class="form-control" value="<?= $aml['id_amil'];?>" readonly>
          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Nama Donatur</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="text" id="last-name" name="nama_donatur" readonly="" class="form-control" value="<?= $dt['nama_donatur']?>">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">No. HP Donatur</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="text" id="last-name" name="no_hp_donatur" readonly="" class="form-control" value="<?= $dt['no_hp_donatur']?>">
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
                          <input type="text" id="last-name" name="alamat_donatur" readonly class="form-control" value="<?= $dt['alamat_donatur']?>">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Tanggal Donasi</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="text" id="last-name" name="tgl_donasi" readonly class="form-control" value="<?= $dt['tgl_donasi']?>">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Total Donasi</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <input type="text" id="last-name" name="total_donasi" readonly=""class="form-control" value="<?= $dt['total_donasi']?>">
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Bukti Donasi</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <img src="<?= BASEURL; ?>/<?= $dt['bukti_donasi']; ?>" class="zoomD" alt="" width="600">
                          <div id="lb-back">
                            <div id="lb-img"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="form-group-inner">
              <div class="row">
                  <div class="col-lg-3">
                      <label class="login2 pull-right pull-right-pro">Status Validasi</label>
                  </div>
                  <div class="col-lg-9">
                      <div class="form-select-list">
                          <select name="status_validasi" class="form-control">
                            <option value="2" <?php if($dt['status_validasi'] == "2") { echo "selected";} ?>>Belum Validasi</option>
                            <option value="1" <?php if($dt['status_validasi'] == "1") { echo "selected";} ?>>Diterima</option>
                            <option value="0" <?php if($dt['status_validasi'] == "0") { echo "selected";} ?>>Ditolak</option>
                          </select>
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
                              <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Simpan</button>
                              <button class="btn btn-warning" type="reset">Reset</button>
                              <a href="<?= BASEURL; ?>/Donasi/"  button type="button" class="btn btn-primary">Kembali</a>
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

    <script type="text/javascript">
        // This function will show the image in the lightbox
var zoomImg = function () {
  // Create evil image clone
  var clone = this.cloneNode();
  clone.classList.remove("zoomD");

  // Put evil clone into lightbox
  var lb = document.getElementById("lb-img");
  lb.innerHTML = "";
  lb.appendChild(clone);

  // Show lightbox
  lb = document.getElementById("lb-back");
  lb.classList.add("show");
};

window.addEventListener("load", function(){
  // Attach on click events to all .zoomD images
  var images = document.getElementsByClassName("zoomD");
  if (images.length>0) {
    for (var img of images) {
      img.addEventListener("click", zoomImg);
    }
  }

  // Click event to hide the lightbox
  document.getElementById("lb-back").addEventListener("click", function(){
    this.classList.remove("show");
  })
});
    </script>