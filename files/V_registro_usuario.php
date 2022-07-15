<?php 
require 'V_encabezado.php'; 

require '../admin/config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}


$sentencia = $conexion->query("SELECT * FROM tipodiabetes");
$tipo = $sentencia->fetchAll(PDO::FETCH_OBJ);

 ?>


<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #ff9d36">
  <div class="container">
    <a class="navbar-brand" href="../" style="color: #fff;">ComDia</a>
    <img src="../img/ComDia.png" width="50" height="50" alt="" >
  </div>

</nav>


<div class="container" style="margin-top: 20px;">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm"><br><br>
            <a class="navbar-brand" href="">
        <img src="../img/ComDia.png" alt="Logo ComDia" title="¿Qué es ComDia?" width="350px" style="cursor: pointer;">
         </a>
        </div>
      <div class="col-sm" >

      <h2 style="margin-top: 20px; text-align: center;">REGISTRATE</h2>


<form action="../php/registro_usuario.php" method="POST" name="formulario" id="formulario" class="formulario">

<!-------------- Tipo Diabetes --------------->
  <div class="form-row">
    <div class="col">
      <label for="usu_id_diabetes"></label>
      <div class="input-group justify-content-md-center">
        <div class="input-group-prepend  ">
          <button   class="form-control" type="button" disabled><i class="fas fa-user"></i></button>
        </div>
        <select class="form-control" name="usu_id_diabetes">

      <?php
        foreach ($tipo as $dato) {
          ?>
          <option value= "<?=$dato->id_diabetes;?>"><?=$dato->tipo_diabetes;?></td>         

          <?php
        }
      ?>
        </select>
      </div>
    </div>

<!-------------- Fecha Nacimiento --------------->
    <div class="col usu_fecha" id="grupo_fecha">
      <label for="usu_fecha"></label>
      <div class="input-group justify-content-md-center">
        <div class="input-group-prepend  ">
          <button class="form-control" type="button" disabled><i class="fas fa-calendar"></i></button>
        </div>
        <input type="date" name="usu_fecha" id="usu_fecha" class="form-control col-10" placeholder="">
      </div>
    </div>



<!-------------- Peso --------------->
  <div class="form-row">
    <div class="col">
      <label for="usu_peso"></label>
      <div class="input-group justify-content-md-center">
        <div class="input-group-prepend  ">
          <button   class="form-control" type="button" disabled><i class="fas fa-weight"></i></button>
        </div>
        <input type="text" name="usu_peso" id="usu_peso" class="form-control col-10" placeholder="Peso">
      </div>
    </div>
    

<!-------------- Estatura --------------->
    <div class="col">
      <label for="usu_estatura"></label>
      <div class="input-group justify-content-md-center">
        <div class="input-group-prepend  ">
          <button   class="form-control" type="button" disabled><i class="fas fa-text-height"></i></button>
        </div>
        <input type="text" name="usu_estatura" id="usu_estatura" class="form-control col-10" placeholder="Estatura">
      </div>
    </div>

<!-------------- CORREO --------------->
  <div class="form-row usu_correo" id="grupo_correo">
    <div class="col">
      <label for="usu_correo"></label>
      <div class="input-group justify-content-md-center">
        <div class="input-group-prepend  ">
          <button   class="form-control" type="button" disabled><i class="fas fa-at"></i></button>
        </div>
        <input type="email" id="usu_correo" name="usu_correo" class="form-control col-10" placeholder="Correo@correo.com" required="" pattern="[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$">
      </div>
    </div>



<!-------------- Contraseña --------------->
    <div class="col usu_contra" id="grupo_contra">
      <label for="usu_contra"></label>
      <div class="input-group justify-content-md-center">
        <div class="input-group-prepend  ">
          <button   class="form-control" type="button" disabled><i class="fas fa-key"></i></button>
        </div>
        <input type="password" name="usu_contra" id="usu_contra" class="form-control col-8" placeholder="********" required="" pattern="[A-Za-z0-9_-]{3,12}"><button disabled class="form-control col-3 bg-transparent border-left-0"> <i class="fa fa-eye" id="mostrar" > </i></button>
      </div>
    </div>
  


<!-------------- BOTON -------------->

<div class="input-group mb-4 justify-content-md-center">
  <input type="submit" name="submit" Value="Enviar" class=" btn btn-primary  btn-block col-8"  style=" margin-top: 20px;"></input>
</div>



<!--RECAPTCHA-->
<div class="input-group justify-content-md-center">
    <div class="g-recaptcha" data-sitekey="6Lfd9mUgAAAAAOnm7ytORWyg5bexCCE-SJV4ik3_">
    </div>
</div>





<!--INICIO DE SESION CON GOOGLE
<div class="g-signin2">
  <//?php require '../php/authen_google.php'; ?>
  <a href="<//?php echo $client->createAuthUrl() ?>">Sesion</a>
</div>

-->

<div class="input-group justify-content-md-center">
<i style="padding-top: 25px;">Ya tienes cuenta? <a href="V_login.php">Inicia Sesión</a></i>
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




