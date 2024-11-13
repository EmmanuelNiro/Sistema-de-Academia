<?php
namespace App\Controllers;

use CodeIgniter\Controller;
$correo = $this->request->getPost('correo');
$pass = $this->request->getPost();
class loginController extends BaseController{


    public function contruct(){
        helper(['url', 'form']);
    }

   public function index(){
    return  view('head').

     view('usuario/acceder').
     view('footer');
   }

   public function acceder(){
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    $usuarioM = model('UsuarioM');
    $session = session();

    $result = $usuarioM->valida($correo,$pass);
    if(count($result)>0){

        $newdata = [
            'nombre'  => $result[0]->nombre,
            'tipo'     => $result[0]->tipo,

            'logged_in' => TRUE,
        ];

        $session->set($newdata);
        return redirect()->to(base_url('/docente'));

    }

    else{
        $session->destroy();
        return redirect()->to(base_url('/usuario'));

    }
}

public function salir (){
    $array_items = ['nombre','logged_in'];
    $session = session();
    $session -> remove ($array_items);

    return redirect()->to(base_url('/usuario'));

}
}
?>