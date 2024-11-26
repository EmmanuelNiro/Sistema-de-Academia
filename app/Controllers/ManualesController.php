<?php

namespace App\Controllers;

use App\Models\ManualesM;

class ManualesController extends BaseController
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

    public function edit($idManual){   //get
       
       $idManual =$data['idManual'] = $idManual;
       $manualesModel = model ('ManualesM');
       $data['manuales'] = $manualesModel -> where ('idManual',$idManual) -> findAll();
        return 
        view('head') .
        view('menu') . 
        view('manuales/edit',$data) .
        view('footer');

       
    }

    public function update(){
        $manualesModel = model('ManualesM');
        $idManual = $_POST['idManual'];
        $data = [
            
            'titulo' => $_POST['titulo'],
            'paginas' => $_POST['paginas'],
           

        ];

            $manualesModel -> set ($data)->where('idManual', $idManual) -> update ();
        return redirect () -> to (base_url('/manuales'));
   
    }


    public function insert(){ //post


        if (! $this -> request -> is('post')){
            $this->index();
        }

        $rules = [
            'titulo' => 'required',

            "paginas" => 'required'
        ];

        $data = [
    
          "titulo" => $_POST['titulo'],
          
          "paginas" => $_POST['paginas']
        ] ;

      


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


    public function delete($idManual){
       

        $manualesModel = model('ManualesM');
        $manualesModel->delete($idManual);
        return redirect()->to(base_url('/manuales'));
    }

}