<!DOCTYPE html>
<html lang="es">
    <header>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/adminTipoProdcuto.css">
        <script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
        <script>
            $(function(){
                $('#btnAgregarTipo').click(function(){
                    var url='addTipoProduc.php';

                    $.ajax({
                        type:'POST',
                        url: url,
                        data: {},
                        success: function(data){
                            $('#divFucntionTipo').html(data);
                        }
                });
            });
        </script>
    </header>

    <body>
        <section>
            <div id="menuTipoProduc">
                <nav id="navTipo">
                    <ul>
                        <li><a class="bton btn" id="btnAgregarTipo" value="Agregar tipo de producto"></li>
                        <li><a class="bton btn" id="btnEditarTipo" value="Editar tipo de producto"></li>
                        <li><a class="bton btn" id="btnEliminarTipo" value="Eliminar tipo de producto"></li>
                    </ul>
                </nav>
            </div>
            <div id="divFucntionTipo">

            </div>
        </section>
    </body>
</html>
