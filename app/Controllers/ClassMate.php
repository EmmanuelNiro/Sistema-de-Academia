<?php

namespace App\Controllers;

class ClassMate extends BaseController
{
    public function index() {
        echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pantalla Principal del Administrador</title>
            <link rel="stylesheet" href="' . base_url('admin.css') . '">
        </head>
        <body>
            <div class="logo-container">
                <img src="' . base_url('classmate.png') . '" alt="">
                
            </div>
            <div class="container">
                <div class="menu-box">
                    <h1>Bienvenido, Administrador</h1>
                    <h2>¿Qué desea hoy?</h2>
                    <a href="' . base_url('/materias') . '" class="menu-option">Editar Materias</a>
                    <a href="' . base_url('/videos') . '" class="menu-option">Editar Videos</a>
                    <a href="' . base_url('/software') . '" class="menu-option">Editar Software</a>
                    <a href="' . base_url('/manuales') . '" class="menu-option">Editar Manuales</a>
                    <a href="' . base_url('/usuario/salir') . '" class="logout-button">Cerrar sesión</a>
                </div>
            </div>
        </body>
        </html>
        ';
    }
}
?>