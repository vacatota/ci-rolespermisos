<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FuncionesModel extends CI_Model
{

    public function getFuncionalidades()
    {
        $this->db->select('*');
        $this->db->from('funcionalidades');
        //$this->db->join('rolusuarios ru', 'u.id_usuario=ru.usuarios_id', 'left');
        //$this->db->join('roles r', 'r.id_rol=ru.roles_id', 'left');
        //$this->db->where("id_padre", null);
        $resultados = $this->db->get();
        //echo $this->db->last_query();
        //exit();
        return $resultados->result();
    }

    /* public function save($data)
{
if ($this->db->insert("categorias", $data)) {
return true;
} else {
return false;
}

}
public function getCategoria($id)
{
$this->db->where("id", $id);
$resultado = $this->db->get("categorias");
return $resultado->row();

}

public function update($id, $data)
{
$this->db->where("id", $id);
return $this->db->update("categorias", $data);
}*/
}
