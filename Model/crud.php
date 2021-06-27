<?php

require "conexao.php";

session_start();

class crud
{

    function inserir_lojista($nome, $cnpj, $email, $senha)
    {


        $conn = conectar();

        $pegaEmail = mysqli_query($conn, "SELECT * FROM lojistas WHERE email = '$email'");

        if (mysqli_num_rows($pegaEmail) == 1) {


            echo "<script language='javascript' type='text/javascript'>alert('Usuário já existe');window.location.href='../View/signUp.html';</script>";
        } else {

            $sql = "INSERT INTO lojistas (nome,cnpj,email,senha) values('$nome','$cnpj','$email','$senha')";

            mysqli_query($conn, $sql);

            echo "<script language='javascript' type='text/javascript'>alert('Usuário Cadastrado com sucesso');window.location.href='../View/signIn.html';</script>";
        }
    }

    function selecionar_lojista($email, $senha)
    {


        $conn = conectar();

        $result_usuario = "SELECT * FROM lojistas  WHERE email= '$email' && senha = '$senha' LIMIT 1";

        $resultado_usuario = mysqli_query($conn, $result_usuario);

        $resultado = mysqli_fetch_assoc($resultado_usuario);


        if (isset($resultado)) {

            $_SESSION['usuarioEmail'] = $resultado['email'];
            $_SESSION['usuarioSenha'] = $resultado['senha'];

            header("Location: ../View/index.html");
        } else {

            echo "<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/signIn.html';</script>";
        }
    }
}
