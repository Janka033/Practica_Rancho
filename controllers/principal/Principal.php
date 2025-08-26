<?php
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Pagina Principal';
        //Traer Sliders
        $data['sliders'] = $this->model->getSliders();
        //Traer Habitaciones
        $data['habitaciones'] = $this->model->getHabitaciones();
        $this->views->getView('index', $data);
    }

   
}
?>
