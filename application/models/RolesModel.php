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

    public function getRol($idRol)
    {
        $this->db->where("id_rol", $idRol);
        $resultado = $this->db->get("roles");
        return $resultado->row();

    }

    public function createRol($data)
    {
      if($this->db->insert("roles", $data)) {
            //return $this->db->insert_id();
            return true;
        } else {
            return false;
        }
    }


    public function getFunciones(){
      $this->db->select('*');
      $this->db->from('usuarios u');
      $this->db->join('rolesUsuarios ru', 'u.id=ru.usuarioId', 'inner');
      $this->db->join('roles r', 'r.id=ru.rolId', 'inner');
      //$this->db->where('ru.estado_rol', '1');
      $this->db->order_by("u.id", "desc");
      $resultados = $this->db->get();
     /* echo $this->db->last_query();
      exit();*/
      return $resultados->result();

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
