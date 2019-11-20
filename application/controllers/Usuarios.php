<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
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
            'usuarios' => $this->UsuariosModel->getUsuarios(),
        );

        $this->layout->view('/usuarios/list', $data);
    }

    public function add()
    {
        $data = array(
            'roles' => $this->RolesModel->get_roles(),
        );
        $this->layout->view('/usuarios/add', $data);
    }

    public function create()
    {
        if ($this->form_validation->run('valida_nuevo_usuario')) {
            $data = $arrayName = array(
                'nombres'   => $this->input->post('nombres'),
                'apellidos' => $this->input->post('apellidos'),
                'correo'    => $this->input->post('correo'),
                'alias'   => $this->input->post('alias'),
                'clave'   => md5($this->input->post('clave')),
            );
            $rol     = $this->input->post('rolId');
            $lastId = $this->UsuariosModel->save($data);
            if ($lastId) {
                $this->UsuariosModel->addRol($lastId, $rol);
                redirect(base_url() . "usuarios");
            } else {
                redirect(base_url() . "usuarios/add");
            }
        } else {
            $this->load->view("usuarios/add");
        }
    }

/*Recibe un id, y del model trae una fila de un usuario, retorna a la vista para editar*/
    public function edit($id_usuario)
    {
        $data = array(
            'usuario'         => $this->UsuariosModel->get_usuario($id_usuario),
            'roles'           => $this->UsuariosModel->get_roles(),
            'funcionalidades' => $this->UsuariosModel->get_funcionalidades(),
            'usuario_todo'    => $this->UsuariosModel->get_all_usuario($id_usuario),
        );
        $this->layout->view('/usuarios/edit', $data);

    }

/*Actulaiza un usuario*/
    public function update()
    {
        if ($this->form_validation->run('valida_editar_usuario')) {
            $data = array(
                'nombres'   => $this->input->post('nombres'),
                'apellidos' => $this->input->post('apellidos'),
                'cedula'    => $this->input->post('cedula'),
                'usuario'   => $this->input->post('usuario'),
            );
            $id_usuario = $this->input->post('id_usuario');
            $id_rol     = $this->input->post('select_rol');

            if ($this->UsuariosModel->update_usuario($id_usuario, $data)) {
                if ($id_rol == 0) {

                    $this->RolesModel->delete_rol($id_usuario);
                } else {
                    $this->UsuariosModel->add_rol($id_usuario, $id_rol);
                    redirect(base_url() . "usuarios");
                }
            } else {
                redirect(base_url() . "usuarios/add");
            }
            redirect(base_url() . "usuarios");
        } else {
            $this->load->view("usuarios/add");
            // redirect(base_url() . "usuarios/add");

        }
    }

}
