<html>
    <body>
    <?php
        $largo = $_GET['largo'];
        $ancho =$_GET['ancho'];
        $resultado = $largo*$ancho;
        echo "El area del Rectangulo de $largo*$ancho es: $resultado"
    ?>
    </body>
</html>