<?php
    
    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $senha = $_POST['txSenha'];

    include("conexao.php");

    try{
        $stmt = $pdo->prepare("INSERT INTO `tbcadastro` (`idUsuario`, `nome`, `cpf`, `email`, `senha`) 
        VALUES (null, :nome, :email, :senha, '1');");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        $pdo = null;

        header("Location:login.php");


    }
    catch(PDOException $e){
        echo "Erro: ".$e->getMessage();

    }
?>