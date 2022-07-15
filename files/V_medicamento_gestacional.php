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



$sentencia = $conexion->query("SELECT * FROM medicamentos WHERE med_id_tipo_diabetes = '3' ");
$gestacional = $sentencia->fetchAll(PDO::FETCH_OBJ);




?>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fa0303">ADVERTENCIA</h5>
      </div>
      <div class="modal-body">
        <h4>No es recomendable el uso de estos medicamentos.<br>
        Consulte a su médico.</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="cerrarmodal()">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="table-responsive">
  <div class="container">

    <table class="table table-bordered">
      <thead>
        <tr class="" style="color: #fff; background-color:  #ff6c00">
          <th scope="col">Pricipio Activo</th>
          <th scope="col">Tiempo</th>
          <th scope="col">Efectos adversos</th>
        </tr>
      </thead>


      <tbody>
    <tr style="background-color:  #fff">
      <?php
        foreach ($gestacional as $dato) {
          ?>
          <td style="background-color:  #fff"><?=$dato->med_principio_activo;?></td>

          <td style="background-color:  #fff"><?=$dato->med_tiempo;?></td>

          <td style="background-color:  #fff"><?=$dato->med_efectos_adversos;?></td>         
     
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




<script type="text/javascript">
 

 if (document.addEventListener){
   $('#myModal').modal('show')
 }
function cerrarmodal(){


$('#myModal').modal('hide');
my
}
</script>