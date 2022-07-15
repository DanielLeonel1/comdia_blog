<?php
require '../admin/config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}





$usu_correo=(isset($_POST['usu_correo']) and trim($_POST['usu_correo'])!="")? $_POST['usu_correo']:"";//

$usu_contra=(isset($_POST['usu_contra']) and trim($_POST['usu_contra'])!="")? $_POST['usu_contra']:"";//

$usu_contra= hash('sha512', $usu_contra);


$validar_login = "SELECT * FROM usuario WHERE usu_correo='$usu_correo' AND usu_contra='$usu_contra' ";



$consulta=$conexion->query($validar_login);


if ($rows = $consulta->fetch()) {

	session_start();

    $_SESSION['usu_id_diabetes'] = $rows['usu_id_diabetes'];
    $_SESSION['id_usuario'] = $rows['id_usuario'];
	$_SESSION['usu_correo'] = $usu_correo;
    $_SESSION['usu_tipo']=$rows[1]; 

    if($_SESSION['usu_tipo'] == 1){
        header('Location: ../admin/');

    }else {
        header('Location: ../');
    }
  
} else{
	echo '
    <script>
        alert("Usuario Incorrecto");
        window.location = "../files/V_login.php";
    </script>
    ';
    exit();
}
 
?>