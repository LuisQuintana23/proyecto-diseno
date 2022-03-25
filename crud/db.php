<?php
$conexion = mysqli_connect(
    '142.93.184.138',
    'babas',
    'siu2424BICHO$%@',
    'proyecto_web'
);

if (isset($conexion)){
    echo 'Base conectada';
}

?>