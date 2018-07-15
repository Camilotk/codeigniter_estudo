<?php
class Login extends CI_Controller {
    public function autenticar(){
        $this->load->model("usuarios_model");
        
        $email = $this->input->post("Email");
        $senha = $this->input->post("Senha");
        $usuario = $this->usuarios_model->buscaUsuario($email, $senha);

        if ($usuario) {
            $dados = array("mensagem" => "Login realizado com sucesso");
        } else {
            $dados = array("mensagem" => "Login e/ou Senha inválida");
        }

        $this->load->view("login/autenticar", $dados);
        
    }
}