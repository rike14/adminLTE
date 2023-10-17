<?php

namespace App\Controllers;

use App\Models\FuncionarioModel;
use CodeIgniter\Controller;

class Funcionarios extends Controller
{ 
    private $funcionario_model;

    function __construct()
    {
        $this->funcionario_model = new FuncionarioModel();
    }

    public function index()
    {
        $funcionarios = $this->funcionario_model->findAll();

        $dados['funcionarios'] = $funcionarios;

        echo View('templates/header');

        echo View('funcionarios/index', $dados);

        echo View('templates/footer');

    }
    public function novo()
    {
        echo View('templates/header');

        echo View('funcionarios/novo');

        echo View('templates/footer');
    }

    public function editar($id_funcionario)
    {
        $funcionario = $this->funcionario_model->where('id_funcionario', $id_funcionario)
                                        ->first();
        
        $data['funcionario'] = $funcionario;

        echo View('templates/header');

        echo View('funcionarios/editar', $data);

        echo View('templates/footer');
    }

    public function store()
    {
        $dados = $this->request->getVar();

        if(isset($dados['id_funcionario'])):
            $this->funcionario_model->where('id_funcionario', $dados['id_funcionario'])
            ->set($dados)
            ->update();

            $session = session();
            $session->setFlashdata('alert', 'success_update');

            return redirect()->to("/funcioanrios/editar/{$dados['id_funcionario']}");

        endif;

        $this->funcionario_model->insert($dados);

        $session = session();
        $session->setFlashdata('alert', 'success_create');

        return redirect()->to('/funcionarios');
    }

    public function excluir()
    {
        $id_funcionario = $this->request->getVar('id_funcionario');

        $this->funcionario_model->where('id_funcionario', $id_funcionario)
                            ->delete();

        $session = session();
        $session->setFlashdata('alert', 'success_delete');
                        
        return redirect()->to('/funcionarios');
    }

    public function ver($id_funcionario)
    {
        $funcionario = $this->funcionario_model->where('id_funcionario', $id_funcionario)
                                        ->first();

        $data['funcionario'] = $funcionario;

        echo View('templates/header');

        echo View('funcionarios/ver', $data);

        echo View('templates/footer');
    }
}


?>