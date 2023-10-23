<!Doctype html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css.css">
    <title>Ejercicio 1</title>

</head>
<body>

    <form action="" method="post">
        Precio de la cesta: <input type="text" id="Precio" name="Precio" required>
        <input type="submit" name = "Calcular" value = "Calcular">
    </form>
    
    <?php

        if(isset($_POST['Precio'])){

            $precio = floatval($_POST['Precio']);

            if($precio < 50){

                $gastos = 3.95;

            }elseif($precio >= 50 && $precio < 75){

                $gastos = 2.95;
            }elseif($precio >= 75 && $precio < 100){

                $gastos = 1.95;
            }else{
                $gastos = "GRATUITO";
            }

            echo "Los gastos de envio son : ".$gastos."$";
        }

        

    ?>

    


</body>
</html>