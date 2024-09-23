<?php
$servername = "localhost";
$username = "root";
$password = "escola";
$dbname = "projeto_pc";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_FILES["imagem"]["name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($imagem);

    // Move o arquivo de imagem para o diretório de uploads
    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO produtos (nome, descricao, preco, imagem) VALUES ('$nome', '$descricao', '$preco', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "Produto cadastrado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Desculpe, houve um erro ao fazer o upload da sua imagem.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h2>Cadastro de Produtos</h2>
    <form action="form3.php" method="post" enctype="multipart/form-data">
        Nome: <input type="text" name="nome"><br>
        Descrição: <textarea name="descricao"></textarea><br>
        Preço: <input type="text" name="preco"><br>
        Imagem: <input type="file" name="imagem"><br>
        <input type="submit" value="Cadastrar Produto">
    </form>
</body>
</html>
