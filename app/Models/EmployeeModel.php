<?php 

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id_employee';
    protected $allowedFields = [
        'id_employee',
        'name',
        'date_of_birth',
        'CPF',
        'RG',
        'phone',
        'address',
        'hiring_day',
        'role',
        'salary',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

}

?>