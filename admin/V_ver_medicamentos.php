<?php 
require 'V_admin_encabezado.php'; 

require 'config.php';
require '../functions.php';


$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}

$sentencia = $conexion->query("SELECT * FROM medicamentos");
$medicamentos = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($articulo);

 ?>
<div class="table-responsive-xl" style="margin-top: 20px;">
<div class="container">

<a type="button" class="btn btn-primary" href="V_registroMedicamento.php" style="margin-bottom:20px;">Añadir Medicamento</a>


<table class="table table-bordered">
  <thead>
    <tr class="" style="color: #fff; background-color:  #ff6c00">
          <th scope="col">#</th>
          <th scope="col">Pricipio Activo</th>
          <th scope="col">Tiempo</th>
          <th scope="col">Efectos adversos</th>
          <th scope="col">Tipo de Diabetes</th>
          <th colspan="2" style="text-align: center;">OPERACIONES</th>
        </tr>
  </thead>

  <tbody>
    <tr style="background-color:  #fff">
    <?php
        foreach ($medicamentos as $dato) {
          ?>
          <td style="background-color:  #fff"><?=$dato->id_medicamento;?></td>

          <td style="background-color:  #fff"><?=$dato->med_principio_activo;?></td>

          <td style="background-color:  #fff"><?=$dato->med_tiempo;?></td>

          <td style="background-color:  #fff"><?=$dato->med_efectos_adversos;?></td>

          <td style="background-color:  #fff">

            <?php  
            if ($dato->med_id_tipo_diabetes == 1){
              echo "Tipo 1";
            }elseif($dato->med_id_tipo_diabetes == 2) {
              echo "Tipo 2";
            }elseif($dato->med_id_tipo_diabetes == 3){
              echo "Gestacional";
            }else{
              echo "ERROR";
            }

            ?>

            </td>



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