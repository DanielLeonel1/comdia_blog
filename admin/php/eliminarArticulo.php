<?php 

require '../config.php';
require '../../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../../error.php');
}



$id_articulo=(isset($_GET['id_articulo']) and trim($_GET['id_articulo'])!="")? $_GET['id_articulo']:"";
$eliminar=" DELETE FROM articulo where id_articulo='$id_articulo' ";
      
  $consulta=$conexion->query($eliminar);
         //header("index.php?tipo=5");
         header('Location:../');
?>




?>