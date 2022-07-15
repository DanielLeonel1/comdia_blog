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

?>
<form action="" method="post">
<div class="container  col-6">
<div class="card text-center">
  <div class="card-header bg-warning">
    <p class="text-uppercase">CALCULE SU ÍNDICE DE MASA CORPORAL.</p>
    <p class="text-uppercase">INTRODUZCA SU PESO Y ESTATURA QUE TIENE ACTUALMENTE.</p>
  </div>
  <div class="card-body">
    <label for=""></label>
            <div class="input-group justify-content-md-center">
            <div class="input-group-prepend">
              <button   class="form-control" type="button" disabled><i class="fas fa-weight"></i></button>
            </div>
            <input type="number" name="peso" id="" class="form-control col-12" placeholder="Peso" required="">
            </div>

            <label for=""></label>
            <div class="input-group justify-content-md-center">
            <div class="input-group-prepend">
              <button   class="form-control" type="button" disabled><i class="fas fa-text-height"></i></button>
            </div>
            <input type="number" name="estatura" id="" class="form-control col-12" placeholder="Estatura" required="">
            </div>
            <?php
                   $imc=0;
                   $peso = isset($_POST["peso"]) ? $_POST["peso"]:null;
                   $estatura = isset($_POST["estatura"]) ? $_POST["estatura"]:null;
                   if ($estatura !=0) {
                     $imc = $peso/pow($estatura, 2);
           
                   
           
                   if ($imc < 18) {
                     echo "<a>Peso bajo. Necesario valorar signos de desnutrición.
                     Tu índice de masa corporal es muy bajo, te recomendamos consultar con un nutriólogo, después de sus recomendaciones puedes crear una serie de dietas en nuestra App.</a>";
                   }
                   elseif ($imc >= 18 && $imc <= 24.9) {
                     echo "Normal. Tu índice de masa corporal es el indicado, ¡sigue así! Te invitamos a crear un seguimiento de tus dietas en nuestra App. No olvides consultar a tu nutriólogo de confianza.";
                   }
                   elseif ($imc >= 25 && $imc <= 26.9) {
                     echo "Sobrepeso. Tu índice de masa corporal es alto te recomendamos crear una nueva dieta en nuestra App y además no olvides consultar con tu nutriólogo de confianza.";
                   }
                   elseif ($imc == 27) {
                     echo "Obesidad. Tu índice de masa corporal es alto te recomendamos crear una nueva dieta en nuestra App y además no olvides consultar con tu nutriólogo de confianza.";
                   }
                   elseif ($imc >= 27 && $imc <= 29.9) {
                     echo "Obesidad grado I. Riesgo relativo alto para desarrollar enfermedades cardiovasculares.
                     Tu índice de masa corporal es alto te recomendamos crear una nueva dieta en nuestra App y además no olvides consultar con tu nutriólogo de confianza.";
                   }
                   elseif ($imc >= 30 && $imc <= 39.9 ) {
                     echo " Obesidad grado II. Riesgo relativo muy alto para el desarrollo de enfermedades cardiovasculares.
                     Tu índice de masa corporal es alto te recomendamos crear una nueva dieta en nuestra App y además no olvides consultar con tu nutriólogo de confianza.";
                   }
                   elseif ($imc >= 40) {
                     echo "Obesidad grado III Extrema o Mórbida. Riesgo relativo extremadamente alto para el desarrollo de enfermedades cardiovasculares.
                     Tu índice de masa corporal es alto te recomendamos crear una nueva dieta en nuestra App y además no olvides consultar con tu nutriólogo de confianza.";
                   }
                   }
            ?>
           

            <br>
    <button href="#" class="btn btn-primary" type="submit" value="calcular">Calcular</button>

  </div>
</div>
</div>
</form>
<?php  require 'V_footer.php'; ?>

<?php  require 'V_pie.php';  ?>