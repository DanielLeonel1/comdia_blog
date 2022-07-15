<?php 
require 'V_admin_encabezado.php'; 

require 'config.php';
require '../functions.php';


$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}

date_default_timezone_set("America/Mexico_City");
$fecha=date("Y-m-d");

$sentencia = $conexion->query("SELECT * FROM articulo");
$articulo = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($articulo);

 ?>

<div class="table-responsive-xl">
<div class="container">
<a type="button" class="btn btn-primary" href="V_registroArticulo.php" style="margin-top:10px;">Publicar Articulo</a>


<table class="table table-bordered " style="margin-top:10px;">
  <thead>
    <tr class="" style="color: #fff; background-color:  #ff6c00">
      <th scope="col">#</th>
      <th scope="col">TITULO</th>
      <th scope="col">EXTRACTO</th>
      <th scope="col">FECHA</th>
      <th colspan="1">FOTO</th>
      <th colspan="2" style="text-align: center;">OPERACIONES</th>
    </tr>
  </thead>
  <tbody>
    <tr style="background-color:  #fff">
      <?php
        foreach ($articulo as $dato) {
          ?>
          <td style="background-color:  #fff"><?=$dato->id_articulo;?></td>
          <td style="background-color:  #fff"><?=$dato->art_titulo;?></td>
          <td style="background-color:  #fff"><?=$dato->art_extracto;?></td>
          <td style="background-color:  #fff"><?php echo fecha($dato->art_fecha);?></td>
          <td style="background-color:  #fff"><img width="100px" src="../img/<?=$dato->art_thumb;?>"></td>
          
          <td style="background-color:  #fff"><a type="button" href="V_modificarArticulo.php?id_articulo=<?php echo $dato->id_articulo; ?>" class="btn btn-success">Modificar</a></td>

          <td style="background-color:  #fff"><a type="button" href="php/eliminarArticulo.php?id_articulo=<?=$dato->id_articulo;?>" class="btn btn-danger">Eliminar</a></td>
    </tr>
          

          <?php
        }
      ?>
    
  </tbody>
</table>
</div>
</div>


<?php  require 'V_admin_pie.php';  ?>


    
    