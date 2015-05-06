<?php
	require '../control/Control.php';

	$id=$_POST['id'];

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/edicionTipoProduc.css">
	    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	    <script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
	    <script>
            $(function(){
                $('#btnGuardar').click(function(){
                    var url='../control/AccionEditarTipo.php';

                    $.ajax({
                        type:'POST',
                        url: url,
                        data: $('#infEditada').serialize(),
                        success: function(data){
                            $('#divFucntionTipo').html(data);
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div id="divInfForm">
            <form id="infEditada">
                <?php

			   		$conn = new Control();
			   		$tipos = $conn->getTipo($id);

			   		foreach($tipos as $indice => $registro){
                        echo '<input type="text" class="btn-sm" value="'.$registro['tipo'].'" id="idTxtTipo" name="idTxtTipo">  <input type="hidden" id="idTipo" name="idTipo" value="'.$registro['idTipoProducto'].'">';
                    }
                ?>
                <br>
                <br>
                <input type="button" class="btn-danger" id="btnGuardar" name="btnGuardar" value="Guardar edición">
            </form>
        </div>
        <div id="divFuncionTipo">

        </div>
    </body>
</html>
