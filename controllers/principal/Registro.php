<?php
class Registro extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Registro';
        $data['subtitle'] = 'Registrarse';
        $this->views->getView('principal/registro', $data);
    }
    public function crear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (validarCampos(['nombre', 'apellido', 'usuario', 'correo', 'clave', 'confirmar'])) {
                $nombre = strClean($_POST['nombre']);
                $apellido = strClean($_POST['apellido']);
                $usuario = strClean($_POST['usuario']);
                $correo = strClean($_POST['correo']);
                $clave = strClean($_POST['clave']);
                $confirmar = strClean($_POST['confirmar']);
                $hash = password_hash($clave, PASSWORD_DEFAULT);
                $rol = 2;
                if ($clave == $confirmar) {
                    $data = $this->model->registrarse($nombre, $apellido, $usuario, $correo, $hash, $rol);
                    if ($data > 0) {
                        $res = ['tipo' => 'success', 'msg' => 'USUARIO REGISTRADO EXITOSAMENTE'];
                    } else {
                        $res = ['tipo' => 'error', 'msg' => 'ERROR AL REGISTRAR USUARIO'];
                    }
                } else {
                    $res = ['tipo' => 'warning', 'msg' => 'LAS CONTRASEÑAS NO COINCIDEN'];
                }
            } else {
                $res = ['tipo' => 'warning', 'msg' => 'TODOS LOS CAMPOS CON * SON REQUERIDOS ****'];
            }
            echo json_encode($res, JSON_UNESCAPED_UNICODE);
            die();
        }
    }
}
