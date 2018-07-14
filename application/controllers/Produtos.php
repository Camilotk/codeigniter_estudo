<?php
class Produtos extends CI_Controller {
    public function index() {
        $produtos = array();
        $bola = array(
            "nome" => "bola de futebol", 
            "descricao" => "bola de futebol assinada pelo Zico",
            "preco" => 300
        );

        $hd = array(
            'nome' => "HD SATA 456",
            'descricao' => 'HD com arquivos secretos da NASA',
            'preco' => 954
        );

        array_push($produtos, $bola, $hd);
        $dados = array("produtos" => $produtos);
        $this->load->view("produtos/index.php", $dados);
    }
}