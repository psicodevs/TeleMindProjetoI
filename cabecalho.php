<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style.css" />

    <title>Cadastro</title>
</head>

<!-- nav -->
<nav>
    <h2>TeleMind</h2>
    </div>
    <ul>
        <a href="index.php">Home</a>
        <a href="agendar.php">Agenda</a>
        <?php if (isset($_SESSION["autorizacao"]) && isset($_SESSION["user_name"])) { ?>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <a href="login.php">Login</a>
        <?php } ?>
    </ul>
    <div class="menu-icon">
        <img src="images/icon-hamburger.svg">
    </div>
    </div>
</nav>

<!-- end nav -->


<div class="container">

    <div>
        <img id="cabecalho" src="assets/group-490.svg" alt=" Imagens de uma casinha, uma agenda, um calendário e o símbolo de um cifrão">
    </div>

</div>