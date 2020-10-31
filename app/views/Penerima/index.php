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
                                            <li><span class="bread-blod">Penerima</span>
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
                                            <li><span class="bread-blod">Penerima</span>
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
                                        <h1>Tabel <span class="table-project-n">Data</span>  Penerima</h1>
                                    </div>
                                </div>
                                
                                <div class="sparkline13-graph">
                                  <p align="left"><a href="<?= BASEURL; ?>/Penerima/tambah" button type="button" class="btn btn-primary">Tambah Penerima</a>
                                  </p>
                                    <div class="datatable-dashv1-list custom-datatable-overright">
            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Nama Penerima </th>
                        <th>Alamat Penerima </th>
                        <th>Kategori </th>
                        <th>Status </th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach( $data['pnr'] as $pnr) : 
                            if($pnr['status']=='1'){
                                $status = 'Aktif';
                            }
                            else{
                                $status = 'Nonaktif';
                            }
                    ?>
                    <tr>
                        <td><?=$no++ ?>.</td>
                        <td><?= $pnr['nama_penerima'];?></td>
                        <td><?= $pnr['alamat_penerima'];?></td>
                        <td><?= $pnr['kategori'];?></td>
                        <td><a href="<?= BASEURL; ?>/Penerima/ganti_status/<?= $pnr['id_penerima']?>-<?=$pnr['status'];?>" class="btn btn-success btn-sm" onClick="return confirm('Apakah Anda Yakin Ingin Mengganti Status Penerima Ini?')"><?= $status;?></a></td>
                        <td>
                        <a href="<?= BASEURL; ?>/Penerima/form_edit/<?= $pnr['id_penerima']?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="<?= BASEURL; ?>/Penerima/hapus/<?= $pnr['id_penerima']?>" class="btn btn-danger btn-sm" onclick="return confirm('Data ini akan dihapus permanen');">Hapus</a>
                        </td>
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