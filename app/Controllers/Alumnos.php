<?php

namespace App\Controllers;

use App\Models\AlumnosModel;

class Alumnos extends BaseController
{
    protected $modelalumnos;

    public function __construct(){
		$this->modelalumnos = new AlumnosModel();
    }

    public function index()
    {
        $resultado = $this->modelalumnos->findAll();
        $datos = [
            'titulo' => "Tabla Alumnos",
            'datos' => $resultado
        ];
        return view('alumnos/lista',$datos);
    }

    public function nuevo(){
        $datos = [
            'titulo' => "Alumnos - Nuevo"
        ];
        return view('alumnos/nuevo',$datos);
    }

    public function guardar(){
        $valores = [
            'nombre' => $this->request->getpost('nombre'),
            'apellidos' => $this->request->getpost('apellidos'),
            'DNI' => $this->request->getpost('DNI'),
            'celular' => $this->request->getpost('celular')
        ];
        $this->modelalumnos->insert($valores);
        return redirect()->to("http://localhost/sistema2022/public/alumnos");
    }

    public function editar($id){
        $resultado = $this->modelalumnos->where('idalumno',$id)->first();
        $datos = [
            'titulo' => "Editar Alumno",
            'datos' => $resultado
        ];
        return view('alumnos/editar',$datos);
    }

    public function actualizar(){
        $id = $this->request->getpost('idalumno');
        $valores = [
            'nombre' => $this->request->getpost('nombre'),
            'apellidos' => $this->request->getpost('apellidos'),
            'DNI' => $this->request->getpost('DNI'),
            'celular' => $this->request->getpost('celular')
        ];
        $this->modelalumnos->update($id,$valores);
        return redirect()->to("http://localhost/sistema2022/public/alumnos");
    }
}