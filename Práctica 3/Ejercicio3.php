<!Doctype html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css.css">
    <title>Ejercicio 3</title>

</head>
<body>

    <form action="" method="post">
        
    Número 1: <input type="text" id="numero1"  name="numero1" required><br>
    <br> Número 2: <input type="text" id="numero2"  name="numero2" required><br>
    <br> Número 3: <input type="text" id="numero3"  name="numero3" required><br>
    <br> Número 4: <input type="text" id="numero4"  name="numero4" required><br>
    <br> Número 5: <input type="text" id="numero5"  name="numero5" required><br>
    
    <br><input type="submit" name = "Calcular" value = "Calcular">
       
    </form>
    
    <?php

            if (isset($_POST['Calcular'])) {
                $numeros = array(
                    floatval($_POST['numero1']),
                    floatval($_POST['numero2']),
                    floatval($_POST['numero3']),
                    floatval($_POST['numero4']),
                    floatval($_POST['numero5'])
                );
                
                $aux = $numeros[0];

                for($i = 1; $i<count($numeros); $i++){

                    if($aux < $numeros[$i]){
                        $aux = $numeros[$i];

                    }

                }


                    echo "El mayor de los cinco números es: ".$aux;
            }
       
        

    ?>

    


</body>
</html>