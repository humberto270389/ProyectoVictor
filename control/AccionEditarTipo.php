<?php

 require 'Control.php';
 $conn = new Control();
 $edicionHecha=false;

$nomT=$_POST['idTxtTipo'];

$nombre;

$resultado = $conn->getTipo($nomT);
foreach($resultado as $indice => $registro){

}

?>
