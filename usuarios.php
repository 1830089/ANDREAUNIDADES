<?php
    require 'abre_sesion.php';
?>
<?php
    require 'conexion_bd.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
            <link rel="stylesheet" href="css/rouxpro.css">
    <title>Roux Academy</title>
    
</head>
<body style="background-image: url(img/background_buildings.png);">
    <div class="contenido">
        <?php require "header.php" ?>
        <img class="banner" src="img/art01.jpg" alt="">
        <div class="principal">
            <main>
                
                <section class="register">
                    <h2>Asistentes</h2>
                   
                    <?php
                    $consulta2 ="SELECT id,usuario,contrasena,compania,correo,comentario FROM usuarios";

                    $registros=mysqli_query($conexion,$consulta2);
                   
                    if($registros->num_rows>0){
                            
                        while($fila = $registros -> fetch_assoc()){
                                 
                            echo "<table>";
                            echo "<tr>";
                            echo "<th>Usuario</th>";
                            echo "<th>Compañia</th>";
                            echo "<th>Correo</th>";
                            echo "<th>Comentario</th>";
                            echo "<tr>";

                                echo "<tr>";
                                echo "<td>" . $fila["usuario"] . "   </td>";
                                echo "<td>" . $fila["compania"] . "   </td>";
                                echo "<td>" . $fila["correo"] . "   </td>";
                                echo "<td>" . $fila["comentario"] . "   </td>";
                            echo "</tr>";
                            echo "</table>";
                        }
                        

                    }
                    ?>
                </section>
            </main>
            <aside>
                <section>
                    <h2>Featured Artists</h2>
                    <p>
                        Each year, nine individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.
                    </p>
                    <div class="fotos-arte">
                        <img src="img/artists/Barot_Bellingham_tn.jpg" alt="">
                        <img src="img/artists/Constance_Smith_tn.jpg" alt="">
                        <img src="img/artists/Hassum_Harrod_tn.jpg" alt="">
                        <img src="img/artists/Hillary_Goldwynn_tn.jpg" alt="">
                        <img src="img/artists/Jennifer_Jerome_tn.jpg" alt="">
                        <img src="img/artists/Jonathan_Ferrar_tn.jpg" alt="">
                        <img src="img/artists/LaVonne_LaRue_tn.jpg" alt="">
                        <img src="img/artists/Riley_Rewington_tn.jpg" alt="">
                        <img src="img/artists/Xhou_Ta_tn.jpg" alt="">
                    </div>
                    <a href="artists.php" class="enlace-gris">View Artist Info >></a>
                </section>
            </aside>
        </div>
        
        <?php require "footer.php" ?>
    </div>    
</body>
</html>