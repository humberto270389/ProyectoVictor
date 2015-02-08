<?php
//MTBSS
//VIL LUCIFERI// eqLYC4XKFyXrshNZ

class Conexion{

    private $Servidor;
    private $User;
    private $Password;
    private $Conn;
    private $bd;

    public function _constructor(){
        $this->Servidor='localhost';
        $this->User='root';
        $this->Password='root';

    }

    public function abrirConexion(){
        $this->_constructor();
        $this->Conn = @mysql_connect($this->Servidor, $this->User, $this->Password) or die('Error en la conexion a la base de datos');
        return $this->Conn;
    }

    public function cerrarConexion(){
        mysql_close($this->Conn);
    }

    public function getConexion(){
        return $this->Conn;
    }

    public function seleccionarBD($bd){
        $this->bd=@mysql_select_db($bd, $this->Conn);
    }

    public function setQuery($query){

        @mysql_query($query, $this->Conn);
        echo mysql_error();
    }

    public function getQuery($query){
        return mysql_query($query, $this->Conn);
    }

}

?>
