
  
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <p><a href="<?= BASEURL; ?>/Pembayaran/tambah2" button type="button" class="btn btn-primary">Tambah Pembayaran</a>
                    </p>
                     
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                         <th>No </th>
                            <th>Kode Pembayaran </th>
                            <th>Jenis Zakat </th>
                            <th>Pembayaran Beras</th>
                            <th>Pembayaran Uang</th>       
                            <th>Nama Pembayar </th>
                            <th>Jumlah Pembayaran </th>
                            <th>Nama Amil </th>
                            <th>Tanggal Penyerahan</th>
                            
                           
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      $no = 1;

        foreach( $data['pnr'] as $pnr) : ?><tr>

                   <td><?=$no++ ?>.</td>
					<td><?= $pnr['kode_pembayaran'];?></td>
          <td><?= $pnr['jenis_zakat'];?></td>
           <td><?= $pnr['pembayaran_beras'];?>Kg.</td>
          <td>Rp.<?= number_format($pnr['pembayaran_uang']);?>,00</td>
					<td><?= $pnr['nama_pembayar'];?></td>
          <?php
            $jml = $pnr['jumlah_pembayaran'];
            $jml2 = strlen($jml);

          if ($jml2 <= 4 ) { ?>
              <td><?= $pnr['jumlah_pembayaran'];?> Kg</td>
          <?php } else { ?>
					    <td>Rp. <?= $pnr['jumlah_pembayaran'];?></td>
          <?php } ?>
					<td><?= $pnr['nama_amil'];?></td>
					<td><?= $pnr['tgl_penyerahan'];?></td>
         
          <td>
          
          <a href="<?= BASEURL; ?>/Pembayaran/hapus/<?= $pnr['kode_pembayaran']?>" class="btn btn-danger btn-sm" onclick="return confirm('Data ini akan dihapus permanen');">Hapus</a>
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