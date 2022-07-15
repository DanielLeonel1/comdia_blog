<?php
require 'V_encabezado.php';
?>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ff9d36">
  <div class="container">
    <a class="navbar-brand" href="../" style="color: #fff;">ComDia</a>
    <img src="../img/ComDia.png" width="50" height="50" alt="">
  </div>

</nav>


<div class="container" style="margin-top: 80px;">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm"><br><br>
            <a class="navbar-brand" href="">
        <img src="../img/ComDia.png" alt="Logo ComDia" title="¿Qué es ComDia?" width="350px" style="cursor: pointer;">
         </a>
        </div>
      <div class="col-sm" style="margin-top: 50px;">

      <h2 style="margin-top: 20px; text-align: center;">INICIA SESIÓN</h2>



      
      <form action="../php/login_usuario.php" method="post" name="formulario" id="formulario" class="formulario">


        <!-------------- CORREO --------------->

        <div class="usu_correo" id="grupo_correo">
          <label for="usu_correo"></label>
          <div class="input-group justify-content-md-center">
          <div class="input-group-prepend">
              <button class="form-control" type="button" disabled><i class="fas fa-user"></i></button>
          </div>
              <input type="email" id="usu_correo" name="usu_correo" class="form-control col-10" placeholder="Correo@correo.com" required="" pattern="[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$">
          </div>
        </div>
            
            <!-------------- CONTRASEÑA --------------->

        <div class="usu_contra" id="grupo_contra">
        <label for="usu_contra"></label>
        <div class="input-group justify-content-md-center">
        <div class="input-group-prepend">
            <button   class="form-control " type="button" disabled><i class="fas fa-key"></i></button>
        </div>
            <input type="password" name="usu_contra" id="usu_contra" class="form-control col-8" placeholder="Contraseña" required="" pattern="[A-Za-z0-9_-]{3,12}"><button disabled class="form-control col-2 bg-transparent border-left-0"> <i class="fa fa-eye" id="mostrar" > </i></button>
            </div>
          </div>
           <br>

           <!-------------- BOTON -------------->

           <div class="input-group mb-3 justify-content-md-center">
              <button  type="submit" name="submit" class="btn btn-primary  btn-block col-8"  style="text-align:center">Iniciar</button>
            </div>

            <div class="input-group justify-content-md-center">
    

            <div class="input-group justify-content-md-center">
              <i style="padding-top: 25px;">No tienes cuenta? <a href="V_registro_usuario.php">Registrate aqui</a></i>
            </div>
      </form>
    </div>
  </div>
</div>
  </div>
</div>



<?php
require 'V_pie.php';
?>









