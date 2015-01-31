<?php
	require '../control/Control.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/agregarProducto.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>

</head>
<body>
	<div id="divAgrProd">
		<form id="datosProducto" action="../control/AccionSubirProducto.php" method="POST" enctype="multipart/form-data">
			<input type="text" id="nomProducto" class="btn-sm" name="nomProducto" placeholder="Nombre del producto">
			<input type="text" id="precio" class=" btn-sm" name="precio" placeholder="Precio del producto">
			<input type="text" id="cantidad" class=" btn-sm" name="cantidad" placeholder="Cantidad en existencia del producto">
			<SELECT id="tipoProducto" name="tipoProducto" class="btn"> 
			   <OPTION VALUE="">-- Seleccione el tipo del Producto --</OPTION> 
			   <?php
			   		$conn = new Control();
			   		$tipos = $conn->tipoProductos();

			   		foreach($tipos as $indice => $registro){
            			echo "<option value=".$registro['idTipoProducto'].">".$registro['tipo']."</option>";
        			}
			   ?>
			</SELECT>
			<br>
			<label>Seleccione la imagen del producto:</label>
			<input type="file" name="archivo">			
			<input type="submit" id="btnIniciar" class="btn-danger btn btn-sm" name="btnIniciar" value="Guardar producto">
		</form>

	</div>
</body>
</html>