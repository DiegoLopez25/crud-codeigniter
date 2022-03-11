<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class ClienteController extends BaseController
{
    public function index()
    {
        $model = model(ClienteModel::class);

        $opcion = $this->request->getVar('opciones') ?? '';
        $buscar = $this->request->getVar('buscar') ?? '';



        if (!empty($opcion) && !empty($buscar)) {

            $clientes = $model->select('id, nombre, apellido, email','dui')
                ->where([$opcion => $buscar])
                ->paginate(10);

            $data = [
                'clientes' => $clientes,
                'pager' => $model->pager,
                'title' => 'cliente',
            ];
    
            return view('cliente/index', $data);

        } else {

            $clientes = $model->paginate(10);
            $data = [
                'clientes' => $clientes,
                'pager' => $model->pager,
                'title' => 'cliente'
            ];
            return view('cliente/index', $data);
        }
    }

    public function create(){  
        return view('cliente/add');
   
    }
    public function guardar() {

        $cliente = model(ClienteModel::class);

        $nombre = $this->request->getPost('nombre');
        $apellido = $this->request->getPost('apellido');
        $email = $this->request->getPost('email');
        $dui = $this->request->getPost('dui');

        $datos = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'dui' => $dui,
        ];

        if ($cliente->save($datos) === false) {
            return view('cliente/add', ['errores' => $cliente->errors()]);
        } else {
            return redirect()->to('/cliente/add')->with('mensaje', 'Datos guardados');
        }

    }

    public function edit($id) {

        $cliente = model(ClienteModel::class);
        $datos = $cliente->find($id);

        return view('cliente/edit', ['cliente' => $datos]);

    }

    public function update($id) {

        $cliente = model(ClienteModel::class);

        $nombre = $this->request->getPost('nombre');
        $apellido = $this->request->getPost('apellido');
        $email = $this->request->getPost('email');
        $dui = $this->request->getPost('dui');

        $datos = [
            'id' => $id,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'dui' => $dui,
        ];

        if ($cliente->update($id, $datos) === false) {
            return view('contactos/editar', ['errores' => $cliente->errors(), 'cliente' => $datos]);
        } else {
            return redirect()->to('/cliente')->with('mensaje', 'Datos actualizados');
        }

    }

    public function delete($id) {

        $cliente = model(ClienteModel::class);
        $datos = $cliente->delete($id);

        return redirect()->to('/cliente')->with('mensaje', 'Datos eliminados');

    }
}
