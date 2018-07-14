<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?=base_url("css/bootstrap.min.css")?>">
<script src="<?=base_url("js/bootstrap.min.js")?>"></script>
</head>
<body>
    <div class="container">
    <h1>Produtos</h1>
    <table class="table">
        <?PHP foreach ($produtos as $produto) : ?>
        <tr>
            <td><?=$produto["nome"]?></td>
            <td><?=numeroReais($produto["preco"])?></td>
        </tr>
        <?PHP endforeach ?>
    </table>

    <h1>Cadastro</h1>
    <?PHP
    echo form_open("usuarios/novo");
    echo form_label("Nome", "inNome");
    echo form_input(array(
        "name" => "Nome",
        "id" => "inNome",
        "class" => "form-control",
        "maxlength" => "75"
    ));
    echo form_label("E-mail", "inEmail");
    echo form_input(array(
        "name" => "Email",
        "id" => "inEmail",
        "class" => "form-control",
        "maxlength" => "75"
    ));
    echo form_label("Senha", "inSenha");
    echo form_password(array(
        "name" => "Senha",
        "id" => "inSenha",
        "class" => "form-control"
    ));
    echo form_button(array(
        "name" => "Cadatrar",
        "id" => "btnCadastrar",
        "content" => "Cadastrar",
        "class" => "btn btn-primary"
    ));
    echo form_close();
    ?>
    </div>
</body>
</html>