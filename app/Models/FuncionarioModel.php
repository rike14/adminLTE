<?php 

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model
{
    protected $table = 'funcionarios';
    protected $primaryKey = 'id_funcionario';
    protected $allowedFields = [
        'id_funcionario',
        'nome',
        'data_de_nascimento',
        'CPF',
        'RG',
        'telefone',
        'endereco',
        'data_de_contratacao',
        'cargo',
        'salario',
        'dia_de_pagamento',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

}

?>