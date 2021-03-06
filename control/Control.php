<?php

require 'Conexion.php';

class Control extends Conexion{

    public function _constructor(){
        parent::_constructor();
    }

    public function RegistrarUsuario($nombre, $ap, $am, $nomUs, $pass, $correo){

        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $this->setQuery("INSERT INTO usuario (nombre, ap, am, nomUsuario, contrasena, correo, tipoUs) VALUES('".$nombre."','".$ap."','".$am."','".$nomUs."','".$pass."','".$correo."',0)");
        $this->cerrarConexion();
    }

     public function Verificar_Existencia_Usuario($correo) {

        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBD('mtb');
        $rSQL = $this->getQuery('SELECT * FROM usuario WHERE correo = "'.$correo.'" ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;
    }

    public function Verificar_Existencia_Usuario_porUsuario($usuario) {

        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $rSQL = $this->getQuery('SELECT * FROM usuario WHERE nomUsuario = "'.$usuario.'" ');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;
    }

    public function Logueo($user,$pass){
        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $this->getQuery("");

    }

    public function tipoProductos(){
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $rSQL = $this->getQuery('SELECT * FROM tipoProducto ORDER BY tipo');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;
    }

    public function agregarProducto($nom,$precio,$cantidad,$nomImg,$tipo){
        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $this->setQuery("INSERT INTO producto (nombre, precio, cantidad, nomImagen, idTipo) values ('".$nom."','".$precio."','".$cantidad."','".$nomImg."',".$tipo.")");
    }

    public function RegistrarTipo($nombre){
        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $this->setQuery("INSERT INTO tipoproducto (tipo) values ('".$nombre."')");
    }

    public function productos($id)
    {
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $rSQL = $this->getQuery('SELECT p.*, tp.tipo FROM producto p, tipoproducto tp WHERE idProducto='.$id.' GROUP BY idProducto ORDER BY nombre');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;
    }

    function todosLosProductos(){
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $rSQL = $this->getQuery('SELECT * FROM producto ORDER BY nombre');
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;
    }

    function editarProducto($id,$campo,$valor){

        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        if($campo=='nombre' || $campo=='nomImagen')
        {
            $this->setQuery("UPDATE producto SET ".$campo."='".$valor."' where idProducto=".$id);
        }
        else
        {
            $this->setQuery("UPDATE producto SET ".$campo."=".$valor." where idProducto=".$id);
        }

    }

    function Verificar_Existencia_Tipo($nombre){
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBD('MTB');

        $rSQL =$this->getQuery("Select * from tipoproducto where tipo='".$nombre."'");
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;

    }

    function tipoDeProductos($id){
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $rSQL = $this->getQuery('SELECT * from tipoproducto where id='.$id);
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;

    }

    function getTipo($idTipo){
        $resultado = Array();
        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $rSQL = $this->getQuery('SELECT * from tipoproducto where idTipoProducto='.$idTipo);
        if (mysql_num_rows($rSQL) > 0) {
            while ($fila = mysql_fetch_assoc($rSQL)) {
                array_push($resultado, $fila);
            }
        }
        $this->cerrarConexion();
        return $resultado;
    }

    function setNomTipo($nombre, $id){

        $this->abrirConexion();
        $this->seleccionarBD('MTB');
        $this->setQuery('UPDATE tipoproducto SET tipo ="'.$nombre.'" where idTipoProducto='.$id);
    }

    function setEliminarTipo($id){
        $this->abrirConexion();
        $this->seleccionarBD('MTB');

        $resul= $this->getQuery('select count(*) as cont from producto where idTipo='.$id);

        $datos=mysql_fetch_array($resul);
        $existe=$datos['cont'];

        if($existe!=0)
        {
            return false;
        }
        else
        {
            $this->setQuery('DELETE from tipoproducto where idTipoProducto='.$id);
            return true;
        }

    }

    function setEliminar($id){
        $this->abrirConexion();
        $this->seleccionarBD('MTB');

        $result=$this->getQuery('select cantidad as cantidad from producto where idProducto='.$id);

        $datos=mysql_fetch_array($result);
        $existe=$datos['cantidad'];

        if($existe!=0)
        {
            return false;
        }
        else
        {
            $this->setQuery('DELETE from producto where idProducto='.$id);
            return true;
        }


    }

}


?>
