<?php

require 'Control.php';
	$conn = new Control();

	$nombre =utf8_decode($_POST['nomProducto']);
	$presio =utf8_decode($_POST['precio']);
	$cantidad =utf8_decode($_POST['cantidad']);
	$tipo =utf8_decode($_POST['tipoProducto']);
	$nomImagen =$_FILES['archivo']['name'];


$target_path = "../img/ImgBD/";
$target_path = $target_path.$nomImagen;
if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path))
	{

		$conn->agregarProducto($nombre,$presio,$cantidad,$target_path,$tipo);
		?>
			<script type="text/javascript">
				alert('Producto agregado exitosamente!');
				window.location="http://localhost/ProyectoVictor/php/administrador.php";
			</script>

		<?php
} else{
		?>
			<script type="text/javascript">
				alert('Ha ocurrido un error, trate de nuevo!!');
			</script>
		<?php
}
?>
