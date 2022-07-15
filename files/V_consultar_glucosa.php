<?php 

require 'admin/config.php';
require 'functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

date_default_timezone_set("America/Mexico_City");
$fecha=date("Y-m-d");


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




//print_r ($_SESSION);
$id_usuario = $_SESSION['id_usuario'];
$indice=0;
$glucosa=NULL;

$conteo="SELECT count(*) as n FROM glucosa WHERE glu_id_usuario='$id_usuario' ";

$cont=$conexion->query($conteo);
$row2 = $cont->fetch();
$total= $row2["n"];
$sql = "SELECT id_glucosa, glu_cantidad, glu_fecha FROM glucosa WHERE glu_id_usuario= '$id_usuario' ";

$consulta= $conexion->query($sql);
while ($row = $consulta->fetch()) {
  $glucosa[$indice] = new stdClass;
  $glucosa[$indice]->id_glucosa =$row['id_glucosa'];
  $glucosa[$indice]->glu_cantidad =$row['glu_cantidad'];
  $glucosa[$indice]->glu_fecha =$row['glu_fecha'];
  $indice++;

  }

?>

<div class="table-responsive">
  <div class="container">
    <a type="button" class="btn btn-danger" href="reporte_glucosa.php" style="margin-bottom:20px;">Generar Reporte PDF</a>

    <table class="table table-bordered">
      <thead>
        <tr class="" style="color: #fff; background-color:  #ff6c00">
          <th scope="col">Nivel de Glucosa</th>
          <th scope="col">Fecha</th>
          <th scope="col">Operacion</th>
        </tr>
      </thead>


      <tbody>
        <?php  
          if ($total!=0) {
            foreach($glucosa as $i => $cel){
          
          ?>

          <tr style="background-color:  #fff">

            <td style="background-color:  #fff"><?=$cel->glu_cantidad;?></td>
            <td style="background-color:  #fff">
              <?php
              echo fecha($cel->glu_fecha);
              ?>
            </td>
           
           <td style="background-color:  #fff"><center> <a type="button" href="php/eliminar_glucosa.php?id_glucosa=<?=$cel->id_glucosa;?>" class="btn btn-danger ">Eliminar</a> </center></td>

          
          </tr>

        <?php }}  ?>
              
      </tbody>
    </table>
  </div>
</div>


<?php  require 'V_footer.php'; ?>

<?php  require 'V_pie.php';  ?>