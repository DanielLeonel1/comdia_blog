<?php
session_start();

require '../admin/config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}


$usu_correo = $_SESSION['usu_correo'];
$id_usuario = $_SESSION['id_usuario'];
$indice = 0;
	$Class=NULL;
	$sql="SELECT * FROM glucosa";

	$consulta=$conexion->query($sql);
	while ($row = $consulta->fetch()) {
		$Class[$indice] = new stdClass;
		$Class[$indice]->id = $row['id_glucosa'];
		$Class[$indice]->cantidad = $row['glu_cantidad'];
		$Class[$indice]->usuario = $row['glu_id_usuario'];
		$indice ++;
	}

	if (isset($_POST['registrar'])) {
		$glu_cantidad = $_POST['glu_cantidad'];
		
		date_default_timezone_set("America/Mexico_City");
		$glu_fecha=date("Y-m-d H:i:s");
		
		$CadenaSQL="INSERT INTO glucosa (glu_cantidad, glu_fecha, glu_id_usuario) VALUES ('$glu_cantidad', '$glu_fecha', '$id_usuario')";

		//echo $CadenaSQL;
		$consulta = $conexion->query($CadenaSQL);

		header('Location: ../consultar_glucosa.php');

		if (!$consulta) {
			 echo "</br><center><strong>Error en el registro</strong></center>";
		}else{
			echo "</br><center><strong>Error</strong></center>";
		}

	};


//print_r($_SESSION);


?>
