<?php
ob_start();
//Koneksi ke database
?>
<style>
td {
    padding: 3px 5px 3px 5px;
    border-right: 1px solid #666666;
    border-bottom: 1px solid #666666;
}
 
.head td {
    font-weight: bold;
    font-size: 12px;
    background: #b7f0ff; 
}
 
table .main tbody tr td {
    font-size: 12px;
}
 
table, table .main {
    width: 100%;
    border-top: 1px solid #666;
    border-left: 1px solid #666;
    border-collapse: collapse;
    background: #fff;
}
 
h1 {
    font-size:20px;
}
</style>
 </head>
 <body>
 <h2 align="center">Laporan Keuangan Zakat</h2>
 <br>
<table border="1">
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
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 1;
                    $total_beras = 0;
                    $total_uang = 0;
                    foreach( $data['pnr'] as $pnr) :
                  ?>
                <tr>
                    <td><?=$no++ ?>.</td>
                    <td><?= $pnr['tgl_penyerahan'];?></td>
                    <td><?= $pnr['nama_pembayar'];?></td>
                    <td><?= $pnr['jenis_zakat'];?></td>
                    <td align="right"><?= $pnr['pembayaran_beras'];?>Kg.</td>
                    <td align="right">Rp.<?= number_format($pnr['pembayaran_uang']);?></td>
                    <td align="center"><?= $pnr['jumlah_tanggungan'];?></td>
                    <?php
                        $jml = $pnr['total_pembayaran'];
                        $jml2 = strlen($jml);
                        if ($jml2 <= 4 ) { 
                          $total_beras = $total_beras+$pnr['total_pembayaran']; 
                          ?>
                    <td align="right"><?= $pnr['total_pembayaran'];?> Kg</td>
                        <?php } else { 
                          $total_uang = $total_uang+$pnr['total_pembayaran']; 
                          ?>
                    <td align="right">Rp. <?= number_format($pnr['total_pembayaran']);?></td>
                        <?php } ?>
                    <td><?= $pnr['nama_amil'];?></td>
                </tr>
                <?php endforeach; ?>  
                <tr>
                  <td align="right" colspan="7"><b>Grand Total</b></td>    
                  <td align="right">
                    <b>Beras: </b><?= $total_beras;?> Kg<br>
                    <b>Uang: </b>Rp. <?= number_format($total_uang);?>
                  </td>
                  <td></td>
                </tbody>
            </table>
     <br />
     <?php
date_default_timezone_set('Asia/Jakarta');?>
     <table width="787" cellpadding=0 cellspacing=0 style="border:none;" align="center">
  <tr style="border:none">
    <td width="212" style="border:none"><div align="center">&nbsp;</div></td>
    <td width="352" style="border:none">&nbsp;</td>
    <td width="352" style="border:none">&nbsp;</td>
    <td width="209" style="border:none"><div align="center"><span class="style1">
      Pekanbaru, <?php echo date("d M Y");?>
    </span></div></td>
  </tr>
  <tr style="border:none">
    <td width="212" style="border:none"><div align="center">&nbsp;</div></td>
    <td width="352" style="border:none">&nbsp;</td>
    <td width="352" style="border:none">&nbsp;</td>
    <td width="209" style="border:none"><div align="center">Ketua Amil Zakat</div></td>
  </tr>
  
  <tr style="border:none">
    <td style="border:none"><div align="center"></div></td>
    <td style="border:none">&nbsp;</td>
    <td width="352" style="border:none">&nbsp;</td>
    <td style="border:none"><div align="center"></div></td>
  </tr>
  <tr style="border:none">
    <td style="border:none"><div align="center"></div></td>
    <td style="border:none">&nbsp;</td>
    <td width="352" style="border:none">&nbsp;</td>
    <td style="border:none"><div align="center"></div></td>
  </tr>
  <tr style="border:none">
    <td style="border:none"><div align="center"></div></td>
    <td style="border:none">&nbsp;</td>
    <td width="352" style="border:none">&nbsp;</td>
    <td style="border:none"><div align="center"></div></td>
  </tr style="border:none">
  <tr style="border:none">
    <td style="border:none"><div align="center"><u>&nbsp;</u></div></td>
    <td style="border:none">&nbsp;</td>
    <td width="352" style="border:none">&nbsp;</td>
    <td style="border:none"><pre><div align="center"> <u>Hamba Allah</u> </div></pre></td>
  </tr>

</table>
<?php
date_default_timezone_set('Asia/Jakarta');
 $header = '<p align="center"><img src="../logo/kop.jpg" width="1000" height="110" /></p>
<hr align="left" width="896" style="height:inherit"  />
';

$footer = '<table cellpadding=0 cellspacing=0 style="border:none;">
           <tr><td style="margin-right:-5px;border:none;" align="left">
           Dicetak: '.date("d-m-Y H:i").'</td>
       <td style="margin-right:-5px;border:none;" align="right">
           Halaman: {PAGENO} / {nb}</td></tr></table>';            

$out = ob_get_contents();
ob_end_clean();
include("assets/mpdf/mpdf.php");
$mpdf=new mPDF('utf-8', "F4-L", 9 ,'Arial', 16, 16, 56, 16, 16, 4);
$mpdf->SetTitle("Laporan Keuangan Zakat");$mpdf->SetDisplayMode('fullpage');
$mpdf->setHTMLHeader($header);
$mpdf->setHTMLFooter($footer);
$stylesheet = file_get_contents('assets/mpdf/mpdf.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($out);
$mpdf->Output('Laporan Keuangan Zakat.pdf', 'I');
?>
</body>
</html>