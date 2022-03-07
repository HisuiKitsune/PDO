<?php
require_once('../php/ConexaoPDO.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulário de Cadastro de Alunos</title>
</head>

<body>
    <?php include "../php/navbar.php" ?>
    <div class="container col-6">
        <fieldset>
            <legend>Cadastro de Alunos</legend>
            <form class="form" action="../php/aluno_register.php" method="post">
                <div class="form-group mb-3">
                    <label for="nome" class="form-label">Nome do(a) Aluno(a)</label>
                    <input class="form-control" type="text" name="txtNome" id="nome" placeholder="Informe o nome do(a) aluno(a)" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input class="form-control" type="text" name="txtEmail" id="email" placeholder="Informe o E-mail do(a) aluno(a)" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input class="form-control" type="text" name="txtCPF" id="cpf" placeholder="Informe o número de CPF do(a) aluno(a)" required>
                </div>
                <button class="btn btn-dark" type="submit">Cadastrar</button>
            </form>
        </fieldset>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>