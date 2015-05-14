<?php

 require 'Control.php';
 $conn = new Control();
 $edicionHecha=false;

 $idP=$_POST['inpId'];


$eliminado= $conn->setEliminar($idP);
 echo($eliminado);
 if($eliminado)
 {
     ?>
        <script>
            alert("El producto fue eliminado");
            window.location="http://localhost/ProyectoVictor/php/administrador.php";
        </script>
    <?php

 }
else
{
    ?>
        <script>
            alert("El producto NO se puede eliminar por que existen productos aun!");
            window.location="http://localhost/ProyectoVictor/php/administrador.php";
        </script>
    <?php
}

?>
