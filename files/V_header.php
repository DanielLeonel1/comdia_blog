<?php
    session_start();
   $tipo=(isset($_SESSION['usu_tipo']) and trim($_SESSION['usu_tipo'])!="")?$_SESSION['usu_tipo']:"";
    if ($tipo == 1) {
        header('Location: error.php');
    }


    $correo=(isset($_SESSION['usu_correo']) and trim($_SESSION['usu_correo'])!="")? 1:0;
    
    $ul="<ul class='navbar-nav mr-auto'>".
               "<li class='nav-item dropdown'>".    
                    "<a class='navbar-brand dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='color: #fff'>".                                
                     "Ya tienes Cuenta?".
                    "</a>".
                    "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>".
                      "<a class='dropdown-item' href='files/V_login.php'>Inicia Sesion</a>".
                      "<a class='dropdown-item' href='files/V_registro_usuario.php'>Registrate</a>".
                    "</div>".
                "</li>".
            "</ul>";

    $bandera=$correo==0?$ul:" ";

                 

    
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="icon" href="img/ComDia.png" sizes="16x16" type="image/png">
   
    <link rel="stylesheet"  href="<?php echo RUTA; ?>css/estilos.css">

    <!-- <style>
        body{
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
    -->







    <title>ComDia</title>
  </head>
  <body>


<header class="header">

    <nav class="navbar navbar-expand-lg navbar-light">

        <a class="navbar-brand" href="<?php echo RUTA; ?>" style="color: #fff; font-size: 20px;">ComDia</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

        </button>

        <!--Inicia Menu-->
        <div class="container col-11">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <?=$bandera;?>
            
        <ul class="navbar-nav mr-auto">


            <li class="nav-item dropdown">

                <?php if(!empty($_SESSION['usu_correo'])): ?>

                <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: #fff">Alimentos

                <?php endif;
                ?>

                </a>


                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="verduras.php">Verduras</a>
                    <a class="dropdown-item" href="leche.php">Leche</a>
                    <a class="dropdown-item" href="leguminosas.php">Leguminosas</a>
                    <a class="dropdown-item" href="frutas.php">Frutas</a>
                    <a class="dropdown-item" href="cereales_sin_grasa.php">Cereales sin Grasa</a>
                    <a class="dropdown-item" href="grasas_sin_proteina.php">Grasas sin proteínas</a>
                    <a class="dropdown-item" href="origen_animal.php">Alimentos de origen animal</a>
                    <a class="dropdown-item" href="grasas_con_proteina.php">Grasas con proteínas</a>

                    <a class="nav-link disabled" href="#" style="color: #424242; font-family: Calibri; font-size: 20px;"><b>ALIMENTOS REGISTRADOS</b></a>
                    <a class="dropdown-item" href="consultar_desayuno.php">Consultar Desayuno</a>
                    <a class="dropdown-item" href="consultar_comida.php">Consultar Comida</a>
                    <a class="dropdown-item" href="consultar_cena.php">Consultar Cena</a>

                </div>
            </li>


            <li class="nav-item dropdown">

                <?php if(!empty($_SESSION['usu_correo'])): ?>

                <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: #fff">Glucosa

                <?php endif;
                ?>

                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="agregar_glucosa.php">Añadir Glucosa</a>
                    <a class="dropdown-item" href="consultar_glucosa.php">Consultar Glucosa</a>

                </div>
            </li>


            <li class="nav-item dropdown">

                <?php if(!empty($_SESSION['usu_correo'])): ?>

                <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: #fff">Medicamentos

                <?php endif;
                ?>

                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="medicamento_gestacional.php">Gestacional</a>
                    <a class="dropdown-item" href="medicamento_tipo_dos.php">Tipo 2</a>

                </div>
            </li>


            <li class="nav-item active">

                <?php if(!empty($_SESSION['usu_correo'])): ?>

                    <a class="navbar-brand" href="ejercicios.php" id="navbarDropdownMenuLink"  aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: #fff">Ejercicios
        

                <?php endif;
                ?>
                    </a>
                
            </li>


            <li class="nav-item active">
                
            <?php if(!empty($_SESSION['usu_correo'])): ?>
                
                <a class="navbar-brand" href="crear_platillo.php" id="navbarDropdownMenuLink"  aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: #fff">Crear Platillo
                
                <?php endif;
                
                ?>
                
            </a>
        
            </li>


            <li class="nav-item dropdown">

                <?php if(!empty($_SESSION['usu_correo'])): ?>

                <a class="btn" href="registrar_dieta.php" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: #fff; background-color: #ff6800; margin-right:15px;">Registrar Dieta

                <?php endif;
                ?>

                </a>
            </li>

            <li class="nav-item dropdown">

                <?php if(!empty($_SESSION['usu_correo'])): ?>

                <a  class="navbar-brand dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: #007bff;">

                <?php echo $_SESSION['usu_correo']; ?>

                <?php endif;
                ?>

                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="actualizar_datos.php">Actualizar Datos</a>
                <a class="dropdown-item" href="calculadora.php">Calcula Tu Indice Corporal</a>
                <a class="dropdown-item" style="color: red;" href="php/cerrar_sesion.php">Cerrar Sesion</a>
                </div>

            </li>

            
        </ul>

        <form  name="busqueda" class="buscar float-right form-inline my-2 my-lg-0" action="<?php echo  RUTA;?>buscar.php" method="GET" >

            <input name="busqueda" class="form-control mr-sm-2 col-7" type="text" placeholder="Buscar" aria-label="Search" > 
            
            <button  class="btn btn-success my-2 my-sm-1" type="submit">Buscar</button>
        </form>

        </div>
        </div>   
    </nav>


</header>

<section class="jumbotron">
    <div class="container">
        <h1 class="titulo-blog">ComDia Blog</h1>
        <p class="parrafo">Blog sobre la diabetes</p>
    </div>
</section>


