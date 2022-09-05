<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index($nombre, $edad)
    {
        $datos = [
            'nombre' => $nombre,
            'apellidos' => "PIMENTEL ZEGARRA",
            'edad' => $edad
        ];
        return view('frontend/admin/admin',$datos);
    }
}
