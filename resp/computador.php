<?php
include_once('config.php');

     

// Receber dados do formulário
if (
    isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['descricao']) &&
    isset($_POST['']) && isset($_POST['']) &&
    isset($_POST[''])
) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    


    // Preparar e executar a inserção dos dados
    $sql = "INSERT INTO usuarios (nome, preco, descriçao) VALUES ('$nome', '$preco', '$descricao)";

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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container_form">
        <h1>Formulário de Cadastro</h1>
        <form class="form" action="form.php" method="post">
            <div class="form_grupo">
            <label for="id" class="form_label">id</label>
                <input type="number" name="id" class="form_input" id="id" placeholder="id" required>
              <br>
                <label for="nome" class="form_label">Nome</label>
                <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
            </div>
            <!-- Adicione outros campos aqui, como email, data de nascimento, etc. -->
            <div class="form_grupo">
                <label for="preco" class="form_label">Preço</label>
                <input type="number" name="preco" class="form_input" id="preco" placeholder="Preço" required>
            </div>
            <div class="form_grupo">
                <label for="descricao" class="form_label">Descrição</label>
                <textarea name="descricao" class="form_input" id="descricao" placeholder="Descrição do produto" required></textarea>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
