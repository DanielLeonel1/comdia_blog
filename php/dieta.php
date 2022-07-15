<?php
session_start();
$usu_id_diabetes = $_SESSION['usu_id_diabetes'];

require '../admin/config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}


var_dump($_SESSION);


////////////////////VERDURAS/////////////////////////

$indice = 0;
$VerdurasClass = null;
$sql = "SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 8 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ";

$consulta = $conexion->query($sql);
  while ($row = $consulta->fetch()) {
    $VerdurasClass[$indice] = new stdClass();
    $VerdurasClass[$indice]->id_alimentos = $row['id_alimentos'];
    $VerdurasClass[$indice]->alim_energia = $row['alim_energia'];
    $VerdurasClass[$indice]->alim_carbohidratos = $row['alim_carbohidratos'];
    $VerdurasClass[$indice]->alim_proteinas = $row['alim_proteinas'];
    $VerdurasClass[$indice]->alim_lipidos = $row['alim_lipidos'];
    $VerdurasClass[$indice]->alim_fibra = $row['alim_fibra'];
    $VerdurasClass[$indice]->alim_colesterol = $row['alim_colesterol'];
    ++$indice;
}



////////////////////LEGUMINOSAS/////////////////////////

$indice_dos = 0;
$LeguminosasClass = null;
$sql_dos = "SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 7 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ";

$consulta = $conexion->query($sql_dos);
  while ($row = $consulta->fetch()) {
    $LeguminosasClass[$indice_dos] = new stdClass();
    $LeguminosasClass[$indice_dos]->id_alimentos = $row['id_alimentos'];
    $LeguminosasClass[$indice_dos]->alim_energia = $row['alim_energia'];
    $LeguminosasClass[$indice_dos]->alim_carbohidratos = $row['alim_carbohidratos'];
    $LeguminosasClass[$indice_dos]->alim_proteinas = $row['alim_proteinas'];
    $LeguminosasClass[$indice_dos]->alim_lipidos = $row['alim_lipidos'];
    $LeguminosasClass[$indice_dos]->alim_fibra = $row['alim_fibra'];
    $LeguminosasClass[$indice_dos]->alim_colesterol = $row['alim_colesterol'];
    ++$indice_dos;
}



////////////////////LECHE/////////////////////////

$indice_tres = 0;
$LecheClass = null;
$sql_tres = "SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 6 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ";

$consulta = $conexion->query($sql_tres);
  while ($row = $consulta->fetch()) {
    $LecheClass[$indice_tres] = new stdClass();
    $LecheClass[$indice_tres]->id_alimentos = $row['id_alimentos'];
    $LecheClass[$indice_tres]->alim_energia = $row['alim_energia'];
    $LecheClass[$indice_tres]->alim_carbohidratos = $row['alim_carbohidratos'];
    $LecheClass[$indice_tres]->alim_proteinas = $row['alim_proteinas'];
    $LecheClass[$indice_tres]->alim_lipidos = $row['alim_lipidos'];
    $LecheClass[$indice_tres]->alim_fibra = $row['alim_fibra'];
    $LecheClass[$indice_tres]->alim_colesterol = $row['alim_colesterol'];
    ++$indice_tres;
}



////////////////////GRASAS SIN PROTEINA/////////////////////////

$indice_cuatro = 0;
$Grasas_sinClass = null;
$sql_cuatro = "SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 5 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ";

$consulta = $conexion->query($sql_cuatro);
  while ($row = $consulta->fetch()) {
    $Grasas_sinClass[$indice_cuatro] = new stdClass();
    $Grasas_sinClass[$indice_cuatro]->id_alimentos = $row['id_alimentos'];
    $Grasas_sinClass[$indice_cuatro]->alim_energia = $row['alim_energia'];
    $Grasas_sinClass[$indice_cuatro]->alim_carbohidratos = $row['alim_carbohidratos'];
    $Grasas_sinClass[$indice_cuatro]->alim_proteinas = $row['alim_proteinas'];
    $Grasas_sinClass[$indice_cuatro]->alim_lipidos = $row['alim_lipidos'];
    $Grasas_sinClass[$indice_cuatro]->alim_fibra = $row['alim_fibra'];
    $Grasas_sinClass[$indice_cuatro]->alim_colesterol = $row['alim_colesterol'];
    ++$indice_cuatro;
}


////////////////////GRASAS CON PROTEINA/////////////////////////

$indice_cinco = 0;
$Grasas_conClass = null;
$sql_cinco = "SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 4 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ";

