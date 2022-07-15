<?php 
require 'V_admin_encabezado.php'; 

require 'config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

$sentencia = $conexion->query("SELECT * FROM rol");
$tipo = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>




<div class="container" style="margin-top: 20px;">
	<div class="card w-75" style="margin: 0px auto;">
	  <div class="card-header text-center" style="font-family: Arial; background-color: #ff9420c9; color: #fff; font-size: 20px;">
	    Registrar Un Usuario
	  </div>


<form action="php/registroAdmin.php" method="POST">
	<div class="container">
		<div class="form-row">
			<div class="form-group col-md-6">

				<label for="usu_correo">Correo</label>
				<input type="email" class="form-control" name="usu_correo" id="usu_correo" placeholder="correo@correo.com">
		  	</div>

		  	<div class="form-group col-md-6">
		  		<label for="usu_contra">Contraseña</label>
		  		<input type="password" class="form-control" name="usu_contra" id="usu_contra" placeholder="********">
			</div>

			<div class="form-group col-md-6">

				<label for="usu_id_rol">Rol</label>
				<select class="form-control" name="usu_id_rol" id="usu_id_rol">
					<?php
					foreach ($tipo as $dato) {
						?>
						<option value= "<?=$dato->id_rol;?>"><?=$dato->rol_tipo;?></td>

						<?php
				        }
				      ?>
        		</select>

        		<div class="input-group mb-10 ">
  					<button  type="submit" class=" btn btn-primary  btn-block col-12"  style="text-align:center; margin-top: 30px;">Registrar</button>
				</div>

		  	</div>
	  	</div>
  	</div>
</form>
	  

    </div>
</div>






<?php
require 'V_admin_pie.php'; 
?>