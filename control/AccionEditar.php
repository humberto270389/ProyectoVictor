<?php

 require 'Control.php';
 $conn = new Control();
 $edicionHecha=false;

 $idP=$_POST['inpId'];
 $nomP=$_POST['txtNombre'];
 $precioP=$_POST['txtPrecio'];
 $cantP=$_POST['txtCantidad'];
 $nomImgP=$_FILES['archivo']['name'];
 $tipP=$_POST['tipoProducto'];
 
 $nombreProducto;
 $precioProducto;
 $cantidadProducto;
 $imagen;
 $tipoProducto;

$conn = new Control();
$tipos = $conn->productos($id);

foreach($tipos as $indice => $registro){
	$imagen=$registro['nomImagen'];
	$nombreProducto=$registro['nombre'];
	$precioProducto=$registro['precio'];
	$cantidadProducto=$registro['cantidad'];
	$tipoProducto=$registro['idTipo'];
}

if($nomP!=$nombreProducto)
{
	/*$conn->editarProducto($idP,"nombre",$nomP);*/
}

if($precioP!=$precioProducto)
{
	/*$conn->editarProducto($idP,"precio",$precioP);*/
}

if($cantP!=$cantidadProducto)
{
	/*$conn->editarProducto($idP,"cantidad",$cantP);*/
}

if($tipP!=$tipoProducto)
{
	/*$conn->editarProducto($idP,"idTipo",$topP);*/
}

if($nomImgPn!="")
{
	$nomImgPn=("../img/ImgBD/".$nomImgPn);
	if($nomImgP!=$imagen)
	{ 

		if(move_uploaded_file($_FILES['archivo']['tmp_name'], $nomImgPn))
			{ 
				/*$conn->editarProducto($idP,"nomImagen",$nomImgPn);*/
		} else{
				
		}
	}

}

/*if($edicionHecha)
{
	?>
		<script type="text/javascript">
			alert('Producto editado exitosamente!');
			window.location="http://localhost/ProyectoVictor/php/administrador.php";
		</script>

	<?php
}
else
{
	?>
	<script type="text/javascript">
		alert('Ha ocurrido un error, trate de nuevo!!');
	</script>
<?php
}
*/

?>