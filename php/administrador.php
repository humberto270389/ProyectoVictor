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

	<section id="AsecCont">
		<div id="AdivCont">
			<div id="AdivMenu">
				<nav>
					
						<li><input type="button" class="btn-danger" id="AbtnCliente" name="AbtnCliente" value="Modo cliente"></li>
						<li><input type="button" class="btn-danger" id="AbtnAddProduc" name="AbtnAddProduc" value="Agregar producto"></li>
						<li><input type="button" class="btn-danger" id="AbtnEditProduc" name="AbtnEditProduc" value="Editar producto"></li>
						<li><input type="button" class="btn-danger" id="AbtnElimProduc" name="AbtnElimProduc" value="Eliminar producto"></li>
						<li><input type="button" class="btn-danger" id="AbtnVerClientes" name="AbtnVerClientes" value="Ver clientes"></li>
					
				</nav>
			</div>
			<div id="AdivFuncion">
				
			</div>
		</div>
	</section>

	<footer>
		<div id="AdivMTB" class="AdivFooter">
			<h5>Miscelanea Todo Barato </h5>
			<h5>S.A. de C.V.</h5>
		</div>
		<div id="AdivFacebook"  class="AdivFooter">
			<h5 class="AelementoDivFacebook">Visita M.T.B. en facebook</h5>
			<a id="AlinkFacebook" href="https://www.facebook.com/MiscelaneaTodoBarato?fref=ts"></a>
		</div>
	<br>
	</footer>

</body>
</html>