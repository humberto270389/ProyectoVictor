<?php

    require 'Control.php';
    $conn = new Control();

    $nombre =utf8_decode($_POST['nombre']);
    $ap =utf8_decode($_POST['ap']);
    $am =utf8_decode($_POST['am']);
    $correo =utf8_decode($_POST['correo']);
    $pass =utf8_decode($_POST['pass']);
    $usuario =utf8_decode($_POST['usuario']);

    $passEncrip = md5($pass);
    /* ^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@+([_a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$*/
    if (preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@+([_a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$/', $correo )){


        $verificarCorreo = $conn -> Verificar_Existencia_Usuario($correo);
        $cont = 0;
        foreach ($verificarCorreo as $cv) {
            $cont++;
        }

        if($cont > 0)
        {
            echo "<h5>Ya existe un usuario registrado con el correo: ".$correo." utilize otro por favor.</h5>";
        }else{
            $conn -> RegistrarUsuario($nombre,$ap,$am,$usuario,$passEncrip,$correo);
            ?>
            <script>
                alert("Registro exitoso");
                window.location="Index.php";
            </script>
            <?php
        }
    }else{
         ?>
            <script>
                alert("Correo invalido");
            </script>
         <?php

    }

?>
