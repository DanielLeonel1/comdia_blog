<?php
require '../admin/config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}




  $usu_id_diabetes=(isset($_POST['usu_id_diabetes']) and trim($_POST['usu_id_diabetes'])!="")? $_POST['usu_id_diabetes']:"";//

  $usu_fecha=(isset($_POST['usu_fecha']) and trim($_POST['usu_fecha'])!="")? $_POST['usu_fecha']:"";//

  $usu_peso=(isset($_POST['usu_peso']) and trim($_POST['usu_peso'])!="")? $_POST['usu_peso']:"";//

  $usu_estatura=(isset($_POST['usu_estatura']) and trim($_POST['usu_estatura'])!="")? $_POST['usu_estatura']:"";//

  $usu_correo=(isset($_POST['usu_correo']) and trim($_POST['usu_correo'])!="")? $_POST['usu_correo']:"";//

  $usu_contra=(isset($_POST['usu_contra']) and trim($_POST['usu_contra'])!="")? $_POST['usu_contra']:"";//

  $usu_contra= hash('sha512', $usu_contra);

    



//RECAPTCHA//
$ip = $_SERVER["REMOTE_ADDR"];
$captcha = $_POST['g-recaptcha-response'];
$secretKey = "6Lfd9mUgAAAAALjIt6s99KEyBO4YsjnexAfmNM2k";

$respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha&remoteip=$ip");

$atributos=json_decode($respuesta, TRUE);

if (!$atributos['success']) {
  echo '
    <script>
        alert("VERIFICA EL CAPTCHA");
        window.location = "../files/V_registro_usuario.php";
    </script>
    ';
    exit();
}


////////////




$db = "INSERT INTO usuario(usu_id_rol, usu_id_diabetes, usu_fecha, usu_peso, usu_estatura, usu_correo, usu_contra)VALUES('2', '$usu_id_diabetes', '$usu_fecha', '$usu_peso', '$usu_estatura', '$usu_correo', '$usu_contra') ";


/* Verificar Correo Repetido */

$verificar_correo = "SELECT * FROM usuario WHERE usu_correo='$usu_correo'";
$consulta=$conexion->query($verificar_correo);
if ($consulta->fetch()) {
	echo '
    <script>
        alert("El correo ya existe, intenta con otro");
        window.location = "../files/V_registro_usuario.php";
    </script>
    ';
	exit();
}



$ejecutar = $conexion->query($db);

header('Location: ../files/V_login.php');

?>