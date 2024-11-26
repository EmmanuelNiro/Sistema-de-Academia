<?php

namespace App\Controllers;

class inicio extends BaseController
{
   
    public function index() {
        echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pantalla de Inicio</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="inicio.css">
        </head>
        <body>
            <div class="container">
                <h1>Bienvenido</h1>
                <div>
                    <a href="/usuario" class="btn">Estudiante</a>
                    <a href="/usuario" class="btn">Docente</a>
                </div>
            </div>
        </body>
        </html>
        ';
    }
    
    // Llamar a la función para renderizar la página de inicio
}
    ?>
    


