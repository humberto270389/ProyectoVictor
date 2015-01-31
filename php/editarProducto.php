<?php
	require '../control/Control.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/editarProducto.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
	<script>
		function cargar(){
			var url='edicionProducto.php';
			var nom=document.getElementById('producto').value;

				$.ajax({
					type:'POST',
					url: url,
					data: {"id":nom},
					success: function(data){
						$('#divInfoEditar').html(data);
					}
				});
		}
	</script>
</head>
<body>
	<div id="conDivEditar">
		<div id="divSeleccionador">
			<SELECT id="producto" name="producto" class="btn"> 
			   <OPTION VALUE="">-- Seleccione el Producto que desea editar --</OPTION> 
			   <?php
			   		$conn = new Control();
			   		$tipos = $conn->todosLosProductos();

			   		foreach($tipos as $indice => $registro){
            			echo "<option value=".$registro['idProducto'].">".$registro['nombre']."</option>";
        			}
			   ?>
			</SELECT>
			<input type="button" id="btnEditar" value="Editar" class="btn-danger" onclick="cargar()">
		</div>

		<div id="divInfoEditar">
			
		</div>
	</div>
</body>
</html>