<!Doctype html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css.css">
    <title>Ejercicio 4</title>

</head>
<body>   
    
<?php

$matriz = array(
    array(3, 1),
    array(2, 0)
);


echo "Matriz 2x2: <br>";

echo "<table>";
foreach ($matriz as $fila) {
    echo "<tr>";
    foreach ($fila as $elemento) {
        echo "<td>".$elemento."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

    


</body>
</html>