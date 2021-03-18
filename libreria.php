<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/lib.css">
	<title>Libros</title>
</head>
<body>
	<main>
	<h1>LIBROS REGISTRADOS</h1>
	<table>

			<tr>
				<th>Título</th>
				<th>Autor</th>
			
				<th>Editorial</th>
				<th>
				Enlace</th>
			</tr>
			<?php
				require('conexion.php');
				$conexion= conectar("localhost","root","","libreria");
			
		if(ISSET($_POST['titulo'])){
			$titulo = $_POST['titulo']; 
			$autor = $_POST['autor']; 
			$edit= $_POST['editorial'];	
			$enlace= $_POST['enlace']; 
			$consulta ="INSERT INTO  libros VALUES (NULL,'$titulo','$edit','$autor','$enlace')";

			if(mysqli_query($conexion,$consulta)){
				
			}else{
				echo "Hubo un error";
			}
		}
				$consulta2 ="SELECT titulo,editorial,autor,enlace FROM libros";

				$registros=mysqli_query($conexion,$consulta2);
				if($registros->num_rows>0){
					echo "<table>";
					while($fila = $registros -> fetch_assoc()){
						echo "<tr>";
							echo "<td>" . $fila["titulo"] . "</td>";
							echo "<td>" . $fila["autor"] . "</td>";
						
							echo "<td>" . $fila["editorial"] . "</td>";
							echo "<td>" . $fila["enlace"] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				}

				desconectar($conexion);
			?>
	</table>
	<div id="boton">
	<a href="registro.php" title="">Agregar</a>

	</div>
	</main>
</body>
</html>
