<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <title>Inicio Sesion</title>
</head>

<body>

    <header>


    </header>

    <main>
        <div>
            <form id="formularioInicio" action="inicioSesion.php" method="post">
                <label for="user">Usuario:</label>
                <input type="text" id="user" name="user" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
                <a id="registrarme" href="Registrarse.php">Registrarme</a>

                <button id="botonRegister" type="submit">Iniciar Sesion</button>
                <p id="alertaInicioSesion"></p>
            </form>
        </div>

    </main>

    <footer>

    </footer>
</body>

</html>