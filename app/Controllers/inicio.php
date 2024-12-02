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
    <title>Pantalla de Bienvenida</title>
    <link rel="stylesheet" href="inicio.css">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="classmate.png">
         
        </div>
        <div class="welcome-container">
            <h1 class="welcome-text">Bienvenido</h1>
            <div class="button-container">
                <a href="/usuario" class="button">
                    
                    <p>Estudiante</p>
                </a>
                <a href="/usuario" class="button">
                   
                    <p>Docente</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>


        ';
    }
    
    // Llamar a la función para renderizar la página de inicio
}
    ?>
    
  
