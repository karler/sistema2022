<?php

namespace App\Controllers;

use App\Models\AlumnosModel;

class Alumnos extends BaseController
{
    protected $modelalumnos;

    public function __construct(){
		$this->modelalumnos = new AlumnosModel();
    }

    public function index($activo=1)
    {
        $resultado = $this->modelalumnos->where('activo',$activo)->findAll();
        $datos = [
            'titulo' => "Tabla Alumnos",
            'datos' => $resultado
        ];
        echo view('frontend/admin/cabecera');
        echo view('alumnos/lista',$datos);
        echo view('frontend/admin/pie');
    }

    public function nuevo(){
        $datos = [
            'titulo' => "Nuevo Alumno"
        ];
        echo view('frontend/admin/cabecera');
        echo view('alumnos/nuevo',$datos);
        echo view('frontend/admin/pie');
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
        echo view('frontend/admin/cabecera');
        echo view('alumnos/editar',$datos);
        echo view('frontend/admin/pie');
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

    public function eliminar($id){
        $valores = [
            'activo' => 0
        ];
        $this->modelalumnos->update($id,$valores);
        return redirect()->to("http://localhost/sistema2022/public/alumnos");
    }

    public function eliminados($activo=0)
    {
        $resultado = $this->modelalumnos->where('activo',$activo)->findAll();
        $datos = [
            'titulo' => "Alumnos Eliminados",
            'datos' => $resultado
        ];
        echo view('frontend/admin/cabecera');
        echo view('alumnos/eliminados',$datos);
        echo view('frontend/admin/pie');
    }

    public function restaurar($id){
        $valores = [
            'activo' => 1
        ];
        $this->modelalumnos->update($id,$valores);
        return redirect()->to("http://localhost/sistema2022/public/alumnos/eliminados");
    }
}