<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->layout->setLayout("frontend");

        // if (!$this->session->userdata('login')) {
        //  redirect(base_url('login'));
        // }
         //$this->load->model("SessionModel");

    }

    public function index()
    {
        if ($this->session->userdata("login")) {
        redirect(base_url('dashboard'));
      } else {
          $this->load->view("login/index");
      }
    }


    public function login()
    {
          $username = $this->input->post("usuario");
        $password = md5($this->input->post("clave"));

              $objeto   = $this->SessionModel->acceder($username, $password);
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
            redirect(base_url() . "dashboard");
        } else {
            $this->session->set_flashdata("error", "Usuario / clave incorrectos");
            redirect(base_url('login'));
        }
        
    }

    public function logout()
    {
              $this->session->sess_destroy();

       header("Location:" . base_url());

    }

}
