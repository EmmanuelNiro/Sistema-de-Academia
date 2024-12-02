<?php

namespace App\Controllers;

use App\Models\SoftwareM;
use App\Models\ManualesM;
use App\Models\VideosM;
use App\Models\MateriasM;

class Front extends BaseController
{
    public function frontSoftware()
    {
        $softwareModel = model('SoftwareM');
        $data['software'] = $softwareModel->findAll();
        return view('head') .
               view('menu') . 
               view('front/software', $data) .  // Cargar la vista correcta para software
               view('footer');
    }

    public function frontManuales()
    {
        $manualesModel = model('ManualesM');
        $data['manuales'] = $manualesModel->findAll();
        return view('head') .
               view('menu') . 
               view('front/manuales', $data) .  // Cargar la vista correcta para manuales
               view('footer');
    }

    public function frontVideos()
    {
        $videosModel = model('VideosM');
        $data['videos'] = $videosModel->findAll();
        return view('head') .
               view('menu') . 
               view('front/videos', $data) .  // Cargar la vista correcta para videos
               view('footer');
    }

    public function frontMaterias()
    {
        $materiasModel = model('MateriasM');
        $data['materias'] = $materiasModel->findAll();
        return view('head') .
               view('menu') . 
               view('front/materias', $data) .  // Cargar la vista correcta para materias
               view('footer');
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
}
