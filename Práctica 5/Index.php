<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    

    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="Index.css">

</head>

<body>

    <div id="contenedor">

        <h2 id="tituloIncio">Inicio de sesion</h2>

        <form action="Index.php" method="post">
            <label for="usuario">Usuario:</label><br>
            <input type="text" id="user" name="user" required><br><br>

            <label for="contraseña">Contraseña</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="send" name="send">
        </form>

    </div>
    

    <?php
    session_start();
    if (isset($_POST['send'])) {


        $usuario = $_POST['user'];
        $contraseña = $_POST['password'];
       

        if ($usuario === 'admin' && $contraseña === '1234') {
            
            
            $_SESSION['user'] = $usuario;
            $_SESSION['rol'] = 'admin';
            header('Location: Pagina.php');
            
        }elseif($usuario === 'cliente1' && $contraseña === '5678'){
            
            $_SESSION['user'] = $usuario;
            $_SESSION['rol'] = 'cliente';
            header('Location: Pagina.php');

        }
        else {
            echo '<p class="fallo">Acceso denegado. Verifica tus credenciales.</p>';
            header('Location: Index.php');
        }
    }
    ?>






</body>

</html>