$consulta = $conexion->query($sql_cinco);
  while ($row = $consulta->fetch()) {
    $Grasas_conClass[$indice_cinco] = new stdClass();
    $Grasas_conClass[$indice_cinco]->id_alimentos = $row['id_alimentos'];
    $Grasas_conClass[$indice_cinco]->alim_energia = $row['alim_energia'];
    $Grasas_conClass[$indice_cinco]->alim_carbohidratos = $row['alim_carbohidratos'];
    $Grasas_conClass[$indice_cinco]->alim_proteinas = $row['alim_proteinas'];
    $Grasas_conClass[$indice_cinco]->alim_lipidos = $row['alim_lipidos'];
    $Grasas_conClass[$indice_cinco]->alim_fibra = $row['alim_fibra'];
    $Grasas_conClass[$indice_cinco]->alim_colesterol = $row['alim_colesterol'];
    ++$indice_cinco;
}




////////////////////FRUTAS/////////////////////////

$indice_seis = 0;
$FrutasClass = null;
$sql_seis = "SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 3 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ";

$consulta = $conexion->query($sql_seis);
  while ($row = $consulta->fetch()) {
    $FrutasClass[$indice_seis] = new stdClass();
    $FrutasClass[$indice_seis]->id_alimentos = $row['id_alimentos'];
    $FrutasClass[$indice_seis]->alim_energia = $row['alim_energia'];
    $FrutasClass[$indice_seis]->alim_carbohidratos = $row['alim_carbohidratos'];
    $FrutasClass[$indice_seis]->alim_proteinas = $row['alim_proteinas'];
    $FrutasClass[$indice_seis]->alim_lipidos = $row['alim_lipidos'];
    $FrutasClass[$indice_seis]->alim_fibra = $row['alim_fibra'];
    $FrutasClass[$indice_seis]->alim_colesterol = $row['alim_colesterol'];
    ++$indice_seis;
}



////////////////////CEREALES/////////////////////////

$indice_siete = 0;
$CerealesClass = null;
$sql_siete = "SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 2 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ";

$consulta = $conexion->query($sql_siete);
  while ($row = $consulta->fetch()) {
    $CerealesClass[$indice_siete] = new stdClass();
    $CerealesClass[$indice_siete]->id_alimentos = $row['id_alimentos'];
    $CerealesClass[$indice_siete]->alim_energia = $row['alim_energia'];
    $CerealesClass[$indice_siete]->alim_carbohidratos = $row['alim_carbohidratos'];
    $CerealesClass[$indice_siete]->alim_proteinas = $row['alim_proteinas'];
    $CerealesClass[$indice_siete]->alim_lipidos = $row['alim_lipidos'];
    $CerealesClass[$indice_siete]->alim_fibra = $row['alim_fibra'];
    $CerealesClass[$indice_siete]->alim_colesterol = $row['alim_colesterol'];
    ++$indice_siete;
}



////////////////////ORIGEN ANIMAL/////////////////////////

$indice_ocho = 0;
$CarnesClass = null;
$sql_ocho = "SELECT * FROM alimentos WHERE alim_id_tipo_alimento = 1 AND alim_id_tipo_diabetes = '$usu_id_diabetes' ";

$consulta = $conexion->query($sql_ocho);
  while ($row = $consulta->fetch()) {
    $CarnesClass[$indice_ocho] = new stdClass();
    $CarnesClass[$indice_ocho]->id_alimentos = $row['id_alimentos'];
    $CarnesClass[$indice_ocho]->alim_energia = $row['alim_energia'];
    $CarnesClass[$indice_ocho]->alim_carbohidratos = $row['alim_carbohidratos'];
    $CarnesClass[$indice_ocho]->alim_proteinas = $row['alim_proteinas'];
    $CarnesClass[$indice_ocho]->alim_lipidos = $row['alim_lipidos'];
    $CarnesClass[$indice_ocho]->alim_fibra = $row['alim_fibra'];
    $CarnesClass[$indice_ocho]->alim_colesterol = $row['alim_colesterol'];
    ++$indice_ocho;
}



////////////////////////////////////////////////////////////////////////////////////////////////////////////


$Totalenergia = 0;
$Totalcarbohidratos = 0;
$Totalproteinas = 0;
$Totallipidos = 0;
$Totalfibras = 0;
$Totalcolesterol = 0;


///////////////////////////////////////////////////////////////////////////////////////////////////////////

