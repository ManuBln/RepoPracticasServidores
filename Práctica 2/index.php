<!Doctype html>
<head>
    <link rel="stylesheet" href="css.css" type="text/css">
    <title>Práctica 2</title>
</head>
<body>

    <header>
       <h1>Práctica 2.</h1>
    </header>

    <main>
        <div class = "ejercicios"> 
           
                <h2>Ejercicio 1.</h2>
                    <hr class = "titulos">
                <h3>Apartado a.</h3>
                <hr class = "apartados">
                    <?php
                    
                        $var1  = 'Hola';
                        $var2 = 'Mundo';
                      ;

                        #Concatenar variables tipo String con .
                        $frase= $var1. " " .$var2;
                        echo $frase;
                        
                    ?>

                <h3>Apartado b.</h3>
                <hr class = "apartados">
                <?php
                    $boolean = true;
                    echo $boolean;
                    ?>

                <h3>Apartado c.</h3>
                <hr class = "apartados">
                <?php
                        $float = 3.14;
                        echo $float;
                    
                    ?>

                <h3>Apartado d.</h3>
                <hr class = "apartados">
                <p>Valores del array con claves(1,2,3)</p>
                <?php
                        $array = [
                        "1" => "valor1",
                        "2" => "valor2",
                        "3" => "valor3"];

                        echo $array["1"];
                        echo "<br>";
                        echo $array["2"];
                        echo "<br>";
                        echo $array["3"];

                    
                    ?>
           
        </div>


        <div class="ejercicios"> 
           <h2>Ejercicio 2.</h2>
           <hr class = "titulos">
           
           <?php
                    $boolean = false;
                    echo $boolean;
                    
            ?>

            <p>Al cambiar la variable booleana de true a false no aparece el 0 ya que en php false se refiere a contenido vacio, es decir nada.</p>
        </div>


        <div class="ejercicios"> 
           <h2>Ejercicio 3.</h2>
           <hr class = "titulos">
           <?php
           $sinEspacios = str_replace(' ', '',$frase);
           echo $sinEspacios;
           ?>
        </div>


        <div class="ejercicios"> 
           <h2>Ejercicio 4.</h2>
           <hr class = "titulos">
           <?php
                $mensaje = 'El operador “+” sirve para sumar el valor de variables. Con la “/”podemos 
                dividir valores entre variables. El símbolo del dólar “$” indica que estamos 
                utilizando variables pero no lo usaremos en las constantes o globales.';

                echo $mensaje;

           ?>
        </div>


        <div class="ejercicios"> 
           <h2>Ejercicio 5.</h2>
           <hr class = "titulos">
           <?php
                
                echo strlen($mensaje);

           ?>
        </div>


        <div class="ejercicios"> 
           <h2>Ejercicio 6.</h2>
           <hr class = "titulos">
           <?php
                $vocales = ["a","e","i","o","u","A","E","I","O","U"];
                $mensajeNuevo = str_replace($vocales, '',$mensaje);//reemplaza vocales por ''.
                echo $mensajeNuevo;
           ?>
        </div>


        <div class="ejercicios"> 
           <h2>Ejercicio 7.</h2>
           <hr class = "titulos">
           <?php
                $sinContenido =null;
                echo empty($sinContenido);
                echo "<br>";
                echo "La funcion empty funciona igual que un booleano, es decir, 1 es true y nada es false, en este caso la variable está vacia";
           ?>
        </div>


        <div class="ejercicios"> 
           <h2>Ejercicio 8.</h2>
           <hr class = "titulos">
           <?php
                $enteroFrase = intval($frase);
                echo $enteroFrase;
                echo "<br>";
                echo "La función intval funciona para convertir un string en un entero, en este caso al intentar convertir un string en int se obtiene un error y devuelve 0.";
                
           ?>
        </div>


        <div class="ejercicios"> 
           <h2>Ejercicio 9.</h2>
           <hr class = "titulos">
                <h3>Apartado a.</h3>
                <hr class = "apartados">
                    <?php
                    
                    $raiz = sqrt(144);
                    echo "La raíz cuadrada de 144: " . $raiz;
                        
                    ?>

                <h3>Apartado b.</h3>
                <hr class = "apartados">
                <?php
                        $potencia = pow(2,8);
                        echo "Potencia de 2 elevado a 8: " . $potencia;
                   
                    ?>

                <h3>Apartado c.</h3>
                <hr class = "apartados">
                <?php
                        
                        $modulo = (100%6);
                        echo "Modulo de 100/6: " . $modulo;
                    
                    ?>

                <h3>Apartado d.</h3>
                <hr class = "apartados">
                <?php 
                    function MCD($num1, $num2){ //Función recursiva. Euclides.
                        if ($num1 == 0) {
                            return $num2;
                        }
                        return MCD($num2%$num1, $num1);
                
                    }
                
                    echo "Maximo común divisor de " . MCD(3,6);

                    
                    ?>
        </div>

       



    </main>
    


    <footer>

    </footer>

    

</body>
</html>