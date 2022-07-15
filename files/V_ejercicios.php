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

$sentencia = $conexion->query("SELECT * FROM ejercicios ");
$ejercicio = $sentencia->fetchAll(PDO::FETCH_OBJ);



?>

<div class="table-responsive">
  <div class="container">

    <table class="table table-bordered">
      <thead>
        <tr class="" style="color: #fff; background-color:  #ff6c00">
          <th scope="col">Nombre</th>
          <th scope="col">Ritmo</th>
          <th scope="col">Repeticiones</th>
          <th scope="col">Musculos a Trabajar</th>
          <th scope="col">IMG</th>
        </tr>
      </thead>


      <tbody>
    <tr style="background-color:  #fff">
      <?php
        foreach ($ejercicio as $dato) {
          ?>
          <td style="background-color:  #fff"><?=$dato->ejer_nombre;?></td>

          <td style="background-color:  #fff"><?=$dato->ejer_ritmo;?></td>

          <td style="background-color:  #fff"><?=$dato->ejer_repeticiones;?></td>

          <td style="background-color:  #fff"><?=$dato->ejer_musculos;?></td>

        

            
          <td style="background-color:  #fff"><img width="100px" src="ejercicios/<?=$dato->ejer_img;?>"></td>
          
     
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