<?php
class Produtos extends CI_Controller {
    public function index() {
        $this->load->database();
        $this->load->model("produtos_model");
        $produtos = $this->produtos_model->buscaTodos();
        $dados = array("produtos" => $produtos);
        $this->load->helper(array('currency', 'url', 'form'));
        $this->load->template("produtos/index.php", $dados);
    }

    public function formulario() {
        $this->load->helper('form');
        $this->load->template("produtos/formulario");
    }

    public function novo(){
        $produto = array(
            "nome" => $this->input->post("nome"), 
            "preco" => $this->input->post("preco"), 
            "descricao" => $this->input->post("descricao")
        );

        $this->load->model("produtos_model");
        $this->produtos_model->salva($produto);
        redirect('/');
    }
}