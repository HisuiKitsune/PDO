<?php

require_once('./Aluno_crud.php');

if ($_GET['id'] == NULL) {
    header('location: error.php?status=access-deny');
    die();
}

$result = delete($_GET['id']);

if ($result) {
    header("location: ../view/aluno_form_list.php?status=success");
    die();
}

header("location: ../view/aluno_form_list.php?status=fail");
die();
