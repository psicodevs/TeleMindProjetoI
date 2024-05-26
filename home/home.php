<?php include("conexao.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="home.css">
  <title>Home</title>
</head>

<body>
  <div id="container">
    <div id="header-box">
      <div>
        <img id="cabecalho" src="assets/group-490.svg"
          alt=" Imagens de uma casinha, uma agenda, um calendário e o símbolo de um cifrão">
      </div>
      <div id="header">
        <h1 id="bem-vindo">Seja bem vindo(a), <a href="null">Usuário</a></h1>
        <svg id="icone-usuario"><img src="assets/usuarioIcone.svg" alt=""></svg>
      </div>
    </div>

    <div id="consultas">
      <h2 id="proximas-consultas">Próximas Consultas</h2>
      <div id="tabela">
        <table>
          <tr>
            <th id="paciente-dados">
            <th id="paciente-nome">Fulano de Tal</th>
            <th id="data-consulta">00/00/0000</th>
            <th id="hora-consulta">00:00</th>
            </th>
          </tr>

          <tr>
            <th id="paciente-dados">
            <th id="paciente-nome">Fulano de Tal</th>
            <th id="data-consulta">00/00/0000</th>
            <th id="hora-consulta">00:00</th>
            </th>
          </tr>

          <tr>
            <th id="paciente-dados">
            <th id="paciente-nome">Fulano de Tal</th>
            <th id="data-consulta">00/00/0000</th>
            <th id="hora-consulta">00:00</th>
            </th>
          </tr>

          <tr>
            <th id="paciente-dados">
            <th id="paciente-nome">Fulano de Tal</th>
            <th id="data-consulta">00/00/0000</th>
            <th id="hora-consulta">00:00</th>
            </th>
          </tr>

        </table>
      </div>


      <div id="consultas-financeiro">
        <div id="faturamento-box">
          <div id="faturamento-mes">Faturamento Mês</div>
          <div id="quantia-faturamento">R$ 500,00</div>
        </div>
        <div id="em-aberto-box">
          <div id="valores-em-aberto">Valores em Aberto</div>
          <div id="quantia-valores-em-aberto">R$ 300,00</div>
        </div>
      </div>

      <div id="grafico-box">
        <div id="grafico-consultas">
          <h2>Gráfico de Consultas</h2>
        </div>
      </div>

    </div>

    <div class="grafico">
      <div class="grafico-fundo"></div>
      <div class="group-33">
        <div class="rectangle-89"></div>
        <div class="rectangle-95"></div>
        <div class="rectangle-91"></div>
        <div class="rectangle-96"></div>
        <div class="rectangle-93"></div>
        <div class="rectangle-97"></div>
        <div class="rectangle-90"></div>
        <div class="rectangle-98"></div>
        <div class="rectangle-92"></div>
        <div class="rectangle-99"></div>
        <div class="rectangle-94"></div>
      </div>
    </div>


    <?php include('rodape.php'); ?>