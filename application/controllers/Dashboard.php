<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
         parent::__construct();
         if (!$this->session->userdata('login')) {
             redirect(base_url('login'));
      }
      $this->layout->setLayout("frontend");

    }




    public function index()
    {

// echo '<pre>';
//  print_r($this->session->userdata());
//  echo '</pre>';
//  exit();

          // $data = array(
      //     'usuarios' => $this->UsuariosModel->getUsuarios(),
      // );

      $this->layout->view('/dashboard/index');
    }
  }
