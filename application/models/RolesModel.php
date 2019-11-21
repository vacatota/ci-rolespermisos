<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RolesModel extends CI_Model
{

    public function getRoles()
    {
        $this->db->select('*');
        $this->db->from('roles');
        $resultados = $this->db->get();
        //echo $this->db->last_query();
        return $resultados->result();
    }

    public function get_rol($id_rol)
    {
        $this->db->where("id_rol", $id_rol);
        $resultado = $this->db->get("roles");
        return $resultado->row();

    }

    public function save($data)
    {
        if ($this->db->insert("roles", $data)) {
            //return $this->db->insert_id();
            return true;
        } else {
            return false;
        }
    }
/*Actualiza un rol de la tabla roles*/
    public function update_rol($id_rol, $data)
    {
        $this->db->where("id_rol", $id_rol);
        if ($this->db->update("roles", $data)) {
            return true;
        } else {
            return false;
        }

    }
/*Quita rol al usuario*/
    public function delete_rol($id_usuario)
    {
        $this->db->where('usuarios_id', $id_usuario);
        $this->db->set("usuarios_id", null);
        $this->db->set("eliminado", "Quitado rol a usuario:" . $id_usuario);
        return $this->db->update('rolusuarios');
    }

}
