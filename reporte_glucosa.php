<?php

require('fpdf/fpdf.php');
require 'admin/config.php';
require 'functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/ComDia.png',10,5,50);
    // Arial bold 15
    $this->SetFont('Arial','',25);
    // Movernos a la derecha
    $this->Cell(45);
    // Título
    $this->Cell(170,20,'CONTROL DE GLUCOSA',0,0,'C',0);
    // Salto de línea
    $this->Ln(20);
}
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}





session_start();
$id_usuario = $_SESSION['id_usuario'];
$conteo="SELECT count(*) as n FROM glucosa WHERE glu_id_usuario='$id_usuario' ";

$cont=$conexion->query($conteo);
$row2 = $cont->fetch();
$total= $row2["n"];
$sql = "SELECT id_glucosa, glu_cantidad, glu_fecha FROM glucosa WHERE glu_id_usuario= '$id_usuario' ";


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Helvetica','',14);
$pdf->SetFillColor(134, 252, 167);
$pdf->Ln(18);
$pdf->Cell(19);
$pdf->Cell(80,10,'Nivel de Glucosa',1,0,'C',1);
$pdf->Cell(70,10,'Fecha de Prueba',1,1,'C',1);

$pdf->SetFillColor(255, 255, 255);





$consulta= $conexion->query($sql);
while ($row = $consulta->fetch()) {

  $pdf->Cell(19);
  $pdf->Cell(80, 10, $row['glu_cantidad'], 1, 0, 'C', 0);
  $pdf->Cell(70, 10, fecha($row['glu_fecha']), 1, 1, 'C', 0);


  }



$pdf->Output();




?>