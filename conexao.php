<?php

    //dados para acesso ao banco de dados
    $servidor = "localhost";
    $banco = "telemind";
    $usuario = "root";
    $bdsenha = "";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$bdsenha);

?>