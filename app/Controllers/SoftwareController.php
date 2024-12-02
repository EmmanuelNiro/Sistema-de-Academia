<?php

namespace App\Controllers;

use App\Models\SoftwareM;

class SoftwareController extends BaseController
{
    public function __construct()
    {
        // No aplicar la verificación de sesión al constructor
    }

    private function checkSession()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('/usuario'))->send();
        }
    }

    public function index(): string
    {
        // Verificación de sesión
        $this->checkSession();
       
        $softwareModel = model('SoftwareM');
        $data['software'] = $softwareModel->findAll();
        return view('head') .
               view('menu') . 
               view('software/show', $data) .
               view('footer');
    }

    public function add()
    {
        // Verificación de sesión
        $this->checkSession();
        
        return view('head').
               view('menu').
               view('software/add').
               view('footer');
    }

    public function edit($idSoftware)
    {
        // Verificación de sesión
        $this->checkSession();
       
        $idSoftware = $data['idSoftware'] = $idSoftware;
        $softwareModel = model('SoftwareM');
        $data['software'] = $softwareModel->where('idSoftware', $idSoftware)->findAll();
        return view('head').
               view('menu').
               view('software/edit', $data).
               view('footer');
    }

    public function update()
    {
        // Verificación de sesión
        $this->checkSession();
        
        $softwareModel = model('SoftwareM');
        $idSoftware = $_POST['idSoftware'];
        $data = [
            'nombre' => $_POST['nombre'],
            'version' => $_POST['version'],
            'desarrolladora' => $_POST['desarrolladora']
        ];

        $softwareModel->set($data)->where('idSoftware', $idSoftware)->update();
        return redirect()->to(base_url('/software'));
    }

    public function insert()
    {
        // Verificación de sesión
        $this->checkSession();
        
        if (!$this->request->is('post')) {
            $this->index();
        }
        
        $rules = [
            'nombre' => 'required',
            'version' => 'required',
            'desarrolladora' => 'required'
        ];
        
        $data = [
            'nombre' => $_POST['nombre'],
            'version' => $_POST['version'],
            'desarrolladora' => $_POST['desarrolladora']
        ];

        if (!$this->validate($rules)) {
            // Si la validación falla, vuelve a cargar la vista con los errores
            return view('head') .
                   view('menu') . 
                   view('software/add', [
                       'validation' => $this->validator
                   ]).
                   view('footer');
        } else {
            $softwareModel = model('SoftwareM');
            $softwareModel->insert($data);
            return redirect()->to(base_url('/software'));
        }
    }

    public function delete($idSoftware)
    {
        // Verificación de sesión
        $this->checkSession();
        
        $softwareModel = model('SoftwareM');
        $softwareModel->delete($idSoftware);
        return redirect()->to(base_url('/software'));
    }
}
