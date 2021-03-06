<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CuentasModel extends CI_Model
{

    public function save($data)
    {
        if ($this->db->insert("usuarios", $data)) {
            return $this->db->insert_id();
            //return true;
        } else {
            return false;
        }
    }

    /*Una vez creado un usuario se debe asignar un rol*/
    public function add_rol($id_usuario, $id_rol)
    {
        $this->db->set("roles_id", $id_rol);
        $this->db->set("usuarios_id", $id_usuario);

        $this->db->insert("rolusuarios");

    }

/*Extrae todos los usuarios para mostrar en una lista*/
    public function getCuentas()
    {
        $this->db->select('*');
        $this->db->from('cuentas');
        //$this->db->where('cuenta_id IS NULL');
        $this->db->where('cuenta_id', null, false);
       /*  $this->db->join('rolusuarios ru', 'u.id_usuario=ru.usuarios_id', 'left');
        $this->db->join('roles r', 'r.id_rol=ru.roles_id', 'left');
        //$this->db->where('ru.estado_rol', '1');
        $this->db->order_by("id_usuario", "desc"); */
        $resultados = $this->db->get();
        //echo $this->db->last_query();
        //exit();
        return $resultados->result();
    }

/*Retorna una fila con los datos de un usuario*/
    public function get_usuario($id_usuario)
    {
        $this->db->select('*');
        $this->db->from('usuarios u');
        $this->db->where('u.id_usuario', $id_usuario);
        $this->db->join('rolusuarios ru', 'u.id_usuario=ru.usuarios_id', 'left');
        $this->db->join('roles r', 'r.id_rol=ru.roles_id', 'left');
//$this->db->where("id_padre", null);
        $resultados = $this->db->get();
        //echo $this->db->last_query();
        //exit();
        return $resultados->row();
    }

/*Devuleve todos los roles q existe para editar a un usuario*/
    public function get_roles()
    {
        $this->db->select('*');
        $this->db->from('roles');
        $resultados = $this->db->get();
        return $resultados->result();
    }

/*Devuelve usuarios, roles, y funciones de un usuario*/
    public function get_all_usuario($id_usuario)
    {
        $this->db->select('*');
        $this->db->from('usuarios u');
        $this->db->join('rolusuarios ru', 'u.id_usuario=ru.usuarios_id', 'left');
        $this->db->join('roles r', 'r.id_rol=ru.roles_id', 'left');
        $this->db->join('rolesfuncionalidad rf', 'ru.roles_id=rf.rol_usuario_id', 'left');
        $this->db->join('funcionalidades f', 'rf.funcionalidad_id=f.id_funcional', 'left');
        $this->db->where('ru.estado_rol', '1');
        $this->db->where('u.id_usuario', $id_usuario);
//$this->db->where("id_padre", null);
        $resultados = $this->db->get();
        //echo $this->db->last_query();
        //exit();
        return $resultados->result();
    }

/*Devuleve todos los datos de la tabla funcionalidades*/
    public function get_funcionalidades()
    {
        $this->db->select('*');
        $this->db->from('funcionalidades');
        $resultados = $this->db->get();
        return $resultados->result();
    }

/*Devuleve todos los datos de la tabla funcionalidades*/
    public function update_usuario($id_usuario, $data)
    {
        $this->db->where("id_usuario", $id_usuario);
        if ($this->db->update("usuarios", $data)) {
            //echo $this->db->last_query();
            return true;
        } else {
            return false;
        }
    }

}
