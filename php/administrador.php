<?php
   session_start();
   if(!isset($_SESSION['Autenticado'])){
        header('Location:../Index.php');
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title> SexxxionShop - Catalogo </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/administrador.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
    <script>

        $(function(){
            $('#AbtnCliente').click(function(){
                var url='catalogo.php';

                $.ajax({
                    type:'POST',
                    url: url,
                    data: {},
                    success: function(data){
                        $('#AdivFuncion').html(data);
                    }
                });
            });

            $('#AbtnAddTipoProducto').click(function(){
                var url='adminTipoProducto.php';

                    $.ajax({
                        type:'POST',
                        url: url,
                        data:{},
                        success: function(data){
                            $('#AdivFuncion').html(data);
                        }
                    });
            });

            $('#AbtnAddProduc').click(function(){
                var url='agregarProducto.php';

                    $.ajax({
                        type:'POST',
                        url: url,
                        data:{},
                        success: function(data){
                            $('#AdivFuncion').html(data);
                        }
                    });
            });

            $('#AbtnEditProduc').click(function(){
                var url='editarProducto.php';

                    $.ajax({
                        type:'POST',
                        url: url,
                        data:{},
                        success: function(data){
                            $('#AdivFuncion').html(data);
                        }
                    });
            });

            $('#AbtnElimProduc').click(function(){
                var url='eliminarProducto.php';

                    $.ajax({
                        type:'POST',
                        url: url,
                        data:{},
                        success: function(data){
                            $('#AdivFuncion').html(data);
                        }
                    });
            });

        });

    </script>
</head>
<body>
    <header>
        <div id="AdivImageLogo">
            <img id="AimgLogoMTB" class="img-responsive" src="../img/logo1.png" >
        </div>
        <div id="AdivCerrarSesion">
            <nav>
                <ul class="Amenu">
                    <li><a href="../control/CerrarSesion.php">Cerrar sesión (<?php echo $_SESSION['NomUser']; ?>)</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        <div id="AdivMenu">
            <input type="button" class="btn-danger bton btn" id="AbtnCliente" name="AbtnCliente" value="Modo cliente">
            <input type="button" class="btn-danger bton btn" id="AbtnAddTipoProducto" name="AbtnAddTipoProducto" value="Administrar tipo producto">
            <input type="button" class="btn-danger bton btn" id="AbtnAddProduc" name="AbtnAddProduc" value="Agregar producto">
            <input type="button" class="btn-danger bton btn" id="AbtnEditProduc" name="AbtnEditProduc" value="Editar producto">
            <input type="button" class="btn-danger bton btn" id="AbtnElimProduc" name="AbtnElimProduc" value="Eliminar producto">
            <input type="button" class="btn-danger bton btn" id="AbtnVerClientes" name="AbtnVerClientes" value="Ver clientes">
        </div><!--
        --><div id="AdivFuncion">

        </div>
    </section>

</body>
</html>
