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
$result = update(
$aluno->nome = $_POST['txtNome'],
$aluno->email = $_POST['txtEmail'],
$aluno->cpf = $_POST['txtCPF'],
update($aluno)
);

if ($result) {
    header("location: ../view/aluno_form_edit.php?codigo={$_POST['txtIdAluno']}&status=success");
    die();
}

header("location: ../view/aluno_form_edit.php?codigo={$_POST['txtIdAluno']}&status=fail");
die();
