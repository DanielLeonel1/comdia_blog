<?php 

require 'admin/config.php';
require 'functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

date_default_timezone_set('America/Mexico_City');
$fechaActual = date('Y-m-d H:i');

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


$sentencia1 = $conexion->query("SELECT * FROM platillos WHERE id_usuario_platillo='$id_usuario' ");
$platillo = $sentencia1->fetchAll(PDO::FETCH_OBJ);

$usu_id_diabetes = $_SESSION['usu_id_diabetes'];


$sentencia2 = $conexion->query("SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 8 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ");
$verdura = $sentencia2->fetchAll(PDO::FETCH_OBJ);

?>
<form method="POST" action="">
<div class="container col-md-10" style="padding-bottom: 0px">
  <div class="card">
    <div class="card-header text-center" style="font-size: 15px; background-color: #1f53c5; color: white;">
    SELECCIONA EL PLATILLO
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="col">
                <label>Platillo</label>
                <div class="input-group justify-content-md-center">
                    <!--Dentro del select se hara un foreach de la consulta de los id y nombres del platillo-->
                    <select class="form-control" name="nombre_platillo" id="platillo">
                        <?php
                        foreach ($platillo as $dato) {
                            ?>
                            <option value= "<?=$dato->Id_platillo;?>"><?=$dato->nombre_platillo;?></td>         
                            <?php
                            }
                            ?>
                    </select>
                </div>
            </div>
            
            <div class="col">
            <label>Tipo de platillo</label>
                <div class="input-group justify-content-md-center">
                    <input type="text" class="form-control" disabled="" name="tipo_platillo" id="tipo" value="<?=$dato->tipo_platillo;?>"><!--Dentro se imprimira el tipo de platillo mediante una consulta al seleccionar el platillo-->
                </div>
            </div>
            <div class="col">
            <label>Fecha y hora de consumo</label>
                <div class="input-group justify-content-md-center">
                    <input type="text" class="form-control" disabled="" name="fecha_hora_platillo" id="fechahora" value="<?=$dato->fecha_hora_platillo;?>"><!--Dentro se imprimira la fecha y hora mediante una consulta al seleccionar el platillo-->
                </div>
            </div>
        </div>
    </div>

  </div>
</div>

<br>

<div class="table-responsive">
    <div class="container col-md-10">
        <table class="table table-bordered">
            <thead>
                <tr class="" style="color: #fff; background-color:  #36ae00">
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Energia</th>
                <th scope="col">Carbohidratos</th>
                <th scope="col">Proteinas</th>
                <th scope="col">Lipidos</th>
                <th scope="col">Fibra</th>
                <th scope="col">Colesterol</th>
                <th scope="col">IMG</th>
                <th scope="col">Añadir</th>
            </tr>
        </thead>


  <tbody>
  	<tr style="background-color:  #fff">
      <?php
        foreach ($verdura as $dato) {
          ?>
          <td style="background-color:  #fff"><?=$dato->alim_nombre;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_cantidad;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_energia;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_carbohidratos;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_proteinas;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_lipidos;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_fibra;?></td>

          <td style="background-color:  #fff"><?=$dato->alim_colesterol;?></td>

          <td style="background-color:  #fff"><img width="100px" src="img-alimentos/<?=$dato->alim_img;?>"></td>
          
          <td style="background-color:  #fff"><button type="submit" name="registrar" id="registrar" class="btn btn-primary">Añadir al platillo</button></td>
    </tr>
          

          <?php
        }
      ?>

  </tbody>
</table>
</form>

<?php  require 'V_footer.php'; ?>

<?php  require 'V_pie.php';  ?>