<?php 
require 'V_admin_encabezado.php'; 

require 'config.php';
require '../functions.php';


$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}

$sentencia = $conexion->query("SELECT * FROM alimentos");
$alimento = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($articulo);

 ?>
<div class="table-responsive-xl" style="margin-top: 20px;">
<div class="container">

<a type="button" class="btn btn-primary" href="V_registroComida.php" style="margin-bottom:20px;">Añadir Comida</a>


<table class="table table-bordered">
  <thead>
    <tr class="" style="color: #fff; background-color:  #ff6c00">
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo de Alimento</th>
      <th scope="col">Tipo de diabetes</th>
      <th scope="col">IMG</th>
      <th colspan="2" style="text-align: center;">OPERACIONES</th>
    </tr>
  </thead>


  <tbody>
    <?php
        foreach ($alimento as $dato) {
          ?>
          <td style="background-color:  #fff"><?=$dato->id_alimentos;?></td>
          <td style="background-color:  #fff"><?=$dato->alim_nombre;?></td>

          <td style="background-color:  #fff">

            <?php  
            if ($dato->alim_id_tipo_alimento == 8){
              echo "Verduras";
            }elseif($dato->alim_id_tipo_alimento == 6) {
              echo "Leche";
            }elseif($dato->alim_id_tipo_alimento == 7){
              echo "Leguminosas";
            }elseif($dato->alim_id_tipo_alimento == 3) {
              echo "Frutas";
            }elseif($dato->alim_id_tipo_alimento == 2){
              echo "Cereales Sin Grasa";
            }elseif($dato->alim_id_tipo_alimento == 5) {
              echo "Grasas Sin Proteina";
            }elseif($dato->alim_id_tipo_alimento == 1){
              echo "Alimentos de Origen Animal";
            }elseif($dato->alim_id_tipo_alimento == 4) {
              echo "Grasas Con Proteina";
            }else{
              echo "ERROR";
            }

            ?>
              
          </td>


          <td style="background-color:  #fff">
            <?php

             if($dato->alim_id_tipo_diabetes == 1){
              echo "Tipo 1";
            }elseif($dato->alim_id_tipo_diabetes == 2) {
              echo "Tipo 2";
            }elseif($dato->alim_id_tipo_diabetes == 3) {
              echo "Gestacional";
            }else{
              echo "No Esta Registrado";
            }

            ?>              

          </td>

          <td style="background-color:  #fff"><img width="100px" src="../img-alimentos/<?=$dato->alim_img;?>"></td>

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