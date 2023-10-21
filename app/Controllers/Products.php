<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class Products extends Controller
{ 
    private $product_model;

    function __construct()
    {
        $this->product_model = new ProductModel();
    }

    public function index()
    {
        $products = $this->product_model->findAll();

        $data['products'] = $products;

        echo View('templates/header');

        echo View('products/index', $data);

        echo View('templates/footer');

    }
    public function newProduct()
    {
        echo View('templates/header');

        echo View('products/newProduct');

        echo View('templates/footer');
    }

    public function editProduct($id_product)
    {
        $product = $this->product_model->where('id_product', $id_product)
                                        ->first();
        
        $data['product'] = $product;

        echo View('templates/header');

        echo View('products/editProduct', $data);

        echo View('templates/footer');
    }

    public function store()
    {
        $data = $this->request->getVar();

        $this->product_model->insert($data);

        $session = session();
        $session->setFlashdata('alert', 'success_create');

        return redirect()->to('/products');
    }

    public function update()
    {
        $data = $this->request->getVar();
        if(isset($data['id_product'])):
            $this->product_model->where('id_product', $data['id_product'])
            ->set($data)
            ->update();

            $session = session();
            $session->setFlashdata('alert', 'success_update');
            
            return redirect()->to("/products/editProduct/{$data['id_product']}");

        endif;

        $session = session();
        $session->setFlashdata('alert', 'error_update');
        return redirect()->to("/products/editProduct/{$data['id_product']}");
    }

    public function remove()
    {
        $id_product = $this->request->getVar('id_product');

        $this->product_model->where('id_product', $id_product)
                            ->delete();

        $session = session();
        $session->setFlashdata('alert', 'success_delete');
                        
        return redirect()->to('/products');
    }

    public function seeProduct($id_product)
    {
        $product = $this->product_model->where('id_product', $id_product)
                                        ->first();

        $data['product'] = $product;

        echo View('templates/header');

        echo View('products/seeProduct', $data);

        echo View('templates/footer');
    }
}


?>