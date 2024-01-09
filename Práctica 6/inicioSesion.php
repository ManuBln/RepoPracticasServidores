<?php 
session_start();
if (isset($_POST["user"]) && isset($_POST["password"])) {

    $user = $_POST['user'];
    $password = $_POST['password'];

    // Realizar la consulta a la base de datos para verificar las credenciales
    $sql = "SELECT * FROM usuarios WHERE user = :Usuario AND password = :Contraseña";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':Usuario', $user);
    $stmt->bindParam(':Contraseña', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Iniciar sesión y redirigir a la página de inicio
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user;
        header('Location: Página_tabla_Pokemons.php');
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
    }

}


?>