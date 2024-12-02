<?php

namespace App\Controllers;

class Alumnos extends BaseController
{
    public function index() {
        echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pantalla Principal</title>
            <link rel="stylesheet" href="' . base_url('admin.css') . '">
        </head>
        <body>
            <div class="logo-container">
                <img src="' . base_url('classmate.png') . '" alt="">
                
            </div>
            <div class="container">
                <div class="menu-box">
                    <h1>Bienvenido</h1>
                    <h2>¿Qué desea hoy?</h2>
                    <a href="' . base_url('/front/Materias') . '" class="menu-option">Ver Materias</a>
                    <a href="' . base_url('/front/Videos') . '" class="menu-option">Ver Videos</a>
                    <a href="' . base_url('/front/Software') . '" class="menu-option">Ver Software</a>
                    <a href="' . base_url('/front/Manuales') . '" class="menu-option">Ver Manuales</a>
                    <a href="' . base_url('/usuario/salir') . '" class="logout-button">Cerrar sesión</a>
                </div>
            </div>
        </body>
        </html>
        ';
    }
}
?>