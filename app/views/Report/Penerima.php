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
 <h2 align="center">Laporan Mustahik</h2>
 <br>
<table border="1">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Nama Penerima </th>
                        <th>Alamat Penerima </th>
                        <th>Kategori </th>
                        <th>Status </th>
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
                        <td><?= $status;?></td>
                    </tr>
                    <?php endforeach; ?>      
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
$mpdf->SetTitle("Laporan Penerima");$mpdf->SetDisplayMode('fullpage');
$mpdf->setHTMLHeader($header);
$mpdf->setHTMLFooter($footer);
$stylesheet = file_get_contents('assets/mpdf/mpdf.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($out);
$mpdf->Output('Laporan Penerima Zakat.pdf', 'I');
?>
</body>
</html>