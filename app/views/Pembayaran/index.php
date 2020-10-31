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
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Tabel <span class="table-project-n">Data</span>  Pembayaran Zakat</h1>
                                    </div>
                                </div>
                                
                                <div class="sparkline13-graph">
                                  <p align="left"><a href="<?= BASEURL; ?>/Pembayaran/tambah" button type="button" class="btn btn-primary">Tambah Pembayaran Zakat</a>
                                  </p>
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                         <th>No </th>
                            <th>Tanggal Penyerahan</th>
                            <th>Nama Pembayar </th>
                            <th>Jenis Zakat </th>
                            <th>Pembayaran Beras</th>
                            <th>Pembayaran Uang</th>
                            <th>Jumlah Tanggungan </th>       
                            <th>Total Pembayaran </th>
                            <th>Nama Amil </th>
                            
                           
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      $no = 1;

        foreach( $data['pnr'] as $pnr) : ?><tr>

                    <td><?=$no++ ?>.</td>
                    <td><?= $pnr['tgl_penyerahan'];?></td>
                    <td><?= $pnr['nama_pembayar'];?></td>
                    <td><?= $pnr['jenis_zakat'];?></td>
                    <td><?= $pnr['pembayaran_beras'];?>Kg.</td>
                    <td>Rp.<?= number_format($pnr['pembayaran_uang']);?></td>
                    <td><?= $pnr['jumlah_tanggungan'];?></td>
                    <?php
                        $jml = $pnr['total_pembayaran'];
                        $jml2 = strlen($jml);
                        if ($jml2 <= 4 ) { ?>
                    <td><?= $pnr['total_pembayaran'];?> Kg</td>
                        <?php } else { ?>
                    <td>Rp. <?= number_format($pnr['total_pembayaran']);?></td>
                        <?php } ?>
                    <td><?= $pnr['nama_amil'];?></td>
                    <td>
                      <a href="<?= BASEURL; ?>/Pembayaran/form_edit/<?= $pnr['id_pembayaran']?>" class="btn btn-primary btn-sm">Edit</a>
                    </td>
</tr>
    <?php endforeach; ?>
   <table> 
    <?php foreach( $data['total'] as $ttl) : ?>
     
    <?php endforeach;?>
    <th>Total Beras<input type="text" name="" value=" <?= ' '.$ttl['jumlah_beras'] ;?> Kg." style="text-align: right"> </th>
    <th>Total Uang<input type="text" name="" value="Rp.<?= ' '.$ttl['jumlah_uang'] ;?>,- " style="text-align: right"></th>
    
    
   </table> 
                      
                        
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