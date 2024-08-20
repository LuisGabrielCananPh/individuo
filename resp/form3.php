<?php

include_once('config.php');

   // Checkar conexão
   if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}
     

// Receber dados do formulário
if (
    isset($_POST['nome']) && isset($_POST['ID']) && isset($_POST['cpf']) &&
    isset($_POST['data de entrada no estoque']) && isset($_POST['email']) &&
    isset($_POST[''])
) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data de entrada no estoque'];
    $email = $_POST['email'];
    $senha = $_POST[''];


    // Preparar e executar a inserção dos dados
    $sql = "INSERT INTO usuarios (nome, cpf, cep, data_nascimento, email, senha) VALUES ('$nome', '$cpf', '$cep', '$data_nascimento', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário: " . $conexao->error;
    }
} else {
    echo "Erro: Dados do formulário não enviados corretamente.";
}

$conexao->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="div2f"><br>
        
        <main>
            <form id="formulario-cadastro" action="form.php" method="post">
              <fieldset id="borda">
                <legend id="title">Cadastro de produto</legend>
         
                <div class="secao-contato">
                  <label for="ID produto">ID :</label>
                  <input type="number" id="ID" name="ID" placeholder="000.000.000.000" inputmode="numeric" pattern="[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}" required>
                  <br>
                  <label for="nome">nome:</label>
                  <input type="text" id="nome" name="nome" required>
                  <br>
                  <label for="tipo">tipo:</label>
                  <input type="tipo" id="tipo" name="tipo" placeholder="tipo" required>
                <br>
                <label for="marca">marca:</label>
                  <input type="text" id="marca" name="marca" required>
                  <br>
                <label for="descricao">descricao:</label>
                  <input type="text" id="descricao" name="descricao" required>
                  <br>
                  <label for="preco">preco:</label>
                  <input type="number" id="preco" name="preco" required>
                  <br>
                  <label for="disponibilidade">disponibilidade:</label>
                  <input type="text" id="preco" name="disponibilidade" required>
                </div>
        
                <button type="submit" class="botao-enviar">Cadastrar produto</button>
              </fieldset>
            </form>
</body>
</html>