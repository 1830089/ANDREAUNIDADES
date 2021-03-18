<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $tabla=$_GET["tabla"];
        $resultados=$_GET["resultados"];

        echo 'tabla: '.$tabla.' resultados: '.$resultados;
        
        echo '<br> Recuerde usar la URL para modificar los parámetros, por ejemplo: index.php/?tabla=10&resultados=10'
        ?>
        <br>
        <?php
        for($i=0;$i<=$resultados;$i++){
            echo $tabla.'*'.$i.' = '.$i*$tabla;
            ?>
            <br>
            <?php
        }
    ?>

</body>
</html>