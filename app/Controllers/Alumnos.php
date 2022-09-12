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
}