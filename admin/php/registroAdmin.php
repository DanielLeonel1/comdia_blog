<?php 

require '../config.php';
require '../../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../../error.php');
}


$usu_id_rol=(isset($_POST['usu_id_rol']) and trim($_POST['usu_id_rol'])!="")? $_POST['usu_id_rol']:"";//

$usu_correo=(isset($_POST['usu_correo']) and trim($_POST['usu_correo'])!="")? $_POST['usu_correo']:"";//

$usu_contra=(isset($_POST['usu_contra']) and trim($_POST['usu_contra'])!="")? $_POST['usu_contra']:"";//


$usu_contra= hash('sha512', $usu_contra);


$db = "INSERT INTO usuario(usu_id_rol, usu_id_diabetes, usu_fecha, usu_peso, usu_estatura, usu_correo, usu_contra)VALUES('$usu_id_rol', '1', '00-00-000', '1', '1', '$usu_correo', '$usu_contra') ";

//echo $db;
/* Verificar Correo Repetido */

$verificar_correo = "SELECT * FROM usuario WHERE usu_correo='$usu_correo'";
$consulta=$conexion->query($verificar_correo);
if ($consulta->fetch()) {
	echo '
    <script>
        alert("El correo ya existe, intenta con otro");
        window.location = "../V_registroAdmin.php";
    </script>
    ';
	exit();
}

$ejecutar = $conexion->query($db);

header('Location: ../V_verAdmin.php');

?>