<?php

 require 'Control.php';
 $conn = new Control();

 $id=$_POST['id'];

 $con->setEliminarTipo($id);

?>
