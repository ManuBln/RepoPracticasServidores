<?php

$nombreServidor = "localhost";
$userRoot = "root";
$passwordRoot = "";
$base_de_datos = "Practica9Servidores";
$conexion = mysqli_connect($nombreServidor, $userRoot, $passwordRoot, $base_de_datos) or die("Conexion incorrecta");//Conexión a la base de datos

//Conexión exitosa
echo 'Connected successfully';



// Cerrar la conexión al finalizar
$conexion->close();

class Consultas
{
                /*FUNCIONES PARA EL REGISTRO DE USUARIOO(INSERTAR EN LA TABLA) Y EL INICIO DE SESIÓN(VERIFICAMOS CONTRASEÑA)*/
    public static function RegistrarUsuario($user, $password , $email)
    {
        $nombreServidor = "localhost";
        $userRoot = "root";
        $passwordRoot = "";
        $base_de_datos = "Practica9Servidores";
        $conexion = mysqli_connect($nombreServidor, $userRoot, $passwordRoot, $base_de_datos) or die("Conexion incorrecta");//Conexión a la base de datos

        // Encriptar la contraseña antes de insertarla en la base de datos
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);//Se hashea la contraseña y la guardamo en la variable.

        $consultaInsertar = "INSERT INTO usuarios (Usuario, Contraseña, Email) VALUES (?, ?, ?)";//Consulta que inserta los datos
        $stmtInsertar = mysqli_prepare($conexion, $consultaInsertar);
        mysqli_stmt_bind_param($stmtInsertar, 'sss', $user, $passwordHash, $email);
        mysqli_stmt_execute($stmtInsertar);
        mysqli_stmt_close($stmtInsertar);
        mysqli_close($conexion);



    }

    public static  function IniciarSesionUsuario($user, $password){
        $nombreServidor = "localhost";
        $userRoot = "root";
        $passwordRoot = "";
        $base_de_datos = "Practica9Servidores";
        $conexion = mysqli_connect($nombreServidor, $userRoot, $passwordRoot, $base_de_datos) or die("Conexion incorrecta");






    }










}



?>