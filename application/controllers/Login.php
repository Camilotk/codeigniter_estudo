<?php
class Login extends CI_Controller {
    public function autenticar(){
        $this->load->model("usuarios_model");
        
        $email = $this->input->post("Email");
        $senha = $this->input->post("Senha");
        $usuario = $this->usuarios_model->buscaUsuario($email, $senha);

        if ($usuario) {
            $this->session->set_userdata(array("usuario_logado" => $usuario));
            $this->session->set_flashdata("success", "Logado com sucesso");

        } else {
            $this->session->set_flashdata("danger", "Falha no login");
        }

        redirect('/');
        
    }

    public function logout(){
        $this->session->unset_userdata("usuario_logado");
        redirect('/');
    }
}