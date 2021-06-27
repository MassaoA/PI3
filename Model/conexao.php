<?php


function conectar()
{

    $conn = mysqli_connect('localhost', 'root', '', 'braz_mktplace');

    if (!$conn) {

        return "Conexão não abre !";
    } else {

        return $conn;
    }
}
