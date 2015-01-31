<!DOCTYPE html>
<html lang="es">
<head>
<title>MTB - SexShop</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/Index.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="JS/jquery-1.11.2.min.js"></script>
	<script type="text/javascript">

		var validar = function(){
        	var enviar = false;
                if(!document.getElementById("usuario").value){

                        alert("Es necesario ingresar su nombre");
                        document.getElementById("usuario").focus();
                        enviar = false;

                }else if(!document.getElementById("pass").value){

                        alert("Es necesario ingresar una contraseña");
                        document.getElementById("pass").focus();
                        enviar = false;
                }else{

                	enviar = true;
                }
                return enviar;
           };

		$(function(){
			$('#RegistrarUsuario').click(function(){
				var url='php/RegistroUsuario.php';

				$.ajax({
					type:'POST',
					url: url,
					data: {},
					success: function(data){
						$('#divCont').html(data);
					}
				});
			});

			$('#btnIniciar').click(function(){
				var valid=validar();
				if(valid)
				{
					var url='control/AccionLoguear.php';

					$.ajax({
						type:'POST',
						url: url,
						data:$('#formSesion').serialize(),
						success: function(data){
							$('#divSesion').html(data);
						}
					});
				}
				
			});

			
		});
	</script>

</head>
<body>
	<header id="Encabezado">
		<div id="divImageLogo">
			<img id="imgLogoMTB" class="img-responsive" src="img/logo1.png" >
		</div>
		
	</header>

	<section id="secInicioSesion">
		<div id="divCont">
			<div id="divSesion">
				<form id="formSesion" class="form-grup">
					<input type="text" id="usuario" class="MargCentro btn-sm" name="usuario" placeholder="Nombre de usuario">
					<input type="password" id="pass" class="MargCentro btn-sm" name="pass" placeholder="Contraseña">
				</form>
				<input type="button" id="btnIniciar" class="btn-danger btn btn-sm" name="btnIniciar" value="Ingresar">
				<br>
				<a href="#" id="RegistrarUsuario">Registrarse</a>
				
				<p id="parrafoCerrarSesion">
					Miscelania Todo Barato no se hace responsable de que usted usuario deje abierta su sesion
					 y menores de edad puedan ver el contenido de la página ya que es inapropiada para ellos,
					por lo cual se recomienda cerrar sesion despues de consultar la página.
					Atte. Miscelania Todo Barato. Guerrero Negro, B.C.S.
				</p>
			</div>
            <!--comentrios-->
			<div id="divImgChava">
					<img src="img/chica.jpg"id="imgChica">
			</div>
		</div>
		<br>
		<br>
		
	</section>
	<footer>
	
		<div id="divMTB" class="divFooter">
			<h5>Miscelanea Todo Barato </h5>
			<h5>S.A. de C.V.</h5>
		</div>
		<div id="divFacebook"  class="divFooter">
			<h5 class="elementoDivFacebook">Visita M.T.B. en facebook</h5>
			<a id="linkFacebook" href="https://www.facebook.com/MiscelaneaTodoBarato?fref=ts"></a>
		</div>
	<br>
	
	</footer>

</body>
</html>
