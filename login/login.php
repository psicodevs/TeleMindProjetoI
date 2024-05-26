<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <link rel="stylesheet" href="login.css">
    </head>
    <title>Login</title>
</head>

    <div id="container">
        <div id="logo-brand">
            <svg id="logo" viewBox="0 0 100 100">
                <img id="logo-svg" src="assets/logo.svg"
                    alt="Logotipo da marca Telemind, gradiente roxo e azul, imagem de um cérebro ">
                <img id="marca" src="assets/brand.svg" alt="Texto com o nome da marca: Telemind">
            </svg>
        </div>

        <form method="POST" action="login-consulta.php">
        <form id="login-dados">
            <input type="text" placeholder=" Username " required>

            <input type="password" placeholder=" Password " required>

            <input type="submit" value="ENTRAR">

            <a id="cadastre-se" href="/cadastrar/index.php">Nao tem conta? <b>Cadastre-se</b></a>
        </form>



    </div>

<?php include('rodape.php'); ?>