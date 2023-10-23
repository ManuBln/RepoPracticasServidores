<!Doctype html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css.css">
    <title>Ejercicio 5</title>

</head>
<body>   
    
    <?php

            $matriz = array(
                array (1, 0),
                array (0, 1));

                $matriz2 = array(
                array (0, 1),
                array (1, 0));

                $resultado = array();

                $num_filas = count($matriz);
                $num_columnas = count($matriz[0]);
                
                    for ($fila = 0; $fila < $num_filas; $fila++) {
                        for ($columna = 0; $columna < $num_columnas; $columna++) {
                            $resultado = $matriz[$fila][$columna] + $matriz2[$fila][$columna];
                        }
                    }
                
                echo "El resultado de la suma es:<br>";
                    for ($fila = 0; $fila < $num_filas; $fila++) {
                        for ($columna = 0; $columna < $num_columnas; $columna++) {
                            echo $resultado . " ";
                        }
                echo "<br>";
                }   
    ?>

    


</body>
</html>