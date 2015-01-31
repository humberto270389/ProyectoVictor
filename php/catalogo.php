<?php
   session_start();
   if(!isset($_SESSION['Autenticado'])){
        header('Location:../Index.php');
    }else{

    	require '../control/Control.php';
    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title> SexxxionShop - Catalogo </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/catalogo.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src="../JS/jquery-1.11.2.min.js"></script>
	<script type="text/javascript">

		function cargar(valor){
			var url='cargarProductos.php';
			var nom=valor.name;
				$.ajax({
					type:'POST',
					url: url,
					data: {"id":nom},
					success: function(data){
						$('#divCatalogo').html(data);
					}
				});
		}
	</script>
</head>
<body>
	<header>
		<div id="divImageLogo">
			<img id="imgLogoMTB" class="img-responsive" src="../img/logo1.png" >
		</div>
		<div id="divCerrarSesion">
			<nav>
				<ul class="menu">
					<li><a href="../control/CerrarSesion.php">Cerrar sesión (<?php echo $_SESSION['NomUser']; ?>)</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section id="secCont">
		<div id="divCont">
			<div id="divMenu">
				<nav>
					   <?php
					   		$conn = new Control();
					   		$tipos = $conn->tipoProductos();

					   		foreach($tipos as $indice => $registro){
		            			echo '<li><input type="button" class="btn-danger btnLi" value="'.$registro['tipo'].'" name="'.$registro['idTipoProducto'].'" id="'.$registro['tipo'].'" onclick="cargar('.$registro['tipo'].')"></li>';
		            		}
					   ?>					
				</nav>
			</div>
			<div id="divCatalogo">
				
			</div>
		</div>
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