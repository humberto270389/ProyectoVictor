<?php

 require 'Control.php';
 $conn = new Control();
 $edicionHecha=false;

$nomT=$_POST['idTxtTipo'];
$idTipo=$_POST['idTipo'];

$nombre;
$id;

$resultado = $conn->getTipo($nomT);
foreach($resultado as $indice => $registro){
    $nombre=$registro['tipo'];
}

if($nomT==$nombre)
{
            ?>
            <script>
                alert("Ya existe ese tipo de productos");
                window.location="../php/administrador.php";
            </script>
            <?php
}
else
{
    $conn->setNomTipo($nomT,$idTipo);
}

?>
