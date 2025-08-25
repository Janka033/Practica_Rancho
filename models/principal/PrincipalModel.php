<?php
class PrincipalModel extends Conexion {
    private $con;
    public function __construct() {
        $this->con = new Conexion();
    }
    public function getPrueba() {
        $data = $this->con->conectar();
        return $data;
    }
}
?>