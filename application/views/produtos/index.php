<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/codeigniter_estudo/css/bootstrap.min.css">
<script src="http://localhost/codeigniter_estudo/js/bootstrap.min.js"></script>
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
    </div>
</body>
</html>