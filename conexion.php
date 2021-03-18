<?php

    $serv="localhost";
    $bd="libreria";
    $user="root";
    $pswd="";
    $conexion="";

    //Crear Conexión
    function conectar ($serv, $user, $pswd, $bd){
    $conexion= mysqli_connect($serv, $user, $pswd, $bd);

    //Revisar si la Conexión tuvo Exito

        if (!$conexion){
            die("No se pudeo crear la conexion");
        }
        return $conexion;
    }

    
    function desconectar($conexion){
        //Cerrar la Conexión

    mysqli_close($conexion);
    }
?>