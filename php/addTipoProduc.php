<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
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
        </script>
    </head>
    <body>
        <form id="formAddTipo">
            <input type="text" hiden="Ingrese el nuevo tipo de producto">
            <input type="button" value="Agregar" id="btnAgregrTipoForm">
        </form>
        <div id="divFun"></div>
    </body>
</html>