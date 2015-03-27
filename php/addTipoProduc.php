<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/addTipoProduc.css">
        <script>
            $(function(){
                $('#btnAgregarTipoForm').click(function(){
                    var url='AccionAgregarNuevoTipo.php';

                    $.ajax({
                        type:'POST',
                        url: url,
                        data: $('#formAddTipo').serialize(),
                        success: function(data){
                            $('#divFun').html(data);
                        }
                });
            });
        });
        </script>
    </head>
    <body>
       <div id="divAddTipo">
            <form id="formAddTipo">
                <input type="text" class="btn-sm" placeholder="Ingrese el nuevo tipo de producto" id="idTxtTipo">
                <input type="button" class="btn btn-danger" value="Agregar" id="btnAgregrTipoForm">
            </form>
       </div>

        <div id="divFun"></div>
    </body>
</html>
