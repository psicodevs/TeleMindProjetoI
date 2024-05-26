<?php include("conexao.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- arquivos style -->
  <link href="./css/style.css" rel="stylesheet">
  <link href="./css/darkMode.css" rel="stylesheet">

  <title>Agendar</title>
</head>
<!-- dark mode -->

<div class="toggle">
  <input id="switch" type="checkbox" name="theme">
  <label for="switch">Toggle</label>
</div>

<!-- -------- -->

<div id="container">

  <div>
    <img id="cabecalho" src="assets/group-490.svg" alt=" Imagens de uma casinha, uma agenda, um calendário e o símbolo de um cifrão">
  </div>
  <div id="header">
    <div id="monthDisplay"></div>

    <div>
      <button id="backButton">Voltar</button>
      <button id="nextButton">Próximo</button>
    </div>

  </div>

  <div id="weekdays">
    <div>Domingo</div>
    <div>Segunda-feira</div>
    <div>Terça-feira</div>
    <div>Quarta-feira</div>
    <div>Quinta-feira</div>
    <div>Sexta-feira</div>
    <div>Sábado</div>
  </div>


  <!-- div dinamic -->
  <div id="calendar"></div>


</div>

<div id="newEventModal">
  <h2>Agendar</h2>

  <input id="eventTitleInput" placeholder="Agendamento" />

  <button id="saveButton"> Salvar</button>
  <button id="cancelButton">Cancelar</button>
</div>

<div id="deleteEventModal">
  <h2>Evento</h2>

  <div id="eventText"></div><br>


  <button id="deleteButton">Deletar</button>
  <button id="closeButton">Fechar</button>
</div>

<div id="modalBackDrop"></div>

<script src="scripts/darkMode.js"></script>
<script src="./scripts/main.js"></script>

<?php include('rodape.php'); ?>