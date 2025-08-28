<?php
class Dashboard extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Perfil Cliente';
        $data['subtitle'] = 'Bienvenido';
        $this->views->getView('principal/clientes', $data);
    }
}
