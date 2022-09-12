<?php

namespace App\Controllers;

use App\Models\AlumnosModel;

class Inicio extends BaseController
{
    protected $modelalumnos;

    public function __construct(){
		$this->modelalumnos = new AlumnosModel();
    }

    public function index($nombre = "", $edad = 0)
    {
        $datos = [
            'nombre' => $nombre,
            'apellidos' => "PIMENTEL ZEGARRA",
            'edad' => $edad
        ];
        return view('frontend/admin/admin',$datos);
    }

}
