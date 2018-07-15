<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
    public function template($local, $dados = array()) {
        $this->view("pagina/header.php");
        $this->view($local, $dados);
        $this->view("pagina/footer.php");
    }
}