<?php
include_once "../vendor/autoload.php";
use Citas\Controller\Controller;

$controller = new Controller();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/style_visordatos.css">
    <link rel="javascript" href="../js/JavaS.js">
    <script type="text/javascript" src="../js/JavaS.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <script src="../js/cambioboton.js"></script>
    <script src="../js/desplegable.js"></script>
</head>

<body>

<?php
$timezone = date_default_timezone_get();
date_default_timezone_set($timezone);
$date = date('m/d/Y', time());

?>
    <main>
        <div id="tablacitas" class="active">
            <ul id="tablacitas2">  <!--Lo cambiaremos por CSS-->
                <?php //$model->printConsultaDeCoder(); ?>
            </ul>
            <div id="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        </div>

        <div class="contenedorPrincipal" id="contenedorPrincipal">

            <form class="form" method="POST" action="../src/EnvioForm.php">
                <input class="fecha" readonly type="text" value="<?php echo $date; ?>" name="date">
                    <div class="contenedorSecundario" id="T">
                        <div class="contenedorSelect color1" id="T1">
                            <!--<label>Coders</label>-->
                            <select name="nombreEmisor" id="selection1" required>
                                <?php $controller->consultListadoCoders(); ?>
                            </select>
                        </div>
                        <div class="contenedorSelect color2">
                            <img src="../img/rotation.png" alt="imagen_rotacion" class="imagenRotacion" onclick="invertirEmisorConsulta()">  

                        </div>
                        <div class="contenedorSelect color3" id="T2">
                            <!--<label>Formadores</label>-->
                            <select name="nombreReceptor" id="selection2" required>
                                <?php $controller->consultListadoFormadores(); ?>
                            </select>
                        </div>
                    </div>
                    <textarea class="textarea"  name="consulta" required rows="20" cols="50"></textarea>
                <input type="submit">
            </form>

        </div>
        <button id="desplegable" type="button" onclick="toogleview()">Formulario</button>

    </main>


    <footer>
    Made By NaN
    </footer>

</body>
</html>