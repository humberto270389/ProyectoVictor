<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Registro de usuario - MTB</title>
    <script>
        var validar = function () {
            var enviar = false;
            if (!document.getElementById("nombre").value) {

                alert("Es necesario ingresar su nombre");
                document.getElementById("nombre").focus();
                enviar = false;

            } else if (!document.getElementById("ap").value) {

                alert("Es necesario ingresar su apellido paterno\n si no tiene ingrese una X ");
                document.getElementById("ap").focus();
                enviar = false;

            } else if (!document.getElementById("am").value) {

                alert("Es necesario ingresar su apellido materno\n si no tiene ingrese una X");
                document.getElementById("am").focus();
                enviar = false;

            } else if (!document.getElementById("usuario").value) {

                alert("Es necesario ingresar un nombre de usuario");
                document.getElementById("usuario").focus();
                enviar = false;

            } else if (!document.getElementById("pass").value) {

                alert("Es necesario ingresar una contraseña");
                document.getElementById("pass").focus();
                enviar = false;

            } else if (!document.getElementById("confirmPass").value) {

                alert("Es necesario confirmar la contraseña");
                document.getElementById("confirmPass").focus();
                enviar = false;

            } else if (!document.getElementById("correo").value) {

                alert("Es necesario ingresar un correo electronico");
                document.getElementById("correo").focus();
                enviar = false;
            } else {

                enviar = true;
            }

            if (enviar) {

                var contra = document.getElementById("pass").value;
                var recontra = document.getElementById("confirmPass").value;

                if (contra == recontra) {

                    return enviar;

                } else {

                    alert("Las contraseñas no son iguales");
                    document.getElementById("confirmPass").focus();
                    enviar = false;
                }
            }
        }

        $(function () {

            $("#btnCrear").click(function () {

                var valido = validar();

                if (valido) {

                    $.ajax({
                        type: 'POST',
                        url: 'control/AccionRegistrar.php',
                        data: $('#formDatos').serialize(),
                        success: function (data) {
                            $('#respuesta').html(data);
                        }

                    });
                }
            });

            $('#btnCancelar').click(function(){
                window.location="index.php";
            });

        });
    </script>
</head>
<body>
        <div id="respuesta">
        </div>

    <div id="formulario">
        <form id="formDatos" >
            <input type="text" class="MargCentro form-control" id="nombre" name="nombre" placeholder="Nombre">
            <input type="text" class="MargCentro form-control" id="ap" name="ap" placeholder="Apellido Paterno">
            <input type="text" class="MargCentro form-control" id="am" name="am" placeholder="Apellido Materno">
            <input type="text" class="MargCentro form-control" id="usuario" name="usuario" placeholder="Nombre de usuario">
            <input type="password" class="MargCentro form-control" id="pass" name="pass" placeholder="Contraseña">
            <input type="password" class="MargCentro form-control" id="confirmPass" name="confirmPass" placeholder="Confirmar contraseña">
            <input type="text" class="MargCentro form-control" id="correo" name="correo" placeholder="Correo">
            <input type="button" id="btnCrear" class="MargCentro form-control btn btn-danger" name="btnCrear" value="Crear">
            <input type="button" id="btnCancelar" class="MargCentro form-control btn btn-danger" name="btnCrear" value="Cancelar">

            <br>
        </form>
    </div>
    <script src="js/jquery-1.11.2.min.js"></script>
</body>

</html>
