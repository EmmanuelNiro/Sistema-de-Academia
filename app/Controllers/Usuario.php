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
            return redirect()->to(base_url('/menu'));
        }else {
            $session->destroy();
            return redirect()->to(base_url('/usuario')
        );
        }
        }

        public function salir(){
            $array_items = ['correo', 'pass','logged_in' ];
            $session = session();
            $session -> remove($array_items);

            return redirect()->to(base_url('/usuario'));
        }

        public function perfil(){
            return view('head').
                    view('usuario/perfil').
                    view('footer');
        }

        public function registrarUsuario(){
            $validation = \Config\Services::validation();

            $validation->setRules([
                'correo'  => 
                'required|valid_email|is_unique[
                usuario.correo]',
                'pass' => 'required|min_lenght[6]',
            ]);

                
            if (!$validation->withRequest($this->request)->run()) {
                // Si la validación falla, recargar la vista con errores
                return view('head') . 
                view('usuario/perfil', ['validation' => $validation]) . 
                view('footer');
            } else { 

                $usuarioM = model('UsuarioM');
            $data = [
                'correo'     => $this->request->getPost('correo'),
                'pass'  => password_hash($this->request->getPost('pass'), PASSWORD_BCRYPT),
                'tipo'      => 2, // Asigna automáticamente el tipo 2 (cliente)
            ];

            $usuarioM->insert($data);

            return redirect()->to(base_url('/topMenu'));
        }
        }

        public function registroExitoso(){
            return
            view('head').
            view('/topMenu').
            view('footer');

        }

    }
