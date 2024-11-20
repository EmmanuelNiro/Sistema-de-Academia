<?php

namespace App\Controllers;

use App\Models\MateriasM;

class MateriasController extends BaseController
{

    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];
      
    public function valida(){
        $session = session();
        $session->has('logged_in');
        
            if($session->has('logged_in')){
                return redirect()->to(base_url('/usuario'));
                
            }
        
        print_r($_SESSION);
    
        }


        public function index():string
        {
           
        $materiasModel = model('MateriasM');
        $data['materias'] = $materiasModel->findAll();
        return view('head') .
                view('menu', $data) . 
                view('materias/show', $data) .
                view('footer');
    }

    public function add(){   //get
        return view('head') .
        view('menu') . 
        view('materias/add') .
        view('footer');
    }

    public function edit($idMateria){   //get
       
       $idMateria =$data['idMateria'] = $idMateria;
       $materiasModel = model ('MateriasM');
       $data['materias'] = $materiasModel -> where ('idMateria',$idMateria) -> findAll();
        return 
        view('head') .
        view('menu') . 
        view('materias/edit',$data) .
        view('footer');

       
    }

    public function update(){
        $materiasModel = model('MateriasM');
        $idMateria = $_POST['idMateria'];
        $data = [
            
            'nombre' => $_POST['nombre'],
            'planEstudios' => $_POST['planEstudios'],
           

        ];

            $materiasModel -> set ($data)->where('idMateria', $idMateria) -> update ();
        return redirect () -> to (base_url('/materias'));
   
    }


    public function insert(){ //post
       echo 'Rellene los campos solicitados';

        if (! $this -> request -> is('post')){
            $this->index();
        }

        $rules = [
            'nombre' => 'required',

            "planEstudios" => 'required'
        ];

        $data = [
    
          "nombre" => $_POST['nombre'],
          
          "planEstudios" => $_POST['planEstudios']
        ] ;

       /* $materiasModel = model('MateriasM');
        $materiasModel->insert($data);
        return redirect()->to(base_url('/materias'));*/


        if (! $this -> validate($rules)){

            return
            view ('head').
            view('menu') . 
                view('materias/add',[
                    'validation' => $this->validator
                ]) .
                view('footer'); 

        }
        else{
            $materiasModel = model('MateriasM');
            $materiasModel->insert($data);
            return redirect()->to(base_url('/materias'));
        }

    }


    public function delete($idMateria){
       

        $materiasModel = model('MateriasM');
        $materiasModel->delete($idMateria);
        return redirect()->to(base_url('/materias'));
    }

}