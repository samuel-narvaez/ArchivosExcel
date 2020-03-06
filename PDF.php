<?php
require('fpdf/fpdf.php');
require 'Conexion.php';
require 'model.php';

$dato = new Facultdad();
$datos = $dato->getAll();

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/Logo-cvs.png',2,2,50);
    $this->Ln(20);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(65,10,'Nombre Facultades',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(20,10, 'Id', 1, 0, 'C', 0);
    $this->Cell(80,10,'Nombre Facultad', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Page').$this->PageNo().'/{nb}',0,0,'C');
}
}


// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
foreach ($datos['facultad'] as $dato) {
    $pdf->Cell(20,10, $dato['id'], 1, 0, 'C', 0);
    $pdf->Cell(80,10, $dato['nombreFacultad'], 1, 1, 'C', 0);
} 
$pdf->Output('D', 'Datos.pdf');
?>