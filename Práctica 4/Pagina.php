<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Pagina.css">
    <title>Document</title>
</head>

<body>



    <div id="contenedorRuta" class="container text-center mt-5">
        <?php
        echo '<p class="ruta">La ruta actual es la siguiente: ' . getcwd() . '</p>';

        ?>
    </div>

    <div class="contenedorBuscador">

        <form action="Pagina.php" method="post">

            <label for="buscador" meth>Indique el nombre del archivo: </label><br>
            <input type="text" id="buscador" name="buscador" ><br><br>

            <input type="submit" value="send" name="send">
        </form>

        <?php
        if (isset($_POST['send'])) {

            $buscador = $_POST['buscador'];

            if ($buscador === '') {
                echo  scandir(getcwd());
            }
        }
        ?>


    </div>

    <div id="contenedorCrear" class="container">


    </div>




</body>

</html>