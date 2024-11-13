<?php

namespace App\Controllers;

use App\Models\SoftwareM;

class DocenteController extends BaseController
{

    public $csrfProtection = 'session';
    public $tokenRandomize = true;
    protected $helpers = ['form'];


    
    public function index(): string
    {
        $docenteModel = model('DocenteM');

        $data['docente'] = $docenteModel->findAll();
        return view('head') .
                view('menu') . 
                view('docente/show', $data) .
                view('footer');

    }

    public function add(){
        return view ('head').
        view('menu').
        view('docente/add').
        view('footer');

    }



    public function edit($idDocente){ 
       
        $idDocente = $data ['idDocente'] = $idDocente;
        $docenteModel = model('DocenteM');
        $data ['docente'] = $docenteModel -> where ('idDocente',$idDocente) -> findALL();
        return
        view('head').
        view('menu').
        view('docente/edit', $data).
        view('footer');

       
    }


    public function update(){
        $docenteModel = model('DocenteM');
        $idDocente = $_POST['idDocente'];
        $data = [
            
            'nombre' => $_POST['nombre'],
            'aMaterno' => $_POST['aMaterno'],
            'aPaterno' => $_POST['aPaterno'],
            'correo' => $_POST['correo'],
         
        ];

        $docenteModel -> set ($data)->where('idDocente', $idDocente) -> update ();
        return redirect () -> to (base_url('/docente'));
   
           
    }

    public function insert(){ //post
       echo 'Rellene los campos solicitados';
       
        if (! $this -> request -> is('post')){
            $this->index();
        }

        $rules = [

            'nombre' => 'requerid',
            'aMaterno' => 'requerid',
            'aPaterno' => 'requerid',
            'correo' => 'requerid'

        ];
       
        $data = [
            
            'nombre' => $_POST['nombre'],
            'aMaterno' => $_POST['aMaterno'],
            'aPaterno' => $_POST['aPaterno'],
            'correo' => $_POST['correo'],
            

        ] ;

        /*
        
        */
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
                $docenteModel = model('DocenteM');
                $docenteModel->insert($data);
        return redirect()->to(base_url('/docente'));
            }

    }

    public function delete($idDocente){
     
        
        $docenteModel = model('DocenteM');
        $docenteModel->delete($idDocente);
        return redirect()->to(base_url('/docente'));
    }
}

