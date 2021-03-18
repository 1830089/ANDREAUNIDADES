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
    <link rel="stylesheet" href="css/style.css">
    <title>Roux Academy</title>
</head>
<body style="background-image: url(img/background_buildings.png);">
    <div class="contenido">
        <?php require "header.php" ?>
        <img class="banner" src="img/art01.jpg" alt="">
        <div class="principal">
            <main>
            <section class="register">
                    <h2>Agregar artista</h2>
                    
                    <form action="agregar-c.php" method="POST">
                        <ol>
                            <li>
                                <label for="">Nombre del artista</label>
                                <input type="text" name="nombrea" placeholder="Ingrese el nombre del artista">
                            </li>
                            <li>
                                <label for="">Ingrese URL</label>
                                <input type="text" name="url" placeholder="ingrese ruta de la imagen">
                            </li>
                            
                            <li>
                                <label for="">Ingrese Descripcion del artista</label>
                                <textarea name="descripcion" id=""></textarea>
                            </li>
                            
                            <li>
                                <input type="submit" name="boton" value="Agregar" style="margin-left: 123px;">
                            </li>
                        </ol>
                    </form>
                </section>
                <section class="register">
                    <h2>Modificar artista</h2>
                    

                    <form action="modificar-c.php" method="POST">
                        <ol>
                            <li>
                                <select  name="selector">
                                            <option value="0">Seleccione:</option>
                                    <?php
                                    $query = $conexion -> query ("SELECT * FROM artistas");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores["id"].'">'.$valores["nombre"].'</option>';
                                    }
                                    
                                    ?>
                                </select>
                                
                                
                            </li>
                            <li>
                                <label for="">Nombre del artista</label>
                                <input type="text" name="nombream" placeholder="Ingrese el nombre del artista">
                            </li>
                            <li>
                                <label for="">Ingrese URL</label>
                                <input type="text" name="urlm" placeholder="ingrese ruta de la imagen">
                            </li>
                            
                            <li>
                                <label for="">Ingrese Descripcion del artista</label>
                                <textarea name="descripcionm" id=""></textarea>
                            </li>
                            
                            <li>
                                <input type="submit" name="boton" value="Modificar" style="margin-left: 123px;">
                            </li>
                        </ol>
                    </form>
                </section>
                <section class="register">
                    <h2>Eliminar artista</h2>
                    <form action="eliminar-c.php" method="POST">
                        <ol>
                            <li>
                                <select  name="selectore">
                                            <option value="0">Seleccione:</option>
                                    <?php
                                    $query = $conexion -> query ("SELECT * FROM artistas");
                                    while ($valores = mysqli_fetch_array($query)) {
                                        echo '<option value="'.$valores["id"].'">'.$valores["nombre"].'</option>';
                                    }
                                    
                                    ?>
                                </select>
                                
                                
                            </li>

                            <li>
                                <input type="submit" name="boton" value="Eliminar" style="margin-left: 123px;">
                            </li>
                        </ol>
                    </form> 
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