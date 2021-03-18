<?php
    require 'conexion_bd.php';
    $valido = false;

    if(isset($_POST['aceptar'])){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        if(!valida_usuario_bd($usuario,$contrasena,$conexion)){
            echo 'No es valido <br/>';
            $valido = false;
        }else{
            echo 'Si es valido <br/>';
            session_start();
            $valido=true;
            $_SESSION['usuario']=$usuario;
            header('Location:index.php');
        }
    }
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
                    <h2>Login</h2>
                    <p>
                        To attend the Roux Academy 2016 Contemporary Art Conference, please login below.
                    </p>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                        <input type="text" class="form_ctrl" name="usuario" placeholder="Username" required="An username is required">
                        <input type="password" class="form_ctrl" name="contrasena" placeholder="Password" required>
                        <input type="submit" class="btn" name="aceptar" value="ingresar">
                        <?php
                            if(!$valido && isset($_POST['aceptar'])){
                                echo '<p class="alerta"> Username and/or password wrong </p>';
                            }
                        ?>
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
        <?php require "footer.php" ?>
    </div>    
</body>
</html>