<?php include('cabecalho.php'); ?>
<?php include("conexao.php"); ?>


<section class="header">
  <h2>Cadastre-se</h2>
</section>

<form id="form" class="form">
  <div class="form-content">
    <label for="username">Nome do usuário</label>
    <input type="text" id="username" placeholder="Digite o nome do usuario..." />
    <a>Aqui vai a mensagem de erro....</a>
  </div>

  <div class="form-content">
    <label for="cpf">CPF</label>
    <input type="text" id="cpf" placeholder="Digite o seu CPF..." />
    <a>Aqui vai a mensagem de erro....</a>
  </div>

  <div class="form-content">
    <label for="email">Email</label>
    <input type="email" id="email" placeholder="Digite o seu email..." />
    <a>Aqui vai a mensagem de erro....</a>
  </div>

  <div class="form-content">
    <label for="password">Senha</label>
    <input type="password" id="password" placeholder="Digite sua senha..." />
    <a>Aqui vai a mensagem de erro....</a>
  </div>

  <div class="form-content">
    <label for="password-confirmation">Confirmação de senha</label>
    <input type="password" id="password-confirmation" placeholder="Digite sua senha novamente..." />
    <a>Aqui vai a mensagem de erro....</a>
  </div>

  <button type="submit">Cadastrar</button>

</form>

</div>



<script src="./script.js"></script>


<?php include('rodape.php'); ?>