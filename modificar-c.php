<?php
require('conexion_bd.php');
$conexion= conectar("localhost","root","","roux");
//MODIFICAR ARTISTA

    $nombre_artistaM = $_POST['nombream']; 
    $urlM = $_POST['urlm'];
    $descripcionM = $_POST['descripcionm'];
    $selector = $_POST['selector'];


    $consulta ="UPDATE artistas SET ruta='$urlM', nombre='$nombre_artistaM',descripcion='$descripcionM' WHERE id = '$selector';";
    if(mysqli_query($conexion,$consulta)){
        header('Location: artists.php');
				
    }else{
        echo "Hubo un error";
    }
?>