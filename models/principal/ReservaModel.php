<?php
class ReservaModel extends Query{
    public function __construct() {
        parent::__construct();
    }
    
    public function getDisponible($f_llegada, $f_salida, $habitacion){
        return $this->select("SELECT * FROM reservas 
        WHERE fecha_ingreso <= '$f_salida' 
        AND fecha_salida >= '$f_llegada' AND id_habitacion = $habitacion");
}
}
?>