<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function __construct()
    {

    }

    public function index()
    {
        //return view('frontend/admin/admin');
        echo view('frontend/admin/cabecera');
        echo view('frontend/admin/fondo');
        echo view('frontend/admin/pie');
    }

}