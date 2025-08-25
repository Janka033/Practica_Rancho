<?php
require_once 'config/config.php';
require_once 'helpers/funciones.php';
//Verifica si la existe la ruta admin
$isAdmin = strpos($_SERVER['REQUEST_URI'], '/' . ADMIN) !== false;
//Comprobar si existe get para crear urls amigables
$ruta = empty($_GET['url']) ? 'principal/index' : $_GET['url'];
//Crear un array apartir de la ruta
$array = explode('/', $ruta);
//Validar si los encontramos en la ruta admin
if ($isAdmin &&  (count($array) ==1 || 
(count($array) ==2) && empty($array[1])) 
&& $array[0] == ADMIN) {
    //Crear controlador
    $controller = 'Admin';
    $metodo = 'login';
}
else {
    $indiceUrl = ($isAdmin) ? 1 : 0;
    $controller = ucfirst($array[$indiceUrl]);
    $metodo= 'index';
    }
    //Validad parametros
    $metodoIndice = ($isAdmin) ? 2 : 1;
    $parametroIndice = ($isAdmin) ? 3 : 2; // <-- Mueve esto antes de usarlo
    if(!empty($array[$parametroIndice]) && $array[$parametroIndice] != '') {
        $metodo = $array[$metodoIndice];
    }
    //Validad metodos
        $parametro = '';
        $parametroIndice = ($isAdmin) ? 3 : 2;
    if(!empty($array[$metodoIndice]) && $array[$metodoIndice] != '') {
        for($i = $parametroIndice; $i < count($array); $i++) {
            $parametro .= $array[$i] . ',';
        }
        $parametro = trim($parametro, ',');
    }
    //Llamar autoload
    require_once 'config/app/Autoload.php';
    //Validad directorio de controladores
    $dirControllers = ($isAdmin) ? 'controllers/admin/' . $controller . '.php' : 'controllers/principal/' . $controller . '.php';
    if(file_exists($dirControllers)) {
        require_once $dirControllers;
        $controller = new $controller();
        if(method_exists($controller, $metodo)) {
                $controller->$metodo($parametro);
            } else {
                echo 'Metodo no existe';
            }
        } else {
            echo 'Controlador no existe';
        }
    ?>