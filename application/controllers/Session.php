<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Session extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("frontend");
        //$this->load->model("SessionModel");
        $this->load->library("session");
    }
    public function index()
    {         
        $this->layout->view('/login/login');
    }

    public function login()
    {
        $username = $this->input->post("usuario");
        $password = $this->input->post("clave");
        $objeto   = $this->SessionModel->acceder($username, MD5($password));
        if ($objeto) {
            //Si existe usuario, creamos el arreglo para la session
            $dataUSer = array(
                'nombres'   => $objeto->nombres,
                'apellidos' => $objeto->apellidos,
                'usuario'   => $objeto->usuario,
                'id_rol'    => $objeto->id_rol,
                'rol'       => $objeto->rol,
                'login'     => true,
            );
            $this->session->set_userdata($dataUSer);
            redirect(base_url() . "usuarios");
        } else {
            $this->session->set_flashdata("error", "Usuario / clave incorrectos");
            redirect(base_url());
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        header("Location:" . base_url());
    }

}
