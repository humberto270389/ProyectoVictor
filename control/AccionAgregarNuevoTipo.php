<?php
require 'Control.php';
	$conn = new Control();

    $nombTipo =utf8_decode($_POST['idTxtTipo']);

    $result = $conn->Verificar_Existencia_Tipo($nombTipo);
    $cont = 0;
    foreach ($result as $cv) {
        $cont++;
    }

    if($cont > 0)
    {
        echo "<h5>Ya existe ese tipo de producto: ".$nombTipo.".</h5>";
    }else{
        $conn -> RegistrarTipo($nombTipo);
        ?>
        <script>
            alert("Registro exitoso");
            window.location="http://localhost/ProyectoVictor/php/administrador.php";
        </script>
        <?php
    }
?>
