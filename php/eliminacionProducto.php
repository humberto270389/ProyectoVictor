<?php
	require '../control/Control.php';

	$id=$_POST['id'];
	    $idPrduc;
		$nom;
		$pres;
		$cant;
		$im;
		$tipArt;

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/eliminacionProducto.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
	<script type="text/javascript">

	</script>

</head>
<body>
	<div id="divContEdicion">
		<div id="divProducto">
		    <div id="divImgProduc">

		 		<?php

			   		$conn = new Control();
			   		$tipos = $conn->productos($id);

			   		foreach($tipos as $indice => $registro){
		    				echo '<img id="imgProducto" src="'.$registro['nomImagen'].'"> </div> <div id="divInfProduc"> <form action="../control/AccionEliminarProducto.php" method="POST" enctype="multipart/form-data" id="infEditada" > <label id="lblNombre">Nombre del producto: </label> <label id="txtNombre" name="txtNombre">'.$registro['nombre'].'</label> <label id="lblPresio">Presio del producto: </label> <label id="txtPrecio" name="txtPrecio">'.$registro['precio'].'</label> <label id="lblCantidadProducto">Cantidad en existencia: </label> <label  id="txtCantidad" name="txtCantidad">'.$registro['cantidad'].'</label> <label>'.$registro['tipo'].'</label> <input type="text" id="inpId" name="inpId" style="visibility: hidden" value="'.$registro['idProducto'].'" >';
                    }

                ?>
                    <input type="submit" class="btn-danger" id="btnEliminar" name="btnEliminar" value="Eliminar Producto">
			    </form>
			</div>
		</div>
	</div>
</body>
</html>
