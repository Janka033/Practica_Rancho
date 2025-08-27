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
        return $this->selectAll("SELECT * FROM habitaciones WHERE estado = 1");
        
    }
}
?>