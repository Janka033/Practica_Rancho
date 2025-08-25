<?php
require_once 'config/config.php';    // Incluye definición de constantes
require_once 'config/app/Conexion.php';  // Luego incluye la clase de conexión

$conn = new Conexion(); // Ahora sí funcionará correctamente

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba conexión</title>
</head>
<body>
    <h1>Si ves "Conectado" arriba, la conexión funciona.</h1>
</body>
</html>