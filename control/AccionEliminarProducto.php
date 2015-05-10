<?php

 require 'Control.php';
 $conn = new Control();
 $edicionHecha=false;

 $idP=$_POST['inpId'];

 $conn->setEliminar($idP);

?>
