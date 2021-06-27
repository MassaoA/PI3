<?php

if (isset($_POST['acao'])) {

    include_once '../Model/crud.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $selecionar = new crud();

    $selecionar->selecionar_lojista($email, $senha);
}
