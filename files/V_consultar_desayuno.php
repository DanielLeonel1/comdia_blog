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

$id_usuario = $_SESSION['id_usuario'];


$sentencia = $conexion->query("SELECT * FROM platillos WHERE tipo_platillo = 'Desayuno' AND id_usuario_platillo='$id_usuario' ORDER BY fecha_hora_platillo DESC ");
$desayuno = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<?php
        foreach ($desayuno as $dato) {
            ?>
<div class="container col-md-10" style="padding-bottom: 0px">
  <div class="card">
    <div class="card-body">
        <div class="form-row">
            <div class="col">
                <div class="input-group justify-content-md-center">
                <li style="color:blue"><a href=""><?=$dato->nombre_platillo;?></a></li>
                </div>
            </div>
            
            <div class="col">
                <div class="input-group justify-content-md-center">
                <label><?=$dato->tipo_platillo;?></label>
                </div>
            </div>
            <div class="col">
                <div class="input-group justify-content-md-center">
                <label><?=$dato->fecha_hora_platillo;?></label>
                </div>
            </div>
        </div>
    </div>

  </div>
</div>
<br>
<?php
        }
      ?>


<?php  require 'V_footer.php'; ?>

<?php  require 'V_pie.php';  ?>