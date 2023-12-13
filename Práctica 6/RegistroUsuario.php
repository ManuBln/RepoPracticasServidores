<?php
include_once("conexion.php");

if (isset($_POST["user"]) && isset($_POST["password"]) && isset($_POST["email"])) {

    $user = $_POST["user"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    Consultas::RegistrarUsuario($user, $password, $email);

}

?>