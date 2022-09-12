<?php

namespace App\Controllers;

use App\Models\DocentesModel;

class Docentes extends BaseController
{
    protected $modeldocentes;

    public function __construct(){
		$this->modeldocentes = new DocentesModel();
    }

    public function index()
    {
        $resultado = $this->modeldocentes->findAll();
        $datos = [
            'titulo' => "Tabla Docentes",
            'datos' => $resultado
        ];
        return view('docentes/lista',$datos);
    }
}