<?php

    //dados para acesso ao banco de dados
    $servidor = "localhost";
    $banco = "u638253483_mind";
    $usuario = "u638253483_mind";
    $bdsenha = "mind@@2024@@DB";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$bdsenha);

?>