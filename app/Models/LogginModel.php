<?php

namespace App\Models;

use CodeIgniter\Model;

class LogginModel extends Model
{
    protected $table = 'logyan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email','user_name','first_name','last_name','password','company','experience','designation','updatedAt','createdAt','deletedAt'];

    protected $useTimestamps = true;
    protected $createdField  = 'createdAt';
    protected $updatedField  = 'updatedAt';
    protected $deletedField  = 'deletedAt';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



}