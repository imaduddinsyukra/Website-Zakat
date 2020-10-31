
  
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <p><a href="<?= BASEURL; ?>/Kelurahan/tambah" button type="button" class="btn btn-primary">Tambah Kelurahan</a>
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
                          	<th>No</th>
                            <th>Id Kelurahan </th>
                            <th>Nama Kelurahan</th>
                            <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      $no = 1;

        foreach( $data['pnr'] as $pnr) : ?><tr>

           <td><?=$no++ ?>.</td>
					<td><?= $pnr['kode_kelurahan'];?></td>
					<td><?= $pnr['nama_kelurahan'];?></td>
          <td>
           <a href="<?= BASEURL; ?>/Kelurahan/form_edit/<?= $pnr['kode_kelurahan']?>" class="btn btn-primary btn-sm">Edit</a>
          <a href="<?= BASEURL; ?>/Kelurahan/hapus/<?= $pnr['kode_kelurahan']?>" class="btn btn-danger btn-sm" onclick="return confirm('Data ini akan dihapus permanen');">Hapus</a>
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