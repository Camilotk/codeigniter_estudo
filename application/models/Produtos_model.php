<?php
class Produtos_model extends CI_Model {
    public function buscaTodos() {
        return $this->db->get("produto")->result_array();
    }

    public function salva($produto) {
        $this->db->insert("produto", $produto);
    }
}