<?php
    $bd = 'roux';
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';

    $conexion = mysqli_connect($servidor,$usuario,$contrasena,$bd);

    if(!$conexion){
        die('Conexion a la base de datos' . $bd . 'falló:'.mysqli_connect_error());
    }

    //echo "Conectado a la base de datos $bd <br/>";

    function valida_usuario_bd($usuario, $contrasena, $conexion){
        $query = "select 1 as user_Valido from usuarios where usuario = '$usuario' and contrasena = MD5('$contrasena')";
        echo $query . "<br/>";
        $resultado = mysqli_query($conexion,$query) or die('Error al ejecutar la consulta');
        if(mysqli_num_rows($resultado)==0){
            return false;
        }else{
            return true;
        }
    }

    function conectar($servidor,$usuario,$contrasena,$bd){
		$conexion = mysqli_connect($servidor,$usuario,$contrasena,$bd);
		if(!$conexion){
			die('Ocurrió un error al hacer la conexión con la BD');
		}
		return $conexion;
	}
?>