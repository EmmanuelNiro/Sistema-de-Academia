<?php

namespace App\Controllers;

use App\Models\VideosM;

class VideosController extends BaseController
{
    public function index(): string
    {
        $videosModel = model('VideosM');
        $data['videos'] = $videosModel->findAll();
        return view('head') .
                view('menu', $data) . 
                view('videos/show', $data) .
                view('footer');
    }

    public function add()
    {
        return view('head') .
        view('menu') . 
        view('videos/add') .
        view('footer');
    }

    public function edit($idVideo)
    {
       $idVideo = $data['idVideo'] = $idVideo;
       $videosModel = model('VideosM');
       $data['videos'] = $videosModel->where('idVideo', $idVideo)->findAll();
        return view('head') .
               view('menu') . 
               view('videos/edit', $data) .
               view('footer');
    }

    public function update()
    {
        $videosModel = model('VideosM');
        $idVideo = $this->request->getPost('idVideo');
        $data = [
            'titulo' => $this->request->getPost('titulo'),
            'duracion' => $this->request->getPost('duracion'),
            'descripcion' => $this->request->getPost('descripcion')
        ];

        // Manejo de archivo de video
        $file = $this->request->getFile('archivo_video');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);
            $data['archivo_video'] = $newName;
        }

        $videosModel->set($data)->where('idVideo', $idVideo)->update();
        return redirect()->to(base_url('/videos'));
    }

    public function insert()
    {
        if (!$this->request->is('post')) {
            return $this->index();
        }

        $rules = [
            'titulo' => 'required',
            'duracion' => 'required|numeric',
            'descripcion' => 'required',
            'archivo_video' => 'uploaded[archivo_video]|max_size[archivo_video,10240]|ext_in[archivo_video,mp4,wav]'
        ];

        if (!$this->validate($rules)) {
            return view('head') .
                   view('menu') . 
                   view('videos/add', [
                       'validation' => $this->validator
                   ]) .
                   view('footer'); 
        }

        $videosModel = model('VideosM');
        $file = $this->request->getFile('archivo_video');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);

            $data = [
                'titulo' => $this->request->getPost('titulo'),
                'duracion' => $this->request->getPost('duracion'),
                'descripcion' => $this->request->getPost('descripcion'),
                'archivo_video' => $newName,
            ];

            $videosModel->insert($data);
            return redirect()->to(base_url('/videos'));
        } else {
            return view('head') .
                   view('menu') .
                   view('videos/add', [
                       'validation' => $this->validator,
                       'error' => 'Error al subir el archivo.'
                   ]) .
                   view('footer');
        }
    }

    public function delete($idVideo)
    {
        $videosModel = model('VideosM');
        $videosModel->delete($idVideo);
        return redirect()->to(base_url('/videos'));
    }
}
?>