<?php
require_once('../php/Aluno_crud.php');

if ($_GET['id'] != NULL) {
    $aluno = get($_GET['id']);
} else {
    header('location: error.php?status=access-deny');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formulário de Cadastro de Alunos</title>
</head>

<body>
    <?php include_once("../php/navbar.php"); ?>
    <div class="col-6 offset-3">
        <fieldset>
            <legend>Cadastro de Alunos</legend>
            <form class="form" action="../php/aluno_edit.php" method="post">
                <div class="form-group mb-3">
                    <label for="nome" class="form-label">Nome do Aluno</label>
                    <input value="<?= $aluno['nome'] ?>" class="form-control" type="text" name="txtAluno" id="nome" placeholder="Informe o nome do(a) aluno(a)" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">E-Mail</label>
                    <input value="<?= $aluno['email'] ?>" class="form-control" type="text" name="txtEmail" id="email" placeholder="Informe o E-Mail do(a) aluno(a)" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input value="<?= $aluno['cpf'] ?>" class="form-control" type="number" name="txtCPF" id="cpf" placeholder="Informe o número de CPF do(a) aluno(a)" required>
                </div>
                <button value="<?= $aluno['id'] ?>" name="txtIdALuno" class="btn btn-dark" type="submit">Atualizar</button>
            </form>
        </fieldset>
    </div>
</body>
</html>