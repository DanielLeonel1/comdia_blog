<?php 

require '../config.php';
require '../../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../../error.php');
}

$art_titulo=(isset($_POST['art_titulo']) and trim($_POST['art_titulo'])!="")? $_POST['art_titulo']:"";//

$art_extracto=(isset($_POST['art_extracto']) and trim($_POST['art_extracto'])!="")? $_POST['art_extracto']:"";//

//$art_fecha=(isset($_POST['art_fecha']) and trim($_POST['art_fecha'])!="")? $_POST['art_fecha']:"";//

date_default_timezone_set("America/Mexico_City");
$art_fecha=date("Y-m-d H:i:s");

$art_texto=(isset($_POST['art_texto']) and trim($_POST['art_texto'])!="")? $_POST['art_texto']:"";//

$art_thumb=(isset($_POST['art_thumb']) and trim($_POST['art_thumb'])!="")? $_POST['art_thumb']:"";//

$insertar="INSERT INTO articulo (art_titulo, art_extracto, art_fecha, art_texto, art_thumb)
			VALUES('$art_titulo', '$art_extracto', '$art_fecha', '$art_texto', '$art_thumb')";

			$consulta=$conexion->query($insertar);

			header('Location:../');//Regrese  la pagina principal ./


?>