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
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Tabel <span class="table-project-n">Data</span>  Donasi</h1>
                                    </div>
                                </div>
                                
                                <div class="sparkline13-graph">

                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                            <th>No </th>
                            <th>Tanggal Donasi </th>
                            <th>Nama Donatur </th>
                            <th>No HP </th>
                            <th>Alamat </th>
                            <th>Total Donasi </th>
                            <th>Bukti Donasi </th>
                            <th>Status Validasi </th>
                            <th>Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      $no = 1;

        foreach( $data['pnr'] as $pnr) : ?><tr>

                    <td><?=$no++ ?>.</td>
          <td><?= $pnr['tgl_donasi'];?></td>
          <td><?= $pnr['nama_donatur'];?></td>
          <td><?= $pnr['no_hp_donatur'];?></td>
          <td><?= $pnr['alamat_donatur'];?></td>
          <td><?= $pnr['total_donasi'];?></td>
          <td><img src="<?= BASEURL; ?>/<?= $pnr['bukti_donasi']; ?>" class="zoomD" alt="" width="600">
            <div id="lb-back">
              <div id="lb-img"></div>
            </div>
          </td>
          <td align="center">
            <?php if($pnr['status_validasi']=='0') {?>
                <!-- <a href="<?= BASEURL; ?>/Mesjid/hapus/<?= $pnr['id_mesjid']?>" class="btn btn-danger btn-sm" onclick="return confirm('Data ini akan dihapus permanen');"> --><button class="btn btn-danger btn-sm" style="width: 100px">Ditolak</button>
            <?php }elseif($pnr['status_validasi']=='1') {?>
                <!-- <a href="<?= BASEURL; ?>/Mesjid/hapus/<?= $pnr['id_mesjid']?>" class="btn btn-success btn-sm" onclick="return confirm('Data ini akan dihapus permanen');"> --><button class="btn btn-success btn-sm" style="width: 100px">Diterima</button>
            <?php }elseif($pnr['status_validasi']=='2') {?>
                <!-- <a href="<?= BASEURL; ?>/Mesjid/hapus/<?= $pnr['id_mesjid']?>" class="btn btn-warning btn-sm" onclick="return confirm('Data ini akan dihapus permanen');"> --><button class="btn btn-warning btn-sm" style="width: 100px">Belum Validasi</button>
            <?php } ?>
        </td>
        <td align="center"><a href="<?= BASEURL; ?>/Donasi/form_edit/<?= $pnr['id_donasi']?>" class="btn btn-primary btn-sm">Edit</a></td>

</tr>
    <?php endforeach; ?>

                      
                        
                      </tbody>
                    </table>
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