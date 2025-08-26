<?php
class PrincipalModel extends Query{
    public function __construct() {
        parent::__construct();
    }
    //Recuperar los sliders
    public function getSliders() {
        return $this->selectAll("SELECT * FROM sliders");
    }
    //Recuperar las habitaciones
    public function getHabitaciones() {
        return $this->selectAll("SELECT * FROM habitaciones");
        
    }

    public function getDisponible($f_llegada, $f_salida, $habitacion){
        return $this->select("SELECT * FROM reservas 
        WHERE fecha_ingreso <= '$f_llegada' AND fecha_salida >= '$f_salida' AND id_habitacion = $habitacion");
}
}
?>