<?php 

require 'admin/config.php';
require 'functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

require 'V_header.php';

if (!$_SESSION) {
   echo '
    <script>
        alert("INICIA SESSION ANTES");
        window.location = "error.php";
    </script>
    ';
    die();
}



$usu_id_diabetes = $_SESSION['usu_id_diabetes'];
$sentencia = $conexion->query("SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 3 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ");
$frutas = $sentencia->fetchAll(PDO::FETCH_OBJ);




?>
<div class="table-responsive-xl">
<div class="container">
<table class="table table-bordered">
  <thead>
    <tr class="" style="color: #fff; background-color:  #d5d954">
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Energia</th>
      <th scope="col">Carbohidratos</th>
      <th scope="col">Proteinas</th>
      <th scope="col">Lipidos</th>
      <th scope="col">Fibra</th>
      <th scope="col">Colesterol</th>
      <th scope="col">Tipo de Diabetes</th>
      <th scope="col">Tipo de Alimento</th>
      <th scope="col">IMG</th>
      
    </tr>
  </thead>


  <tbody>
    <tr style="background-color:  #fff">
      <?php
        foreach ($frutas as $dato) {
          ?>
          <td style="background-color:  #fff"><?=$dato->alim_nombre;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_cantidad;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_energia;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_carbohidratos;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_proteinas;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_lipidos;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_fibra;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_colesterol;?></td>

          <td style="background-color:  #fff">

            <?php  
            if ($dato->alim_id_tipo_diabetes == 1){
              echo "Diabetes Tipo 1";
            }elseif ($dato->alim_id_tipo_diabetes == 2){
              echo "Tipo 2";
            }elseif($dato->alim_id_tipo_diabetes == 3){
              echo "Gestacional";
            }else{
              echo "No Registrado";
            }
            ?>
          </td>


          <td style="background-color:  #fff">

            <?php  
            if ($dato->alim_id_tipo_alimento == 3){
              echo "Frutas";
            }else{
              echo "No son Frutas";
            }
            ?>
              
          </td>

  
          <td style="background-color:  #fff"><img width="100px" src="img-alimentos/<?=$dato->alim_img;?>"></td>
          
     
    </tr>
          

          <?php
        }
      ?>

  </tbody>
</table>
</div>
</div>




<?php  require 'V_footer.php'; ?>

<?php  require 'V_pie.php';  ?>







