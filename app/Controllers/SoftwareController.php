<?php

namespace App\Controllers;

use App\Models\SoftwareM;

class SoftwareController extends BaseController
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

    public function index(): string
    {
       
        $softwareModel = model('SoftwareM');

        $data['software'] = $softwareModel->findAll();
        return view('head') .
                view('menu') . 
                view('software/show', $data) .
                view('footer');

    }

    public function add(){
        return view ('head').
        view('menu').
        view('software/add').
        view('footer');

    }



    public function edit($idSoftware){ 
       
        $idSoftware = $data ['idSoftware'] = $idSoftware;
        $softwareModel = model('SoftwareM');
        $data['software'] = $softwareModel -> where ('idSoftware',$idSoftware) -> findALL();
        return
        view('head').
        view('menu').
        view('software/edit', $data).
        view('footer');

       
    }


    public function update(){
        $softwareModel = model('SoftwareM');
        $idSoftware = $_POST['idSoftware'];
        $data = [
            
            'nombre' => $_POST['nombre'],
            'version' => $_POST['version']
        ];

        $softwareModel -> set ($data)->where('idSoftware', $idSoftware) -> update ();
        return redirect () -> to (base_url('/software'));
   
           
    }

    public function insert(){ //post
        
        
        if (! $this -> request ->is('post')){
            $this->index();
        
        }
        
        $rules = [
            'nombre' => 'required',

            'version' => 'required'
        ];
        
        
        $data = [
          
            "nombre" => $_POST['nombre'],
          
          "version" => $_POST['version']
        ] ;

     

        if (! $this -> validate($rules)){
             // Si la validación falla, vuelve a cargar la vista con los errores
             return     
             view('head') .
             view('menu') . 
             view('software/add',[
                    'validation' => $this->validator
             ]).
             view('footer');
        }
        else{

            $softwareModel = model ('SoftwareM');
            $softwareModel -> insert ($data);
            return redirect()->to(base_url('/software'));
        }


    }

    public function delete($idSoftware){
     
        
        $softwareModel = model('SoftwareM');
        $softwareModel->delete($idSoftware);
        return redirect()->to(base_url('/software'));
    }
}

