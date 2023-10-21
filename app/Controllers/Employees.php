<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use CodeIgniter\Controller;

class Employees extends Controller
{ 
    private $employee_model;

    function __construct()
    {
        $this->employee_model = new EmployeeModel();
    }

    public function index()
    {
        $employees = $this->employee_model->findAll();

        $data['employees'] = $employees;

        echo View('templates/header');

        echo View('employees/index', $data);

        echo View('templates/footer');

    }
    public function newEmployee()
    {
        echo View('templates/header');

        echo View('employees/newEmployee');

        echo View('templates/footer');
    }

    public function editEmployee($id_employee)
    {
        $employee = $this->employee_model->where('id_employee', $id_employee)
                                        ->first();
        
        $data['employee'] = $employee;

        echo View('templates/header');

        echo View('employees/editEmployee', $data);

        echo View('templates/footer');
    }

    public function store()
    {
        $data = $this->request->getVar();

        if(isset($data['id_employee'])):
            $this->employee_model->where('id_employee', $data['id_employee'])
            ->set($data)
            ->update();

            $session = session();
            $session->setFlashdata('alert', 'success_update');

            return redirect()->to("/employee/editEmployee/{$data['id_employee']}");

        endif;

        $this->employee_model->insert($data);

        $session = session();
        $session->setFlashdata('alert', 'success_create');

        return redirect()->to('/employees');
    }

    public function remove()
    {
        $id_employee = $this->request->getVar('id_employee');

        $this->employee_model->where('id_employee', $id_employee)
                            ->delete();

        $session = session();
        $session->setFlashdata('alert', 'success_delete');
                        
        return redirect()->to('/employees');
    }

    public function seeEmployee($id_employee)
    {
        $employee = $this->employee_model->where('id_employee', $id_employee)
                                        ->first();

        $data['employee'] = $employee;

        echo View('templates/header');

        echo View('employees/seeEmployee', $data);

        echo View('templates/footer');
    }
}


?>