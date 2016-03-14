<?php
    include_once './controlador/Controlador.php';
    include_once './controlador/Enrutador.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvenidos</title>
        <link rel="stylesheet" href="css/bootstrap.css"
    </head>
    <body>
        <h1>Bienvenidos</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="?cargar=crear">Registrar</a></li>
            </ul>
        </nav>
        <section>
        <?php
            $enrutador = new Enrutador();
            if ($enrutador->validarGET($_GET['cargar'])) {
                $enrutador->cargarVista($_GET['cargar']);
            }
        ?>
        </section>
    </body>
</html>
