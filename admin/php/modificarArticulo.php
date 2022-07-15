<?php 
require '../config.php';
require '../../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../../error.php');
}

//print_r($_POST);
$id_articulo=(isset($_POST['id_articulo']) and trim($_POST['id_articulo'])!="")? $_POST['id_articulo']:"";//


$art_titulo=(isset($_POST['art_titulo']) and trim($_POST['art_titulo'])!="")? $_POST['art_titulo']:"";//

$art_extracto=(isset($_POST['art_extracto']) and trim($_POST['art_extracto'])!="")? $_POST['art_extracto']:"";//

//$art_fecha=(isset($_POST['art_fecha']) and trim($_POST['art_fecha'])!="")? $_POST['art_fecha']:"";//

date_default_timezone_set("America/Mexico_City");
$art_fecha=date("Y-m-d H:i:s");

$art_texto=(isset($_POST['art_texto']) and trim($_POST['art_texto'])!="")? $_POST['art_texto']:"";//

$art_thumb=(isset($_POST['art_thumb']) and trim($_POST['art_thumb'])!="")? $_POST['art_thumb']:"";//

$sentencia = $conexion->prepare("UPDATE articulo SET art_titulo = ?, art_extracto = ?, art_fecha = ?, art_texto = ?, art_thumb = ? WHERE id_articulo = ?;");

$resultado = $sentencia->execute([$art_titulo, $art_extracto, $art_fecha, $art_texto, $art_thumb, $id_articulo]);

header('Location:../');
//print_r($_POST);


?>