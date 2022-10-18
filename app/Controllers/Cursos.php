<?php

namespace App\Controllers;

use App\Models\CursosModel;

class Cursos extends BaseController
{
    protected $modelcursos;

    public function __construct(){
		$this->modelcursos = new CursosModel();
    }

    public function index($activo=1)
    {
        $resultado = $this->modelcursos->where('activo',$activo)->findAll();
        $datos = [
            'titulo' => "Tabla Cursos",
            'datos' => $resultado
        ];
        echo view('frontend/admin/cabecera');
        echo view('cursos/lista',$datos);
        echo view('frontend/admin/pie');
    }

    public function nuevo(){
        $datos = [
            'titulo' => "Nuevo Curso"
        ];
        echo view('frontend/admin/cabecera');
        echo view('cursos/nuevo',$datos);
        echo view('frontend/admin/pie');
    }

    public function guardar(){
        $valores = [
            'idalumno' => $this->request->getpost('idalumno'),
            'iddocente' => $this->request->getpost('iddocente'),
            'curso' => $this->request->getpost('curso'),
            'creditos' => $this->request->getpost('creditos'),
            'notafinal' => $this->request->getpost('notafinal'),
        ];
        $this->modelcursos->insert($valores);
        return redirect()->to("http://localhost/sistema2022/public/cursos");
    }

    public function editar($id){
        $resultado = $this->modelcursos->where('idcurso',$id)->first();
        $datos = [
            'titulo' => "Editar Curso",
            'datos' => $resultado
        ];
        echo view('frontend/admin/cabecera');
        echo view('cursos/editar',$datos);
        echo view('frontend/admin/pie');
    }

    public function actualizar(){
        $id = $this->request->getpost('idcurso');
        $valores = [
            'idalumno' => $this->request->getpost('idalumno'),
            'iddocente' => $this->request->getpost('iddocente'),
            'curso' => $this->request->getpost('curso'),
            'creditos' => $this->request->getpost('creditos'),
            'notafinal' => $this->request->getpost('notafinal'),
        ];
        $this->modelcursos->update($id,$valores);
        return redirect()->to("http://localhost/sistema2022/public/cursos");
    }

    public function eliminar($id){
        $valores = [
            'activo' => 0
        ];
        $this->modelcursos->update($id,$valores);
        return redirect()->to("http://localhost/sistema2022/public/cursos");
    }

    public function eliminados($activo=0)
    {
        $resultado = $this->modelcursos->where('activo',$activo)->findAll();
        $datos = [
            'titulo' => "Tabla Cursos Eliminados",
            'datos' => $resultado
        ];
        echo view('frontend/admin/cabecera');
        echo view('cursos/eliminados',$datos);
        echo view('frontend/admin/pie');
    }

    public function restaurar($id){
        $valores = [
            'activo' => 1
        ];
        $this->modelcursos->update($id,$valores);
        return redirect()->to("http://localhost/sistema2022/public/cursos/eliminados");
    }
}