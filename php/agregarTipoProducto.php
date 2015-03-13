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
                        <li><a class="bton btn" id="btnAgregarTipo">Agregar tipo de producto</a></li>
                        <li><a class="bton btn" id="btnEditarTipo">Editar tipo de producto</a></li>
                        <li><a class="bton btn" id="btnEliminarTipo">Eliminar tipo de producto</a></li>
                    </ul>
                </nav>
            </div>
            <div id="divFucntionTipo">

            </div>
        </section>
    </body>
</html>
