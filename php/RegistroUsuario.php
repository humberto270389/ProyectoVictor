<!DOCTYPE html>
<html lang="es">
<head>
	<title>Regsitro de usuario - MTB</title>
	<link rel="stylesheet" type="text/css" href="css/Registro.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery-1.11.2.min.js"></script>
    <script>

        
        var validar = function(){
        	var enviar = false;
                if(!document.getElementById("nombre").value){

                        alert("Es necesario ingresar su nombre");
                        document.getElementById("nombre").focus();
                        enviar = false;

                }else if(!document.getElementById("ap").value){

                        alert("Es necesario ingresar su apellido paterno\n si no tiene ingrese una X ");
                        document.getElementById("ap").focus();
                        enviar = false;

                }else if(!document.getElementById("am").value){

                        alert("Es necesario ingresar su apellido materno\n si no tiene ingrese una X");
                        document.getElementById("am").focus();
                        enviar = false;

                }else if(!document.getElementById("usuario").value){

                        alert("Es necesario ingresar un nombre de usuario");
                        document.getElementById("usuario").focus();
                        enviar = false;

                }else if(!document.getElementById("pass").value){

                        alert("Es necesario ingresar una contraseña");
                        document.getElementById("pass").focus();
                        enviar = false;

                }else if(!document.getElementById("confirmPass").value){

                        alert("Es necesario confirmar la contraseña");
                        document.getElementById("confirmPass").focus();
                        enviar = false;

                }else if(!document.getElementById("correo").value){ 

                	alert("Es necesario ingresar un correo electronico");
                        document.getElementById("correo").focus();
                        enviar = false;
                }else{

                	enviar = true;
                }

                  if(enviar){

                        var contra   = document.getElementById("pass").value;
                        var recontra = document.getElementById("confirmPass").value;

                        if(contra == recontra){

                                return enviar;

                        }else{

                                alert("Las contraseñas no son iguales");
                                document.getElementById("confirmPass").focus();
                                enviar = false;
                        }

                }



        }

         $(function(){

                $("#btnCrear").click(function(){

                        var valido = validar();

                        if(valido){

                                $.ajax({
                                        type: 'POST',
                                        url: 'control/AccionRegistrar.php',
                                        data: $('#formDatos').serialize(),
                                        success:function(data){
                                                $('#respuesta').html(data);
                                        }

                                });

                        }

                });

        });

	</script>

</head>
<body>
	<header id="headerRegistro">
		<div id="respuesta">
              <h3 id="texto" >Registro</h3>      
        </div>
      
	</header>
	<div id="Contenedor">
		<form id="formDatos" class="form-grup">
			<input type=="text" class="MargCentro form-control" id="nombre"  name="nombre" placeholder="Nombre"><br>
			<input type="text" class="MargCentro form-control" id="ap"  name="ap" placeholder="Apellido Paterno"><br>
			<input type="text" class="MargCentro form-control" id="am"  name="am" placeholder="Apellido Materno"><br>
			<input type="text" class="MargCentro form-control" id="usuario"  name="usuario" placeholder="Nombre de usuario"><br>
			<input type="password" class="MargCentro form-control" id="pass"  name="pass" placeholder="Contraseña"><br>
			<input type="password" class="MargCentro form-control" id="confirmPass"  name="confirmPass" placeholder="Confirmar contraseña"><br>
			<input type="text" class="MargCentro form-control" id="correo"  name="correo" placeholder="Correo"><br>
			<input type="button" id="btnCrear" class="MargCentro form-control btn btn-danger" name="btnCrear" value="Crear cuenta"><br>
		</form>
	</div>

</body>
</html>