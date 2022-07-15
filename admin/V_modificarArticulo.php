<?php 
require 'V_admin_encabezado.php'; 

require 'config.php';
require '../functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
  header('Location: ../error.php');
}

date_default_timezone_set("America/Mexico_City");
$fecha=date("Y-m-d H:i:s");

//print_r($_GET);

$id_articulo = $_GET['id_articulo'];
$sentencia = $conexion->prepare("SELECT * FROM articulo WHERE id_articulo = $id_articulo");
$resultado = $sentencia->execute([$id_articulo]);
$articulo = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($articulo);


?>
<div class="container" style="margin-top: 20px;">
	<div class="card">
	  <div class="card-header text-center" style="font-family: Arial; background-color: #ff9420c9; color: #fff; font-size: 20px;">
	    Modificar Articulo
	  </div>

	  	<div class="card-body" >
	  		<form method="POST" action="php/modificarArticulo.php">

	  			<div class="form-row">
	  				<div class="form-group col-md-6">
	  					<label for="art_titulo">TITULO</label>
	  					<input type="text" class="form-control" name="art_titulo" id="art_titulo" placeholder="Titulo" value="<?=$articulo->art_titulo; ?>">
	  				</div>

					<div class="form-group col-md-6">
						<label for="art_extracto">EXTRACTO</label>
						<input type="text" class="form-control" name="art_extracto" id="art_extracto" placeholder="Introducción" value="<?=$articulo->art_extracto; ?>">
					</div>
  				</div>

  				<div class="form-row">
	  				<div class="form-group col-md-6">
	  					<label for="art_fecha">FECHA</label>
	  					<input type="datetime" class="form-control" name="art_fecha" id="art_fecha" placeholder="<?php echo fecha($fecha);  ?>" disabled="">
	  				</div>
	  				
					<div class="form-group col-md-6">
						<label for="exampleFormControlTextarea1">TEXTO</label>
    					<textarea name="art_texto" class="form-control" id="exampleFormControlTextarea1" rows="3">
    						<?=$articulo->art_texto; ?>
    					</textarea>
					</div>

  				</div>
	  				<div class="form-row">
	  				<div class="form-group col-md-6">
							<label for="art_thumb">IMAGEN</label>
							<input type="file" class="form-control" name="art_thumb" id="art_thumb" placeholder="Foto" value="../img/<?=$articulo->art_thumb; ?>">
					</div>
				</div>

			  
  			<button type="submit" name="id_articulo" class="btn btn-primary" value="<?=$articulo->id_articulo; ?>" >GUARDAR MODIFICACION</button> 
	  			

			</form>
		</div>
	</div>
</div>

<?php
require 'V_admin_pie.php'; 
?>