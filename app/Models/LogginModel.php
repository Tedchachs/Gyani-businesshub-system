<?php

namespace App\Models;

use CodeIgniter\Model;

class LogginModel extends Model
{
    protected $table = 'logyan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email','user_name','first_name','last_name','password','company','updatedAt','createdAt','deletedAt']

    

}