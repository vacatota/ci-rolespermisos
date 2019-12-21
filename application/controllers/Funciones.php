<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Funciones extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('login')) {
            redirect(base_url());
        }
        $this->layout->setLayout("frontend");
    }
    public function index()
    {
        $data = array(
            'funciones' => $this->FuncionesModel->get_funciones(),
        );
        $this->layout->view('/funciones/list', $data);
    }

    public function add()
    {
        $this->layout->view('/funciones/add');
    }

    public function create()
    {
        $data = $arrayName = array(
            'rol' => $this->input->post('rol'),
        );
        if ($this->RolesModel->save($data)) {
            redirect(base_url() . "roles");
        } else {
            redirect(base_url() . "roles/add");
        }
    }

/*Recibe un id, y del model trae una fila de un rol, retorna a la vista para editar*/
    public function edit($idRol)
    {
        $data = array(
            'rol'       => $this->RolesModel->getRol($idRol),
            //'funciones' => $this->FuncionesModel->get_funciones(),
        );
        $this->layout->view('/roles/edit', $data);
    }

    public function update()
    {
        $id_rol = $this->input->post('id_rol');
        $data   = array(
            'rol' => $this->input->post('rol'),
        );
        if ($this->RolesModel->update_rol($id_rol, $data)) {
            redirect(base_url() . "roles");
        } else {
            redirect(base_url() . "roles/add");
        }
    }

    public function add_funciones()
    {

        foreach ($_POST['funcion'] as $valor) {
            echo "<br>" . $valor;
        }

    }

}
