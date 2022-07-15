<?php 
require 'V_admin_encabezado.php'; 

require 'config.php';
require '../functions.php';


$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}

$sentencia = $conexion->query("SELECT * FROM ejercicios");
$ejercicios = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($articulo);

 ?>
<div class="table-responsive-xl" style="margin-top: 20px;">
<div class="container">

<a type="button" class="btn btn-primary" href="V_registroEjercicio.php" style="margin-bottom:20px;">Añadir Ejercicios</a>


<table class="table table-bordered">
  <thead>
    <tr class="" style="color: #fff; background-color:  #ff6c00">
      <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Ritmo</th>
          <th scope="col">Repeticiones</th>
          <th scope="col">Musculos a Trabajar</th>
          <th scope="col">IMG</th>
          <th colspan="2" style="text-align: center;">OPERACIONES</th>
        </tr>
  </thead>

  <tbody>
    <tr style="background-color:  #fff">
    <?php
        foreach ($ejercicios as $dato) {
          ?>
          <td style="background-color:  #fff"><?=$dato->id_ejercicios;?></td>

          <td style="background-color:  #fff"><?=$dato->ejer_nombre;?></td>

          <td style="background-color:  #fff"><?=$dato->ejer_ritmo;?></td>

          <td style="background-color:  #fff"><?=$dato->ejer_repeticiones;?></td>

          <td style="background-color:  #fff"><?=$dato->ejer_musculos;?></td>

          <td style="background-color:  #fff"><img width="100px" src="../ejercicios/<?=$dato->ejer_img;?>"></td>



        



          <td style="background-color:  #fff"><a type="button" href="#" class="btn btn-success">Modificar</a></td>
          <td style="background-color:  #fff"><a type="button" href="#" class="btn btn-danger">Eliminar</a></td>
    </tr>
          
      <?php
        }
      ?>
    
  </tbody>

</table>
</div>
</div>



 <?php  require 'V_admin_pie.php';  ?>