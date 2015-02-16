<!DOCTYPE html>
<html lang="es">

<head>
    <title>MTB - SexShop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Index.css">
    <link rel="stylesheet" href="css/Registro.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="JS/jquery-1.11.2.min.js"></script>
    <script type="text/javascript">
        var validar = function () {
            var enviar = false;
            if (!document.getElementById("usuario").value) {

                alert("Es necesario ingresar su nombre");
                document.getElementById("usuario").focus();
                enviar = false;

            } else if (!document.getElementById("pass").value) {

                alert("Es necesario ingresar una contraseña");
                document.getElementById("pass").focus();
                enviar = false;
            } else {

                enviar = true;
            }
            return enviar;
        };

        $(function () {
            $('#RegistrarUsuario').click(function () {
                var url = 'php/RegistroUsuario.php';

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {},
                    success: function (data) {
                        $('#secInicioSesion').html(data);
                    }
                });
            });

            $('#btnIniciar').click(function () {
                var valid = validar();
                if (valid) {
                    var url = 'control/AccionLoguear.php';

                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: $('#formSesion').serialize(),
                        success: function (data) {
                            $('#divSesion').html(data);
                        }
                    });
                }

            });


        });
    </script>

</head>

<body>
    <div id="page-wrap">
        <header>
           <div class="par"></div><!--

           --><div class="par">
                <img id="imgLogoMTB" src="img/logo1.png">
           </div><!--

           --><div class="par" id="facebook-div">
                Visítanos <br>
                <a href="https://www.facebook.com/MiscelaneaTodoBarato" target="_blank"><img src="img/fb.png" alt="facebook"></a>
                <a href="https://www.facebook.com/MiscelaneaTodoBarato" target="_blank"><img src="img/tw.png" alt="facebook"></a>
                <a href="https://www.facebook.com/MiscelaneaTodoBarato" target="_blank"><img src="img/gp.png" alt="facebook"></a>
            </div>
        </header>
        <section id="secInicioSesion">
            <div id="divSesion">
                <form id="formSesion">
                    <input type="text" id="usuario" class="MargCentro" name="usuario" placeholder="Usuario">
                    <input type="password" id="pass" class="MargCentro" name="pass" placeholder="Contraseña">
                    <input type="button" id="btnIniciar" class="btn-danger btn btn-sm" name="btnIniciar" value="Ingresar">
                </form>
                <a href="#" id="RegistrarUsuario">Registrarse</a>

                <p id="parrafoMensaje">
                    Miscelania Todo Barato no se hace responsable de que usted usuario deje abierta su sesion y menores de edad                       puedan ver el contenido de la página ya que es inapropiada para ellos, por lo cual se recomienda cerrar                           sesion despues de consultar la página. Atte. Miscelania Todo Barato. Guerrero Negro, B.C.S.
                </p>
            </div>
            <!--
                -->
            <div id="divImgChava">
                <img src="img/girl.png" id="imgChica">
            </div>
        </section>
    </div>
    <!--footer id="footer">
        <div  class="divFooter">
            <h5>Miscelanea Todo Barato </h5>
            <h5>S.A. de C.V.</h5>
        </div><!--
        --><!--div id="divFacebook" class="divFooter">
            <h5 class="elementoDivFacebook">Visita M.T.B. en facebook</h5>
            <a href="https://www.facebook.com/MiscelaneaTodoBarato" target="_blank"><img src="img/face.png" alt="facebook"></a>
        </div>
        <br>
    </footer-->

</body>

</html>

