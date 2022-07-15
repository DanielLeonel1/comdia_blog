<?php 
require 'V_admin_encabezado.php'; 

require 'config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

$sentencia = $conexion->query("SELECT * FROM usuario");
$usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<div class="container">
<table class="table table-bordered" style="margin-top:10px;">
  <thead>
    <tr class="" style="color: #fff; background-color:  #ffb76b">
      <th scope="col">#</th>
      <th scope="col">Rol</th>
      <th scope="col">Correo</th>
      <th colspan="2" style="text-align: center;">Operaciones</th>
    </tr>
  </thead>
  <tbody>
    <tr style="background-color:  #fff">
      <?php
        foreach ($usuario as $dato) {
          ?>
          <td style="background-color:  #fff"><?=$dato->id_usuario;?></td>

          <td style="background-color:  #fff">
          	<?php  
          	if ($dato->usu_id_rol == 1){
          		echo "Administrador";
          	}else{
          		echo "Usuario";
          	}
          	?>
          		
          </td>

          <td style="background-color:  #fff"><?=$dato->usu_correo;?></td>

          <td style="background-color:  #fff"><a type="button" href="V_modificarAdmin.php?id_usuario=<?php echo $dato->id_usuario; ?>" class="btn btn-success">Modificar</a></td>

          <td style="background-color:  #fff"><a type="button" href="php/eliminarAdmin.php?id_usuario=<?=$dato->id_usuario;?>" class="btn btn-danger">Eliminar</a></td>
    </tr>
          

          <?php
        }
      ?>
    
  </tbody>
</table>
</div>





<?php
require 'V_admin_pie.php';
?>