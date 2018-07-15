<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    public function novo() {
        $usuario = array(
            "nome" => $this->input->post("Nome"),
            "email" => $this->input->post("Email"),
            "senha" => md5($this->input->post("Senha"))
        );

        $this->load->model("usuarios_model");
        $this->usuarios_model->salva($usuario);
        $this->load->template("usuario/novo", $usuario);
    }
}