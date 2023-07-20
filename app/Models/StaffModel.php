<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'stafgyan';
    protected $primaryKey = 'id';

    protected $allowedFields = ['user_name','email','password'];

    protected $useTimestamps = true;
    protected $createdField  = 'createdAt';
    protected $updatedField  = 'updatedAt';
    protected $deletedField  = 'deletedAt';

    protected $validationRules    = [];
    protected $validationMessages = [];

}