<?php
require('conexion_bd.php');
$conexion= conectar("localhost","root","","roux");
//ELIMINAR ARTISTA
    $selector = $_POST['selectore'];


    $consulta ="DELETE FROM artistas WHERE id = '$selector';";
    if(mysqli_query($conexion,$consulta)){
        header('Location: artists.php');
				
    }else{
        echo "Hubo un error";
    }
?>