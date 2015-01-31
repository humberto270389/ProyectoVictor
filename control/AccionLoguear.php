<?php
        require 'Control.php';
        $Y = new Control();

        $usuario = utf8_decode($_POST['usuario']);
        $contra = utf8_decode($_POST['pass']);


        $existencia = $Y -> Verificar_Existencia_Usuario_porUsuario($usuario);
        $cont = 0;
        foreach ($existencia as $du) {

                $cont++;

        }

        if($cont == 0){

                ?>
                <script>
                        alert("El usuario no esta registrado.");
                        window.location="http://localhost/ProyectoVictor/index.php";

                </script>
                <?php

        }else{

                if(md5($contra) == $du['contrasena']){

                        session_start();

                        $_SESSION['Autenticado'] = true;
                        $_SESSION['IdUsuario']   = $du['idUsuario'];
                        $_SESSION['NomUser'] = $du['nomUsuario'];

                        if(1 ==$du['tipoUs'])
                        {
                        	?>
	                        <script>
	                                window.location="http://localhost/ProyectoVictor/php/administrador.php";
	                        </script>
	                        <?php

                        }
                        else
                        {
                        	?>
	                        <script>
	                                window.location="http://localhost/ProyectoVictor/php/catalogo.php";
	                        </script>
	                        <?php
                        }

                       

                }else{

                        ?>
                        <script>
                                alert("Datos incorrectos.");
                                window.location="http://localhost/ProyectoVictor/index.php";
                        </script>
                        <?php

                }

        }

 ?>