<?php

namespace App\Controllers;

use App\Models\UsuarioM;

class Usuario extends BaseController
{
    public function index()
    {
        return view('head') .
            view('usuario/login') .
            view('footer');
    }

    public function acceder()
    {
        $correo = $this->request->getPost('correo');
        $pass = $this->request->getPost('pass');

        $usuario = model('UsuarioM');
        $session = session();

        // Busca al usuario por su correo
        $result = $usuario->where('correo', $correo)->first();
        if ($result) {
            // Verifica la contraseña
            if (password_verify($pass, $result->pass)) {
                // Configura los datos de la sesión
                $newdata = [
                    'idUsuario' => $result->idUsuario,
                    'correo'    => $result->correo,  // Almacena el correo en la sesión
                    'nombre'    => $result->nombre,
                    'apellidos' => $result->apellidos,
                    'tipo'      => $result->tipo,
                    'logged_in' => TRUE,
                ];

                $session->set($newdata);
                
                // Redirigir según el tipo de usuario
                if ($result->tipo == ('docente')) {
                    return redirect()->to(base_url('/classmate')); // Redirigir a vista "classmate" para docentes
                } else {
                    return redirect()->to(base_url('/alumnos')); // Redirigir a vista "alumnos" para alumnos
                }
            } else {
                // Contraseña incorrecta
                $session->setFlashdata('error', 'Contraseña incorrecta');
                return redirect()->back();
            }
        } else {
            // Correo no encontrado
            $session->setFlashdata('error', 'Correo no encontrado');
            return redirect()->back();
        }
    }

    public function salir()
    {
        $session = session();
        $session->destroy();

        $this->response->setHeader('Cache-Control', 'no-cache, no-store, must-revalidate');
        $this->response->setHeader('Pragma', 'no-cache');
        $this->response->setHeader('Expires', '0');

        return redirect()->to(base_url('/usuario'));
    }

    public function perfil()
    {
        return view('head') .
            view('usuario/perfil') .
            view('footer');
    }

    public function registrarUsuario()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'correo'  => 'required|valid_email|is_unique[usuario.correo]',
            'pass' => 'required|min_length[8]',
            'nombre' => 'required',
            'apellidos' => 'required'
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
                'nombre'     => $this->request->getPost('nombre'),
                'apellidos'  => $this->request->getPost('apellidos'),
                'pass'       => password_hash($this->request->getPost('pass'), PASSWORD_BCRYPT),
                'tipo'       => $this->request->getPost('tipo'), // Obtener el tipo de usuario del formulario
            ];

            $usuarioM->insert($data);

            // Redirigir según el tipo de usuario
            if ($data['tipo'] == 1) {
                return redirect()->to(base_url('/classmate')); // Redirigir a vista de éxito para docentes
            } else {
                return redirect()->to(base_url('/alumnos')); // Redirigir a vista de éxito para alumnos
            }
        }
    }

    public function registroExitosoDocente()
    {
        return view('head') .
            view('/classmate') .
            view('footer');
    }

    public function registroExitosoAlumno()
    {
        return view('head') .
            view('/alumnos') .
            view('footer');
    }
}
