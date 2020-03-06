<?php
    require('fpdf/fpdf.php');
        
    class PDF extends FPDF{
    // Cabecera de página
       function Header()
       {
           // Logo           
           $this->Image('img/1.jpeg',20,10,70);
           // Arial bold 15
           $this->SetFont('Arial','B',15);
           // Movernos a la derecha
           $this->Cell(85);
           // Título
           $this->Cell(50,6,'LUGAR EMISION',1,0,'C');
           $this->Cell(15,6,'Dia',1,0,'C');
           $this->Cell(15,6,'Mes',1,0,'C');
           $this->Cell(15,6,utf8_decode('Año'),1,1,'C');
           $this->Cell(85);
           $this->Cell(50,6,'Cienega de oro',1,0,'C');
           $this->Cell(15,6,'10',1,0,'C');
           $this->Cell(15,6,'08',1,0,'C');
           $this->Cell(15,6,'2019',1,0,'C');
           // Salto de línea
           $this->Ln(20);
        }
       
       // Pie de página
        function Footer(){
           // Posición: a 1,5 cm del final
           $this->SetY(-15);
           // Arial italic 8
           $this->SetFont('Arial','I',8);
           // Número de página
           $this->Cell(0,10, utf8_decode('Page').$this->PageNo().'/{nb}',0,0,'C');
        }
    }
       
?>