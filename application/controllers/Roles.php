<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Roles extends CI_Controller
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
            'roles' => $this->UsuariosModel->getRoles(),
        );

        $this->layout->view('/roles/list', $data);
    }

    public function add()
    {
        $this->layout->view('/roles/add');
    }

    public function create()
    {

      if ($this->form_validation->run('newRol')) {
            $data = array(
              'nombre'   => $this->input->post('nombre'),
              'empresaId'   => '1',
          );
          if ($this->RolesModel->createRol($data)) {
               $this->session->set_flashdata('css', 'success');
                  $this->session->set_flashdata('mensaje', 'El Rol se ha creado con éxito');
              redirect(base_url() . "roles");
          } else {
               $this->session->set_flashdata('css', 'danger');
                  $this->session->set_flashdata('mensaje', 'No se ha creado el Rol, intente nuevamente');
              redirect(base_url() . "roles/list");
          }
      } else {
          $this->layout->view("/roles/add");
      }
    }

/*Recibe un id, y del model trae una fila de un rol, retorna a la vista para editar*/
    public function edit($idRol)
    {
        $data = array(
            'rol'       => $this->RolesModel->getRol($idRol),
            //'funciones' => $this->FuncionesModel->getFunciones(),
        );
        $this->layout->view('/roles/edit', $data);
    }

    public function update()
    {
        $idRol = $this->input->post('idRol');
        $data   = array(
            'nombre' => $this->input->post('nombre'),
        );
        if ($this->RolesModel->updateRol($idRol, $data)) {
          $this->session->set_flashdata('css', 'success');
             $this->session->set_flashdata('mensaje', 'El Rol se ha actualizado con éxito');
            redirect(base_url() . "roles");
        } else {
          $this->session->set_flashdata('css', 'danger');
             $this->session->set_flashdata('mensaje', 'Ocurrió un error, intente nuevamente');
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
