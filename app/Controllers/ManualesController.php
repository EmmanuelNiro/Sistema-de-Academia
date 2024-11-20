<?php

namespace App\Controllers;

use App\Models\ManualesM;

class MateriasController extends BaseController
{

   
      
    /*public function valida(){
        $session = session();
        $session->has('logged_in');
        
            if($session->has('logged_in')){
                return redirect()->to(base_url('/usuario'));
                
            }
        
        print_r($_SESSION);
    
        }

        public $csrfProtection = 'session';
        public $tokenRandomize = true;
        protected $helpers = ['form'];

        */
        public function index():string
        {
           
        $manualesModel = model('ManualesM');
        $data['manuales'] = $manualesModel->findAll();
        return view('head') .
                view('menu', $data) . 
                view('manuales/show', $data) .
                view('footer');
    }

    public function add(){   //get
        return view('head') .
        view('menu') . 
        view('manuales/add') .
        view('footer');
    }

    public function edit($idManuales){   //get
       
       $idManuales =$data['idManuales'] = $idManuales;
       $manualesModel = model ('ManualesM');
       $data['manuales'] = $manualesModel -> where ('idManuales',$idManuales) -> findAll();
        return 
        view('head') .
        view('menu') . 
        view('manuales/edit',$data) .
        view('footer');

       
    }

    public function update(){
        $manualesModel = model('ManualesM');
        $idManuales = $_POST['idManuales'];
        $data = [
            
            'titulo' => $_POST['titulo'],
            'paginas' => $_POST['paginas'],
           

        ];

            $manualesModel -> set ($data)->where('idManuales', $idManuales) -> update ();
        return redirect () -> to (base_url('/manuales'));
   
    }


    public function insert(){ //post
       echo 'Rellene los campos solicitados';

        if (! $this -> request -> is('post')){
            $this->index();
        }

        $rules = [
            'titulo' => 'required',

            "Autor" => 'required'
        ];

        $data = [
    
          "nombre" => $_POST['nombre'],
          
          "planEstudios" => $_POST['planEstudios']
        ] ;

       /* $manualesModel = model('ManualesM');
        $manualesModel->insert($data);
        return redirect()->to(base_url('/manuales'));*/


        if (! $this -> validate($rules)){

            return
            view ('head').
            view('menu') . 
                view('manuales/add',[
                    'validation' => $this->validator
                ]) .
                view('footer'); 

        }
        else{
            $manualesModel = model('ManualesM');
            $manualesModel->insert($data);
            return redirect()->to(base_url('/manuales'));
        }

    }


    public function delete($idManuales){
       

        $manualesModel = model('ManualesM');
        $manualesModel->delete($idManuales);
        return redirect()->to(base_url('/manuales'));
    }

}