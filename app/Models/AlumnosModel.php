<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnosModel extends Model
{
    protected $table      = 'alumnos';
    protected $primaryKey = 'idalumno';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'apellidos','DNI', 'celular'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}