<?php
	require '../control/Control.php';

	$id=$_POST['id'];

?>
<!DOCTYPE html>
<html>
	<head onload="traerProductos()">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/cargarProductos.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
	</head>
	<body >
		<div id="divContenedorProductos">
			   <?php
			   		$conn = new Control();
			   		$tipos = $conn->productos($id);

			   		foreach($tipos as $indice => $registro){
            			echo '<div id="divProducto"> <div id="divImgProduc"> <img id="imgProducto" src="'.$registro['nomImagen'].'"> </div> <div id="divInfProduc"> <label id="lblNombre">Producto: '.$registro['nombre'].'</label> <label id="lblPrecio">Precio: $'.$registro['precio'].'</label>	<label id="lblCantidad">Cantidad en tienda:'.$registro['cantidad'].'</label> </div> </div>';
            			?>
            			<?php
        			}
			   ?>
			   
		</div>
	</body>
</html>