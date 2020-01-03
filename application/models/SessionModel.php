<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SessionModel extends CI_Model
{

    public function acceder($username, $password)
    {

        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where("alias", $username);
        $this->db->where("clave", $password);
        $resultados = $this->db->get();
         echo $this->db->last_query();
         exit();
        if ($resultados->num_rows() > 0) {
        return $resultados->row();
        } else {
            return false;
        }
    }



}
