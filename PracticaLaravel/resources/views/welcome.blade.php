<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--jquery-->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
            }

            #boton {
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            #boton:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body class="antialiased">


        <button id="boton">Dame Array</button>

        <script>
            $(document).ready(function () {
                $('#boton').click(function () {
                    // Realizar la petición AJAX
                    $.ajax({
                        url: 'http://127.0.0.1:8000/dameAnimales',
                        type: 'get',
                        dataType: 'json',
                        data: {
                            _token: '{{ csrf_token() }}'
                            // Puedes agregar más datos según tus necesidades
                        },
                        success: function (response) {
                            alert(response.mensaje);
                            alert(response.datos);
                            // Manejar la respuesta del servidor
                        },
                        error: function (error) {
                            console.log(error);
                            // Manejar el error
                        }
                    });
                });
            });
        </script>
    </body>
</html>
