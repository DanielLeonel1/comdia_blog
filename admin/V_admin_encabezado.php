<?php
session_start();
$tipo=$_SESSION['usu_tipo'];
if ($tipo == 2) {
  header('Location: ../error.php');
}if ($tipo == "") {
  header('Location: ../error.php');
}

$Usuario = $_SESSION['usu_correo'];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet"  href="../css/estilos.css">

    <title>ComDia</title>
  </head>
  <body background="../img/fondo_uno.jpg" style= "background-size: cover; background-attachment: fixed;">


<header>


    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <img src="../img/ComDia.png" width="50" height="50" alt="">

        <a class="navbar-brand" href="./" style="color: #fff; font-size: 17px;">ComDia</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>

        <!--Inicia Menu-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="navbar-brand" href="V_ver_verduras.php" id="navbarDropdownMenuLink"  aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: #315123">Registrar Alimentos
                    </a>
                </li>


                <li class="nav-item active">
                    <a class="navbar-brand" href="V_ver_medicamentos.php" id="navbarDropdownMenuLink"  aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: ##910202">Registrar Medicamentos
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="navbar-brand" href="V_ver_ejercicios.php" id="navbarDropdownMenuLink"  aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: #0c373c">Registrar Ejercicios
                    </a>
                </li>




                <li class="nav-item dropdown">
                    <a  class="navbar-brand dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 17px; color: #007bff;" >
                        <?=$Usuario?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="V_registroAdmin.php">Registrar Usuario</a>
                        <a class="dropdown-item" href="V_verAdmin.php">Ver Usuarios</a>
                        <a class="dropdown-item" href="../php/cerrar_sesion.php" style="color: red;">Cerrar Sesion</a>
                    </div>
                </li>







            </ul>
            
        </div>
        </div>   
    </nav>        
                    

</header>

<section class="" style="background: #C7FDBF; padding: 10px;">
    <div class="container">
        <h1 class="" style="font-size: 30px;">Panel Administrativo</h1>
        
    </div>
</section>