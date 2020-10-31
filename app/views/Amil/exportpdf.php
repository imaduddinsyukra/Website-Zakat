  <?php
    include "../htmlpdf/fpdf.php";
    include "../_config/config.php";


    $pdf = new FPDF('L','mm','A3');//P atau L = orientasi kertas, mm = ukuran, A4 = jenis kertas
    $pdf->AddPage();
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial','B',10);//Arial = jenis huruf, B = format huruf, 10 = ukuran
    //$pdf->Cell(40,10,'',1);//40 = panjang, 10 = tinggi, 1 = tingkat ketebalan garis
    $pdf->Cell(180,10,'Data Pegawai',0,0,'C'); 
    $pdf->Ln(10);//Ln = pindah baris
    $pdf->Cell(10,10,'NO','1');
    $pdf->Cell(40,10,'nik076','1');
    $pdf->Cell(40,10,'nama_pegawai076','1');
    $pdf->Cell(40,10,'tempat_lahir076','1');
    $pdf->Cell(40,10,'tgl_lahir076','1');
    $pdf->Cell(40,10,'jenis_kelamin076','1');
    $pdf->Cell(40,10,'status076','1');
    $pdf->Cell(40,10,'alamat076','1');
    $pdf->Cell(40,10,'no_telepon076','1');
    
    //pindah baris
    $pdf->Ln(10);

    $no = 1;

     $sql_pegawai = mysqli_query($con, "SELECT * FROM t_pegawai076 ORDER BY nik076 ASC") or die (mysqli_error($con));
                  while ($data = mysqli_fetch_array($sql_pegawai)) { 

  
      $pdf->Cell(10,10, $no, 1);
      $pdf->Cell(40,10, $data["nik076"],1);
      $pdf->Cell(40,10, $data["nama_pegawai076"],1);
      $pdf->Cell(40,10, $data["tempat_lahir076"],1);
      $pdf->Cell(40,10, $data["tgl_lahir076"],1);
      $pdf->Cell(40,10, $data["jenis_kelamin076"],1);
      $pdf->Cell(40,10, $data["status076"],1);
      $pdf->Cell(40,10, $data["alamat076"],1);
      $pdf->Cell(40,10, $data["no_telepon076"],1);
    
      $pdf->Ln(10);
      $no++;

    }




    //cetak
    $pdf->Output();

                ?>

  