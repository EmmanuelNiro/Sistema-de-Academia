<?php

namespace App\Controllers;

class Usuario extends BaseController{

    public function index(){
        return view ('head').
               view('usuario/login').
               view('footer');
    }

    public function acceder(){
        $correo = $_POST['correo'];
        $password = $_POST['pass'];

        $usuarioM = model ('UsuarioM');
        $session = session ();

        $result = $usuarioM->valida($correo, $password);
        if (count($result)> 0 ){
            $newdata = [
                'correo' => $result [0]->email,
                'logged_in' => TRUE,
            ];

            $session->set($newdata);
            return redirect()-to(bose_url('/menu'));
        }else{
            


        }
        }

    }
