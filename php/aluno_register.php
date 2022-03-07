<?php

require_once('./Aluno_crud.php');

if (
    $_POST['txtAluno'] == NULL ||
    $_POST['txtEmail'] == NULL ||
    $_POST['txtCPF'] == NULL
) {
    header('location: error.php?status=access-deny');
    die();
}

$aluno = new stdClass();
$result = create(
$aluno->nome = $_POST['txtNome'],
$aluno->email = $_POST['txtEmail'],
$aluno->cpf = $_POST['txtCPF'],
create($aluno)
);

if ($result) {
    header("location: ../view/aluno_form_register.php?nome={$_POST['txtNome']}&status=success");
    die();
}

header("location: ../view/aluno_form_register.php?nome={$_POST['txtNome']}&status=fail");
die();
