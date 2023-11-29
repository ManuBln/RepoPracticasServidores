<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Pagina.css">
    <title>Document</title>
</head>

<body>

    <?php
    session_start();

    if ($_SESSION['rol'] = 'admin' || $_SESSION['rol'] = 'cliente') {

        ?>



        <div id="contenedorRuta" class="container text-center mt-5">
            <?php
            echo '<p class="ruta">Fecha: ' . date('Y-m-d H:i:s') . '</p>';
            echo '<p class="ruta">La ruta actual es la siguiente: ' . getcwd() . '</p>';

            ?>
        </div>



        <div class="contenedorBuscador">

            <form action="Pagina.php" method="post">

                <label for="buscador" meth>Indique el nombre del archivo: </label><br>
                <input type="text" id="buscador" name="buscador"><br><br>

                <input type="submit" value="Send" name="send">
            </form>

            <?php
            if (isset($_POST['buscador'])) {
                $nombre_archivo = $_POST['buscador'];
                $directorio_actual = getcwd();
                $archivos = scandir($directorio_actual);

                if (in_array($nombre_archivo, $archivos)) {
                    echo "El archivo '$nombre_archivo' está en el directorio actual.";
                } else {
                    echo "El archivo '$nombre_archivo' no está en el directorio actual.";
                }
            }
            ?>


        </div>


        <?php
        if ($_SESSION['rol'] = 'admin') {

            ?>


            <div id="contenedorCrear">
                <form action="Pagina.php" method="post">

                    <label for="crear" meth>Indique el nombre del archivo para crearlo: </label><br>
                    <input type="text" id="crear" name="crear"><br><br>

                    <label for="contenido" meth>Indique el contenido: </label><br>
                    <input type="text" id="contenido" name="contenido"><br><br>

                    <label for="permisos" meth>Indique Permisos en octal: </label><br>
                    <input type="text" id="permisos" name="permisos"><br><br>

                    <input type="submit" value="Send" name="send">
                </form>

                <?php

                if (isset($_POST['crear'])) {
                    $crear = $_POST['crear'];
                    $contenido = $_POST['contenido'];
                    $permisos = intval($_POST['permisos'], 8);

                    $directorio_actual_2 = getcwd();
                    $url_archivo = $directorio_actual_2 . '/' . $crear;

                    if (file_put_contents($url_archivo, $contenido) !== false) {
                        chmod($url_archivo, $permisos);
                        echo "El archivo '$crear' se ha creado correctamente.";
                    } else {
                        echo "No se pudo crear el archivo.";
                    }
                }
                ?>

            </div>
            <?php

        }


        ?>

        <div class = " text-center">
            <form action="logout.php">
                <input type="submit" value="Cerrar Session">
            </form>
        </div>



        <?php
    } else {
        echo '<p class="fallo">Acceso denegado. Verifica tus credenciales.</p>';
        header('Location: Index.php');
    }
    ?>




</body>

</html>