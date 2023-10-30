<?php

namespace App\Controllers;
use App\Models\ClientModel;
use App\Models\EmployeeModel;
use App\Models\ProductModel;
class Home extends BaseController
{
    protected $client_model;
    protected $employee_model;
    protected $product_model;
    public function __construct()
    {
        $this->client_model = new ClientModel();
        $this->employee_model = new EmployeeModel();
        $this->product_model = new ProductModel();
    }
    public function index()
    {
        $data = [
            'total_clients' => $this->client_model->countAll(),
            'total_employees' => $this->employee_model->countAll(),
            'total_products' => $this->product_model->countAll(),
            'products' => $this->product_model->findAll(),
        ];

    

        echo View('templates/header');
        echo View('home/index', $data);
        echo View('templates/footer');
    }
}
