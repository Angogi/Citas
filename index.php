<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/style_visordatos.css">
    <link rel="javascript" href="./js/JavaS.js">
    <script type="text/javascript" src="js/JavaS.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <script src="./js/cambioboton.js"></script>
    <script src="./js/desplegable.js"></script>
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
                    <?php include './funcionalidad/getPreguntas.php'; ?>
                </ul>
                <div id="target" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        </div>
    </main>
<footer>
    <div class="contenedorPrincipal" id="contenedorPrincipal">

        <form class="form" method="POST" action="./funcionalidad/envioformulario.php">
            <input class="fecha" readonly type="text" value="<?php echo $date; ?>" name="date">
            <div class="contenedorSecundario">
                <div class="contenedorSelect color1" id="T1">
                        <select name="selectionA" id="selection1" required>
                            <?php include './funcionalidad/getListadoCoders.php'; ?>
                        </select>
                </div>
                <div class="contenedorSelect color2">
                    <img src="./img/rotation.png" alt="imagen_rotacion" class="imagenRotacion" onclick="cambiar()">  

                </div>
                <div class="contenedorSelect color3" id="T2">
                        <select name="selectionP" id="selection2" required>
                            <?php include './funcionalidad/getListadoFormadores.php'; ?>
                        </select>
                </div>
            </div>
            <textarea class="textarea"  name="comment" required rows="20" cols="50"></textarea>
            <input type="submit">

            <p><b>Note:</b>Required</p>
        </form>

    </div>
    <button id="desplegable" type="button" onclick="toogleview()">Formulario</button>
</footer>

</body>
</html>