$verdura = $_POST['verdura'];
$leguminosas = $_POST['leguminosas'];
$leche = $_POST['leche'];
$grasas_sin = $_POST['grasas_sin'];
$grasas_con = $_POST['grasas_con'];
$frutas = $_POST['frutas'];
$cereales = $_POST['cereales'];
$origen_animal = $_POST['origen_animal'];




 foreach ($VerdurasClass as $i => $tip) {
        if ($tip->id_alimentos == $verdura) {

            $Totalenergia = $Totalenergia + $tip->alim_energia;

            $Totalcarbohidratos = $Totalcarbohidratos + $tip->alim_carbohidratos;

            $Totalproteinas = $Totalproteinas + $tip->alim_proteinas;

            $Totallipidos = $Totallipidos +$tip->alim_lipidos;

            $Totalfibras = $Totalfibras +$tip->alim_fibra;

            $Totalcolesterol = $Totalcolesterol +$tip->alim_colesterol;

            //var_dump($tip);

        }
    }





 foreach ($LeguminosasClass as $i => $tip) {
        if ($tip->id_alimentos == $leguminosas) {

            $Totalenergia = $Totalenergia + $tip->alim_energia;

            $Totalcarbohidratos = $Totalcarbohidratos + $tip->alim_carbohidratos;

            $Totalproteinas = $Totalproteinas + $tip->alim_proteinas;

            $Totallipidos = $Totallipidos +$tip->alim_lipidos;

            $Totalfibras = $Totalfibras +$tip->alim_fibra;

            $Totalcolesterol = $Totalcolesterol +$tip->alim_colesterol;

            //var_dump($tip);

        }
    }





foreach ($LecheClass as $i => $tip) {
        if ($tip->id_alimentos == $leche) {

            $Totalenergia = $Totalenergia + $tip->alim_energia;

            $Totalcarbohidratos = $Totalcarbohidratos + $tip->alim_carbohidratos;

            $Totalproteinas = $Totalproteinas + $tip->alim_proteinas;

            $Totallipidos = $Totallipidos +$tip->alim_lipidos;

            $Totalfibras = $Totalfibras +$tip->alim_fibra;

            $Totalcolesterol = $Totalcolesterol +$tip->alim_colesterol;
            

            //var_dump($tip);

        }
    }





foreach ($Grasas_sinClass as $i => $tip) {
        if ($tip->id_alimentos == $grasas_sin) {
            
            $Totalenergia = $Totalenergia + $tip->alim_energia;

            $Totalcarbohidratos = $Totalcarbohidratos + $tip->alim_carbohidratos;

            $Totalproteinas = $Totalproteinas + $tip->alim_proteinas;

            $Totallipidos = $Totallipidos +$tip->alim_lipidos;

            $Totalfibras = $Totalfibras +$tip->alim_fibra;

            $Totalcolesterol = $Totalcolesterol +$tip->alim_colesterol;

            //var_dump($tip);

        }
    }





foreach ($Grasas_conClass as $i => $tip) {
        if ($tip->id_alimentos == $grasas_con) {
            
            $Totalenergia = $Totalenergia + $tip->alim_energia;

            $Totalcarbohidratos = $Totalcarbohidratos + $tip->alim_carbohidratos;

            $Totalproteinas = $Totalproteinas + $tip->alim_proteinas;

            $Totallipidos = $Totallipidos +$tip->alim_lipidos;

            $Totalfibras = $Totalfibras +$tip->alim_fibra;

            $Totalcolesterol = $Totalcolesterol +$tip->alim_colesterol;

            //var_dump($tip);

        }
    }





foreach ($FrutasClass as $i => $tip) {
        if ($tip->id_alimentos == $frutas) {
            
            $Totalenergia = $Totalenergia + $tip->alim_energia;

            $Totalcarbohidratos = $Totalcarbohidratos + $tip->alim_carbohidratos;

            $Totalproteinas = $Totalproteinas + $tip->alim_proteinas;

            $Totallipidos = $Totallipidos +$tip->alim_lipidos;

            $Totalfibras = $Totalfibras +$tip->alim_fibra;

            $Totalcolesterol = $Totalcolesterol +$tip->alim_colesterol;

            //var_dump($tip);

        }
    }




foreach ($CerealesClass as $i => $tip) {
        if ($tip->id_alimentos == $cereales) {
            
            $Totalenergia = $Totalenergia + $tip->alim_energia;

            $Totalcarbohidratos = $Totalcarbohidratos + $tip->alim_carbohidratos;

            $Totalproteinas = $Totalproteinas + $tip->alim_proteinas;

            $Totallipidos = $Totallipidos +$tip->alim_lipidos;

            $Totalfibras = $Totalfibras +$tip->alim_fibra;

            $Totalcolesterol = $Totalcolesterol +$tip->alim_colesterol;

            //var_dump($tip);

        }
    }




foreach ($CarnesClass as $i => $tip) {
        if ($tip->id_alimentos == $origen_animal) {
                        
            $Totalenergia = $Totalenergia + $tip->alim_energia;

            $Totalcarbohidratos = $Totalcarbohidratos + $tip->alim_carbohidratos;

            $Totalproteinas = $Totalproteinas + $tip->alim_proteinas;

            $Totallipidos = $Totallipidos +$tip->alim_lipidos;

            $Totalfibras = $Totalfibras +$tip->alim_fibra;

            $Totalcolesterol = $Totalcolesterol +$tip->alim_colesterol;

            //var_dump($tip);


        }
    }



//var_dump($_POST);




?>