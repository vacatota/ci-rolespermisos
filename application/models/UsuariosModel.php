
<?php
defined('BASEPATH') or exit('No se permite el acceso directo al script');
//omprueba si existe la constante dada y está definida.
// defined ( string $name ) : bool
// "DEFINED APLICA UNICAMENTE PARA CONSTANTES";


class UsuariosModel extends CI_Model
{

    public function createUserRol($data)
    {
      $idUsuario=0;
$rolId= $data['idRol'];
unset($data['idRol']);
  $this->db->trans_begin();
      $this->db->insert("usuarios", $data);
        $usuarioId = $this->db->insert_id();

        if($usuarioId>0){
          $this->db->insert('rolesUsuarios', array(
             'rolId' => $rolId,
             'usuarioId' => $usuarioId,
             //'fecha_registro' => date('Y-m-d H:i:s'),
          ));
          //Recuperamos el id del cliente registrado.
          $idRolesUsuario = $this->db->insert_id();
if ($idRolesUsuario) {
   $this->db->trans_commit();
   return true;
}else{
  $this->db->trans_rollback();
  return false;
}
// if ($this->db->trans_status()){
//    //Todas las consultas se hicieron correctamente.
//    $this->db->trans_commit();
//    return true;
// }else{
//    //Hubo errores en la consulta, entonces se cancela la transacción.
//    $this->db->trans_rollback();
//    return false;
// }
        }
    }


public function get_usuarios()
    {

        $this->db->where("estado", "1");
        $resultados = $this->db->get("usuarios");

        return $resultados->result();
    }


    /*Una vez creado un usuario se debe asignar un rol*/
    public function add_rol($id_usuario, $id_rol)
    {
        $this->db->set("roles_id", $id_rol);
        $this->db->set("usuarios_id", $id_usuario);

        $this->db->insert("rolusuarios");

    }


    /*Una vez creado un usuario se debe asignar un rol*/
    public function createRol($userId, $rolId)
    {
        $this->db->set("rolId", $rolId);
        $this->db->set("usuarioId", $userId);
        $this->db->insert("rolesUsuarios");

    }

/*Extrae todos los usuarios para mostrar en una lista*/
    public function getUsuarios()
    {
        $this->db->select('*');
        $this->db->from('usuarios u');
        //$this->db->join('rolesUsuarios ru', 'u.id=ru.usuarioId', 'inner');
        //$this->db->join('roles r', 'r.id=ru.rolId', 'inner');
        //$this->db->where('ru.estado_rol', '1');
        //$this->db->order_by("u.id", "desc");
        $resultados = $this->db->get();
       /* echo $this->db->last_query();
        exit();*/
        return $resultados->result();
    }


    public function getUsuariosPaginacion($limit, $offset){
          $sql= $this->db->get('usuarios', $limit, $offset);
          return $sql->result();
    }

/*Retorna una fila con los datos de un usuario*/
    public function getUsuario($idUsuario)
    {
        $this->db->select('*');
        $this->db->from('usuarios u');
        $this->db->where('u.id', $idUsuario);
        $this->db->join('rolesusuarios ru', 'u.id=ru.usuarioId', 'inner');
        $this->db->join('roles r', 'r.id=ru.rolId', 'inner');
        $this->db->join('funcionalidadesRolesUsuarios rf', 'rf.rolUsuarioId=ru.id', 'LEFT');
        $this->db->join('funcionalidades f', 'f.id=rf.funcionalidadId', 'LEFT');
//$this->db->where("id_padre", null);
        $resultados = $this->db->get();
       // echo $this->db->last_query();
       //  exit();
        return $resultados->result();
    }

/*Devuleve todos los roles q existe para editar a un usuario*/
    public function getRoles()
    {
        $this->db->select('*');
        $this->db->from('roles');
        $resultados = $this->db->get();
        return $resultados->result();
    }

/*Devuelve usuarios, roles, y funciones de un usuario*/
    public function getFuncionalidadesUsuario($id_usuario)
    {
        $this->db->select('*');
        $this->db->from('usuarios u');
        $this->db->join('rolusuarios ru', 'u.id_usuario=ru.usuarios_id', 'left');
        $this->db->join('roles r', 'r.id_rol=ru.roles_id', 'left');
        $this->db->join('funcionalidadesRolesUsuarios rf', 'ru.roles_id=rf.rol_usuario_id', 'left');
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
    public function getFuncionalidades()
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

    public function deleteUsuario($idUsuario){
      $this->db->where("id", $idUsuario);
      return $this->db->delete("usuarios");
    }

}
