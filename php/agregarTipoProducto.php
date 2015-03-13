<!DOCTYPE html>
<html lang="es">
    <header>
        <title></title>
        <meta charset="utf-8">
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
                        <input type="button" class="bton btn" id="btnAgregarTipo" value="Agregar tipo de producto">
                    </ul>
                    <ul>
                        <input type="buton" class="bton btn" id="btnEditarTipo" value="Editar tipo de producto">
                    </ul>
                    <ul>
                        <input type="text" class="bton btn" id="btnEliminarTipo" value="Eliminar tipo de producto">
                    </ul>
                </nav>
            </div>
            <div id="divFucntionTipo">

            </div>
        </section>
    </body>
</html>
