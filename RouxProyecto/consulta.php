<?php

require('conexion_bd.php');
$conexion= conectar("localhost","root","","roux");

//REGISTRAR USUARIO
$nombre = $_POST['nombre']; 
$contrasena = $_POST['password']; 
$company = $_POST['company']; 
$correo = $_POST['correo']; 
$comentario = $_POST['comentario'];

$consulta ="INSERT INTO usuarios values(NULL,'$nombre',md5('$contrasena'),'$company','$correo','$comentario')";
if(mysqli_query($conexion,$consulta)){
    header('Location: login.php');
            
}else{
    echo "Hubo un error";
}


?>