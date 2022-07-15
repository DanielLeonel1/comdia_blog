<?php
require '../admin/config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}


session_start();
$glu_id_usuario = $_SESSION['id_usuario'];


$id_glucosa=(isset($_GET['id_glucosa']) and trim($_GET['id_glucosa'])!="")? $_GET['id_glucosa']:"";

$eliminar=" DELETE FROM glucosa where id_glucosa='$id_glucosa' AND glu_id_usuario = '$glu_id_usuario' ";


if (!$glu_id_usuario) {
    exit();
}else{
   $consulta=$conexion->query($eliminar);
    //header("index.php?tipo=5");
    header('Location: ../consultar_glucosa.php');

}






?>