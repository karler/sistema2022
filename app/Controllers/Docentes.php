<?php

namespace App\Controllers;

use App\Models\DocentesModel;

class Docentes extends BaseController
{
    protected $modeldocentes;

    public function __construct(){
		$this->modeldocentes = new DocentesModel();
    }

    public function index($activo=1)
    {
        $resultado = $this->modeldocentes->where('activo',$activo)->findAll();
        $datos = [
            'titulo' => "Tabla Docentes",
            'datos' => $resultado
        ];
        echo view('frontend/admin/cabecera');
        echo view('docentes/lista',$datos);
        echo view('frontend/admin/pie');
    }

    public function nuevo(){
        $datos = [
            'titulo' => "Nuevo Docente"
        ];
        echo view('frontend/admin/cabecera');
        echo view('docentes/nuevo',$datos);
        echo view('frontend/admin/pie');
    }

    public function guardar(){
        $valores = [
            'nombre' => $this->request->getpost('nombre'),
            'apellidos' => $this->request->getpost('apellidos'),
            'DNI' => $this->request->getpost('DNI'),
            'celular' => $this->request->getpost('celular')
        ];
        $this->modeldocentes->insert($valores);
        return redirect()->to("http://localhost/sistema2022/public/Docentes");
    }

    public function editar($id){
        $resultado = $this->modeldocentes->where('iddocente',$id)->first();
        $datos = [
            'titulo' => "Editar Docentes",
            'datos' => $resultado
        ];
        echo view('frontend/admin/cabecera');
        echo view('docentes/editar',$datos);
        echo view('frontend/admin/pie');
    }

    public function actualizar(){
        $id = $this->request->getpost('iddocente');
        $valores = [
            'nombre' => $this->request->getpost('nombre'),
            'apellidos' => $this->request->getpost('apellidos'),
            'DNI' => $this->request->getpost('DNI'),
            'celular' => $this->request->getpost('celular')
        ];
        $this->modeldocentes->update($id,$valores);
        return redirect()->to("http://localhost/sistema2022/public/Docentes");
    }

    public function eliminar($id){
        $valores = [
            'activo' => 0
        ];
        $this->modeldocentes->update($id,$valores);
        return redirect()->to("http://localhost/sistema2022/public/Docentes");
    }

    public function eliminados($activo=0)
    {
        $resultado = $this->modeldocentes->where('activo',$activo)->findAll();
        $datos = [
            'titulo' => "Docentes Eliminados",
            'datos' => $resultado
        ];
        echo view('frontend/admin/cabecera');
        echo view('docentes/eliminados',$datos);
        echo view('frontend/admin/pie');
    }

    public function restaurar($id){
        $valores = [
            'activo' => 1
        ];
        $this->modeldocentes->update($id,$valores);
        return redirect()->to("http://localhost/sistema2022/public/docentes/eliminados");
    }
}