<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Registrarse.css">
    <title>Registrarse</title>
</head>
<body>
    
    <header>


    </header>

    <main>
        <div>
            <form  id="formularioRegistro" action="RegistroUsuario.php" method="post">
                <label for="user">Usuario:</label>
                <input type="text" id="user" name="user" required>
        
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="emailConf">Correo Electrónico:</label>
                <input type="email" id="emailConf" name="emailConf" required>
        
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
    
                <label for="passwordConf">Confirmar Contraseña:</label>
                <input type="password" id="passwordConf" name="passwordConf" required>
        
                <button id="botonRegister" type="submit">Registrarse</button>
            </form>
        </div>
        
    </main>

    <footer>

    </footer>
</body>
</html>