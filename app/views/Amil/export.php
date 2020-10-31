<?php 
require_once "../_config/config.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>DATA AMIL</title>
</head>
<body>
  <style type="text/css">
  body{
    font-family: sans-serif;
  }
  table{
    margin: 20px auto;
    border-collapse: collapse;
  }
  table th,
  table td{
    border: 1px solid #3c3c3c;
    padding: 3px 8px;

  }
  a{
    background: blue;
    color: #fff;
    padding: 8px 10px;
    text-decoration: none;
    border-radius: 2px;
  }
  </style>

  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data Amil.xls");
  ?>

  <center>
    <h1>DAFTAR DATA PEMBAYAR</h1>
  </center>

  <table border="1">
    <tr>
                  <th>NO</th>
                  <th>NIK</th>
                  <th>NAMA PEGAWAI</th>
                  <th>TEMPAT LAHIR</th>
                  <th>TGL LAHIR</th>
                  <th>JENIS KELAMIN</th>
                  <th>STATUS</th>
                  <th>ALAMAT</th>
                  <th>NO TELEPON</th>
                  <th>PHOTO</th>
                  <th><i class="glyphicon glyphicon-cog"> </th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $pnr = mysqli_query($con, "SELECT * FROM t_pembayar ORDER BY nama_pembayar ASC") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($pnr)) { ?>
                <tr>
                  <td><?= $no++ ?>.</td>
                  <td><?= $data['nik076'] ?></td>
                  <td><?= $data['nama_pegawai076'] ?></td>
                  <td><?= $data['tempat_lahir076'] ?></td>
                  <td><?= $data['tgl_lahir076'] ?></td>
                  <td><?= $data['jenis_kelamin076'] ?></td>
                  <td><?= $data['status076'] ?></td>
                  <td><?= $data['alamat076'] ?></td>
                  <td><?= $data['no_telepon076'] ?></td>
                  <td><img src="../_assets/img_pegawai/<?= $data['photo076'] ?>" width='40'></td>
                </tr>
                <?php 
                }
                ?>

  </table>
</body>
</html>