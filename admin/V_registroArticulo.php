<?php 
require 'V_admin_encabezado.php'; 

require 'config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: error.php');
}

date_default_timezone_set("America/Mexico_City");
$fecha=date("Y-m-d H:i:s");



?>
<div class="container" style="margin-top: 20px;">
	<div class="card">
	  <div class="card-header text-center" style="font-family: Arial; background-color: #ff9420c9; color: #fff; font-size: 20px;">
	    Publicar Un Nuevo Articulo
	  </div>
	  	<div class="card-body" >
	  		<form method="POST" action="php/registroArticulo.php">

	  			<div class="form-row">
	  				<div class="form-group col-md-6">
	  					<label for="art_titulo">TITULO</label>
	  					<input type="text" class="form-control" name="art_titulo" id="art_titulo" placeholder="Titulo">
	  				</div>

					<div class="form-group col-md-6">
						<label for="art_extracto">EXTRACTO</label>
						<input type="text" class="form-control" name="art_extracto" id="art_extracto" placeholder="Introducción">
					</div>
  				</div>

  				<div class="form-row">
	  				<div class="form-group col-md-6">
	  					<label for="art_fecha">FECHA</label>

	  					<input type="datetime" class="form-control" name="art_fecha" id="art_fecha" placeholder="<?= $fecha ?> " disabled="">
	  				</div>
	  				
					<div class="form-group col-md-6">
						<label for="exampleFormControlTextarea1">TEXTO</label>
    					<textarea class="form-control" id="exampleFormControlTextarea1" name="art_texto" rows="3"></textarea>
					</div>
					
  				</div>
	  				<div class="form-row">
	  				<div class="form-group col-md-6">
							<label for="art_thumb">IMAGEN</label>
							<input type="file" class="form-control" name="art_thumb" id="art_thumb" placeholder="Foto">
					</div>
				</div>

			  
  			<button type="submit" class="btn btn-primary">ENVIAR ARTICULO</button>
	  			

			</form>
		</div>
	</div>
</div>

<?php
require 'V_admin_pie.php'; 
?>