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

$tipos = $conn->productos($idP);

foreach($tipos as $indice => $registro){
	$imagen=$registro['nomImagen'];
	$nombreProducto=$registro['nombre'];
	$precioProducto=$registro['precio'];
	$cantidadProducto=$registro['cantidad'];
	$tipoProducto=$registro['idTipo'];
}

if($nomP!=$nombreProducto)
{
	/*echo'<script>alert("'.$nombreProducto.'");</script>';*/
	$conn->editarProducto($idP,"nombre",$nomP);
    $edicionHecha=true;

}

if($precioP!=$precioProducto)
{
	/*echo'<script>alert("'.$precioProducto.'");</script>';*/
	$conn->editarProducto($idP,"precio",$precioP);
    $edicionHecha=true;
}

if($cantP!=$cantidadProducto)
{
	/*echo'<script>alert("'.$cantidadProducto.'");</script>';*/
	$conn->editarProducto($idP,"cantidad",$cantP);
    $edicionHecha=true;
}

if($tipP!=$tipoProducto)
{
	/*echo'<script>alert("'.$tipP.'");</script>';*/
	$conn->editarProducto($idP,"idTipo",$tipP);
    $edicionHecha=true;
}

if($nomImgP!="")
{
	$nomImgP=("../img/ImgBD/".$nomImgP);
	if($nomImgP!=$imagen)
	{
        /*echo'<script>alert("'.$nomImgP.'        '.$imagen.'");</script>';*/
		if(move_uploaded_file($_FILES['archivo']['tmp_name'], $nomImgP))
			{
				$conn->editarProducto($idP,"nomImagen",$nomImgP);
                $edicionHecha=true;
		} else{

		}
	}

}

if($edicionHecha)
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


?>
