<?php 

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'logins';
    protected $primaryKey = 'id_login';
    protected $allowedFields = [
        'id_login',
        'user',
        'password',
        'first_name',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

}

?>