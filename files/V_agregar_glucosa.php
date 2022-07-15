<?php 

require 'admin/config.php';
require 'functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

date_default_timezone_set("America/Mexico_City");
$fecha=date("Y-m-d H:i:s");

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

?>
<form method="POST" action="php/registro_glucosa.php">
<div class="container col-md-7" style="padding-bottom: 0px">
  <div class="card text-center">
    <div class="card-header" style="font-size: 30px; background-color: #ff7800; color: white;">
    AGREGAR GLUCOSA
    </div>
    <div class="card-body">

      <div class="form-group ">
        <label for="glucosa">NIVEL DE GLUCOSA</label>

        <input type="text" class="form-control" name="glu_cantidad" id="glu_cantidad" aria-describedby="emailHelp" placeholder="Intoduce tu nivel de Glucosa" >
      </div>

      <div class="form-group">

        <label for="fecha">FECHA DE REGISTRO</label>

        <input type="datetime" disabled="" class="form-control"  name="glu_fecha" id="fecha" value="<?php echo fecha($fecha);  ?>">
      </div>

      <button type="submit" name="registrar" id="registrar" class="btn btn-primary">Registrar Niveles de Glucosa</button> 

    </div>

  </div>
</div>
</form>

<?php  require 'V_footer.php'; ?>

<?php  require 'V_pie.php';  ?>