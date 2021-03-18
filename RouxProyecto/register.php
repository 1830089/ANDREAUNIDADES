
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
                    <h2>Register</h2>
                    <p>
                        To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below.
                    </p>
                    <h4>Personal Info</h4>
                    <form action="consulta.php" method="POST">
                        <ol>
                            <li>
                                <label for="">Usuario *</label>
                                <input type="text" name="nombre" placeholder="Last,First">
                            </li>
                            <li>
                                <label for="">Contraseña *</label>
                                <input type="password" name="password" id="password">                            </li>
                            <li>
                                <label for="">Compañia</label>
                                <input type="text" name="company">                            </li>
                            <li>
                                <label for="">Email</label>
                                <input type="text" name="correo">
                            </li>
                            <div style="margin-left: 123px;">Request Type
                                <li>
                                    <input type="radio" name="tipo" value="Question">Question
                                </li>
                                <li>
                                    <input type="radio" name="tipo" value="Comment">Comment
                                </li>
                            </div>
                            <li>
                                <label for="" style="vertical-align: top;">Comment</label>
                                <textarea name="comentario" id=""></textarea>
                            </li>
                            <li>
                                <input type="checkbox" name="suscripcion" checked="yes">Subscribe to our mailing list?
                            </li>
                            <li>
                                <label for="" style="display: block;">How did you hear about us?</label>
                                <select name="referencia" id="" style="margin-left: 123px;">
                                    <option value="">Choose...</option>
                                    <option value="1">A friend</option>
                                    <option value="2">Facebook</option>
                                    <option value="3">Twitter</option>
                                </select>
                            </li>
                            <li>
                                <input type="submit" name="boton" value="Send" style="margin-left: 123px;">
                            </li>
                        </ol>
                    </form>
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
        <?php 
        require 'consulta.php'
        ?>
        <?php require "footer.php" ?>
    </div>    
</body>
</html>