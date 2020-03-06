<?php
    require_once('plantilla.php');
    require_once('model.php');

    $facultad = new Facultdad();
    $pdf = new PDF();

    $pdf->AliasNbPages();
    $pdf->AddPage();


    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial', 'B', 12);
    $data = $facultad->info($_GET['id']);    
    
    $pdf->Cell(30, 6, 'NOMBRE:',1,0,'C',1);
    $pdf->Cell(100, 6, $data['facultad']['nombreFacultad'],1,0,'C',0);

    $pdf->Cell(30, 6, 'Nit:',1,0,'C',1);
    $pdf->Cell(35, 6, $data['facultad']['id'],1,1,'C',0);


    $pdf->Cell(30, 8, 'Direccion:',1,0,'C',1);
    $pdf->Cell(100, 8, $data['facultad']['id'],1,0,'C',0);

    $pdf->Cell(30, 8, 'Telefono:',1,0,'C',1);
    $pdf->Cell(35, 8, $data['facultad']['id'],1,1,'C',0);

    $pdf->Ln(5);

    $pdf->Cell(25, 6, 'Cantidad',1,0,'C',1);
    $pdf->Cell(25, 6, 'Precio',1,0,'C',1);
    $pdf->Cell(25, 6, 'Total',1,0,'C',1);
    $pdf->Cell(120, 6, 'Descripcion',1,1,'C',1);

    $pdf->Cell(25, 10, '1000000',1,0,'C');
    $pdf->Cell(25, 10, '1000000',1,0,'C');
    $pdf->Cell(25, 10, '1000000',1,0,'C');
    $pdf->MultiCell(120, 6, 'kasdkasdkaldsalskdalksda',1,1,'C');

    $pdf->Cell(170, 6, 'Total A Pagar:',1,0,'C',1);
    $pdf->Cell(25, 6, $data['facultad']['id'],1,1,'C');

    $pdf->Ln(10);
    
    
    $pdf->Cell(43, 6, 'Firma Responsable:',0,0,'C');
    $pdf->Cell(40, 6, '__________________',0,0,'C');




    
   









    
    $pdf->Output('D', 'Reporte.pdf');
?>