

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Roux Academy</title>
</head>
<body style="background-image: url(img/background_buildings.png);">
    <div class="contenido">
        <?php require "header.php" ?>
        <img class="banner" src="img/art01.jpg" alt="">
        <div class="principal">
            <main>
                <section>
                    <h2>About the event</h2>
                    <p>
                        The Roux Academy’s annual conference and exhibit is designed to foster a close-knit relationship amongst artists at various universities around the world. But sign up early, as this not-to-miss conference sells out quickly, and the waiting list is long. In addition, art students are encouraged to send in works from their school portfolios to be considered for hanging in the CAC exhibit halls, as well as to be selected as a Featured Artist.
                    </p>
                </section>
                <section class="artistas">
                    <?php
                        require("conexion_bd.php");
                        $conexion = conectar($servidor,$usuario,$contrasena,$bd);
                        $consulta = "SELECT ruta,nombre,descripcion FROM artistas";
                        $resultado = mysqli_query($conexion,$consulta);
                        while($fila = $resultado->fetch_assoc()){
                            $url = $fila["ruta"];
                            $nombre = $fila["nombre"];
                            $descripcion = $fila["descripcion"];
                            
                            echo "<hr>";
                            echo "<section>";
                                    echo "<h3> $nombre </h3>";
                                    echo "<p> <img src=$url>$descripcion </p>";
                            echo "</section>";
                        }
                        
                    ?>
                </section>
            </main>
            <aside>
                <section>
                    <h2>The Art</h2>
                    <p>
                        This year’s art pieces will inspire thought, conversation, imagination, and even criticism, as modern art often does. From critically-acclaimed works created by our Featured Artists, to a vast assortment of works by talented art students in schools across the world.
                    </p>
                    <div class="fotos-arte">
                        <img src="img/art/Barot_Bellingham_tn.jpg" alt="">
                        <img src="img/art/Constance_Smith_tn.jpg" alt="">
                        <img src="img/art/Hassum_Harrod_tn.jpg" alt="">
                        <img src="img/art/Hillary_Goldwynn_tn.jpg" alt="">
                        <img src="img/art/Jennifer_Jerome_tn.jpg" alt="">
                        <img src="img/art/Jonathan_Ferrar_tn.jpg" alt="">
                        <img src="img/art/LaVonne_LaRue_tn.jpg" alt="">
                        <img src="img/art/Riley_Rewington_tn.jpg" alt="">
                        <img src="img/art/Xhou_Ta_tn.jpg" alt="">
                    </div>
                    <h2 class="rojo">Coming to the event?</h2>
                    <h3 class="gris">Check out our mobile site</h3>
                    <p>
                        Our mobile site contains schedules, and exhibit/ artist details, accessible simply by scanning QR codes located all around the venue exhibit halls.
                    </p>
                    <img src="img/iphone.png" alt="" class="iphone">
                    <a href="index.php" class="enlace-gris">Roux Mobile >></a>
                </section>
            </aside>
        </div>
        <?php require "footer.php" ?>
    </div>    
</body>
</html>