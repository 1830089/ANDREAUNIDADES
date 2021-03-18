<?php

require('conexion_bd.php');
$conexion= conectar("localhost","root","","roux");


//AGREGAR ARTISTA
$nombre_artista = $_POST['nombrea']; 
$url = $_POST['url'];
$descripcion = $_POST['descripcion'];

$consulta2 ="INSERT INTO artistas values('$url','$nombre_artista','$descripcion',NULL)";
if(mysqli_query($conexion,$consulta2)){
    header('Location: artists.php');
            
}else{
    echo "Hubo un error";
}
?>