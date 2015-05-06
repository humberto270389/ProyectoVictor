<?php
	require '../control/Control.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/editarTipoProduc.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
        <script>
            function cargar(){
			var url='edicionTipoProduc.php';
			var nom=document.getElementById('tipoProducto').value;

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
        <div id="divContTipos">
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
            <input type="button" id="btnEditar" value="Editar" class="btn-danger" onclick="cargar()">
        </div>
        <div id="divInfoEditar">

        </div>
    </body>
</html>
