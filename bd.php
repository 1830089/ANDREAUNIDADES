<?php

    require('conexion.php');
    
    $conexion= conectarBD("localhost","root","","libreria");
    



    // cerrar la conexion
    desconectar($conexion);



?>