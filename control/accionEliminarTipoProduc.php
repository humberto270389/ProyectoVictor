<?php

 require 'Control.php';
 $conn = new Control();

 $id=$_POST['id'];

 $eliminado= $conn->setEliminarTipo($id);
 echo($eliminado);
 if($eliminado)
 {
     ?>
        <script>
            alert("El tipo de producto fue eliminado");
            window.location="http://localhost/ProyectoVictor/php/administrador.php";
        </script>
    <?php

 }
else
{
    ?>
        <script>
            alert("El tipo de producto NO se puede eliminar por que existen productos a los que se les asigno este tipo!");
        </script>
    <?php
}
?>

