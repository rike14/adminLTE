<?php

namespace App\Controllers;

use App\Models\ClientModel;
use CodeIgniter\Controller;

class Clients extends Controller
{ 
    private $client_model;

    function __construct()
    {
        $this->client_model = new ClientModel();
    }

    public function index()
    {
        $clients = $this->client_model->findAll();


        $data['clients'] = $clients;

        echo View('templates/header');

        echo View('clients/index', $data);

        echo View('templates/footer');

    }
    public function newClient()
    {
        echo View('templates/header');

        echo View('clients/newClient');

        echo View('templates/footer');
    }

    public function editClient($id_client)
    {
        $client = $this->client_model->where('id_client', $id_client)
                                        ->first();
        
        $data['client'] = $client;

        echo View('templates/header');

        echo View('clients/editClient', $data);

        echo View('templates/footer');
    }

    public function store()
    {
        $data = $this->request->getVar();

        if(isset($data['id_client'])):
            $this->client_model->where('id_client', $data['id_client'])
            ->set($data)
            ->update();

            $session = session();
            $session->setFlashdata('alert', 'success_update');

            return redirect()->to("/clients/editClient/{$data['id_client']}");

        endif;

        $this->client_model->insert($data);

        $session = session();
        $session->setFlashdata('alert', 'success_create');

        return redirect()->to('/clients');
    }

    public function remove()
    {
        $id_client = $this->request->getVar('id_client');

        $this->client_model->where('id_client', $id_client)
                            ->delete();

        $session = session();
        $session->setFlashdata('alert', 'success_delete');
                        
        return redirect()->to('/clients');
    }

    public function seeClient($id_client)
    {
        $client = $this->client_model->where('id_client', $id_client)
                                        ->first();

        $data['client'] = $client;

        echo View('templates/header');

        echo View('clients/seeClient', $data);

        echo View('templates/footer');
    }
}


?>