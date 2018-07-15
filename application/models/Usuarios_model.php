<?php
class Usuarios_model extends CI_Model {
    public function salva ($usuario){
        $this->db->insert("usuario", $usuario);
    }

    public function buscaUsuario($email, $senha){
        $this->db->where("email", $email);
        $this->db->where("senha", md5($senha));
        $usuario = $this->db->get("usuario")->row_array();
        return $usuario;
    }
}