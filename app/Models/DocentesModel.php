<?php

namespace App\Models;

use CodeIgniter\Model;

class DocentesModel extends Model
{
    protected $table      = 'docentes';
    protected $primaryKey = 'iddocente';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'apellidos', 'DNI', 'celular'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}