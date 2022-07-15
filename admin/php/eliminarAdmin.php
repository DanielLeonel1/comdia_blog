<?php 

require '../config.php';
require '../../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../../error.php');
}



$id_usuario=(isset($_GET['id_usuario']) and trim($_GET['id_usuario'])!="")? $_GET['id_usuario']:"";
$eliminar=" DELETE FROM usuario where id_usuario='$id_usuario' ";
      
  $consulta=$conexion->query($eliminar);
         //header("index.php?tipo=5");
         header('Location: ../V_verAdmin.php');
?>




?>