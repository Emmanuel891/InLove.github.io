<?php
require('fpdf/fpdf/fpdf.php');
include("cn.php");  
$rand = range( 000000,999999);
shuffle($rand);
foreach ($rand as $val) {

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('corazon.jpg',10,8,33);
    // Arial bold 14
    $this->SetFont('Arial','B',14);
    // Movernos a la derecha
    $this->Cell(45);
    // Título
    $this->Cell(100,10,'Acta de Matrimonio',1,0,'C');
    // Salto de línea
    $this->Ln(40);

    $this->Image('camaleon.png',55,180,100);

}


// Pie de página
function Footer()
{

    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,iconv("UTF-8", "ISO-8859-1", "©").'2023 Acta de Matrimonio UTT',0,0,'C');
    // Número de página
    $this->Cell(0,10,utf8_decode('Page').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';
include("cn.php");
$id = $_GET["id"];
$usuarios = "SELECT * FROM registro WHERE id ='$id'";

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

 $resultado = mysqli_query($conexion, $usuarios);
    while ($row=mysqli_fetch_assoc($resultado)) {
    
    $pdf->Cell(110);
    $pdf->Cell(90,5,'Folio:'.$val,0,0,'C',0);    
    $pdf->Ln(10);

    // Movernos a la derecha
    $pdf->Cell(45);
    $pdf->Cell(30,5,'Persona 1:',0,0,'C',0);
    $pdf->Cell(90,5, $row['person1'],0,0,'C',0);
    $pdf->Ln(10);

     // Movernos a la derecha
    $pdf->Cell(45);
    $pdf->Cell(30,5,'Persona 2:',0,0,'C',0);
    $pdf->Cell(90,5, $row['person2'],0,0,'C',0);
    //Salto de linea
    $pdf->Ln(10);

    // Movernos a la derecha
    $pdf->Cell(45);
    $pdf->Cell(30,5,'Testigo 1:',0,0,'C',0);
    $pdf->Cell(90,5, $row['testigo1'],0,0,'C',0);
    //Salto de linea
    $pdf->Ln(10);

    // Movernos a la derecha
    $pdf->Cell(45);
    $pdf->Cell(30,5,'Testigo 2:',0,0,'C',0);
    $pdf->Cell(90,5, $row['testigo2'],0,0,'C',0);
    //Salto de linea
    $pdf->Ln(10);

     // Movernos a la derecha
    $pdf->Cell(45);
    $pdf->Cell(30,5,'Fecha de Matrimonio:',0,0,'C',0);
    $pdf->Cell(90,5, $row['date'],0,0,'C',0);
    //Salto de linea
    $pdf->Ln(10);

}

$pdf->Output();
}


?>