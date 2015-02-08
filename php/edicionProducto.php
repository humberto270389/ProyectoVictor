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
	<link rel="stylesheet" type="text/css" href="../css/edicionProducto.css">
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
		    				echo '<img id="imgProducto" src="'.$registro['nomImagen'].'"> </div> <div id="divInfProduc"> <form action="../control/AccionEditar.php" method="POST" enctype="multipart/form-data" id="infEditada" > <label id="lblNombre">Nombre del producto: </label> <input type="text" id="txtNombre" name="txtNombre" value="'.$registro['nombre'].'"> <label id="lblPresio">Presio del producto: </label> <input type="text" id="txtPrecio" name="txtPrecio" value="'.$registro['precio'].'"> <label id="lblCantidadProducto">Cantidad en existencia: </label> <input type="text" id="txtCantidad" name="txtCantidad" value="'.$registro['cantidad'].'"> <input type="text" id="inpId" name="inpId" style="visibility: hidden" value="'.$registro['idProducto'].'" > <SELECT id="tipoProducto" name="tipoProducto" class="btn"> <OPTION VALUE="'.$registro['idTipo'].'">'.$registro['tipo'].'</OPTION> ';
                        }
                    ?>
                    <OPTION VALUE="">-- Seleccione el tipo del Producto --</OPTION>
                           <?php
                                $conn = new Control();
                                $tipos = $conn->tipoProductos();

                                foreach($tipos as $indice => $registro){
                                    echo "<option value=".$registro['idTipoProducto'].">".$registro['tipo']."</option>";
                                }
                           ?>
                    </SELECT>
                    <input type="file" name="archivo">
                    <input type="submit" class="btn-danger" id="btnGuardar" name="btnGuardar" value="Guardar edición">
			    </form>
			</div>
		</div>
	</div>
</body>
</html>
