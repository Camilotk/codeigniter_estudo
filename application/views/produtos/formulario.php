<h1>Cadastrar um produto!</h1>
<?PHP
    echo form_open("produtos/novo");

    echo form_label("Nome", "nome");
    echo form_input(array(
        "name" => "nome",
        "class" => "form-control",
        "id" => "nome",
        "maxlength" => "75"
    ));

    echo form_label("Preço", "preco");
    echo form_input(array(
        "name" => "preco",
        "class" => "form-control",
        "id" => "preco",
        "type" => "number"
    ));

    echo form_textarea(array(
        "name" => "descricao",
        "class" => "form-control",
        "id" => "descricao"
    ));

    echo form_button(array(
        "class" => "btn btn-primary",
        "content" => "Cadastrar",
        "type" => "submit"
    ));
    echo form_close();
?>
