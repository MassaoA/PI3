<?php

if (isset($_POST['acao'])) {

    include_once '../Model/crud.php';

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $inserir = new crud();

    $inserir->inserir_lojista($nome, $cnpj, $email, $senha);
}
