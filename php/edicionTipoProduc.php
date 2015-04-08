<?php
	require '../control/Control.php';

	$id=$_POST['id'];

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/edicionTipoProduc.css">
	    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	    <script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
    </head>
    <body>
        <div>
            <form action="../control/AccionEditarTipo.php" method="POST" enctype="multipart/form-data" id="infEditada">
                <?php

			   		$conn = new Control();
			   		$tipos = $conn->tipoDeProductos($id);

			   		foreach($tipos as $indice => $registro){
                        echo '<input type="text" class="btn-sm" value="'.$registro['tipo'].'" id="idTxtTipo" name="idTxtTipo"> <label id="idTipo" value="'.$registro['idTipoProducto'].'"></label>';
                    }
                ?>
                <input type="submit" class="btn-danger" id="btnGuardar" name="btnGuardar" value="Guardar edición">
            </form>
        </div>
    </body>
</html>
