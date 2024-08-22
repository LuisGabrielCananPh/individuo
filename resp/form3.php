<?php
include_once('config.php');

// Checkar conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}

// Receber dados do formulário
if (isset($_POST['nome'] )  && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['telefone']) && isset($_POST['genero']) && isset($_POST['data_nascimento']) && isset($_POST['endereco'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
} else {
    echo "Erro: Dados do formulário não enviados corretamente.";
}

// Verificar se o e-mail já existe
$sql_verifica_email = "SELECT COUNT(*) FROM usuarios WHERE email = '$email'";
$resultado_verifica = $conexao->query($sql_verifica_email);

if ($resultado_verifica->fetch_row()[0] > 0) {
    echo "Erro: E-mail já cadastrado. Tente outro e-mail.";
} else {
    // Se o e-mail não existir, prosseguir com a inserção
    $sql = "INSERT INTO usuarios (nome, email, senha, email, telefone, genero, data_nascimento) VALUES ('$nome','$senha','$email','$telefone','$genero','$data_nasc','$endereco')";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário: " . $conexao->error;
    }
}

$conexao->close();

    
?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <header class="cabecalho">
        <div class="fiotao">
            <a href="index.php">voltar</a>
            <img src="img/individuo.png" alt="" class="cab_img">
            <h1 class="cab_tit">individeo gamer
            </h1>
            <P class="cab_slogan">bem vindo </P>
            <div>
            <a href="pag.php"><button id="divgb">carrinho</button></a>
            </div>
        </div>
       
    </header>
        <div id="div2f">
            <table id="tab">
                <tr id="tr">
                    <td>
                    <div>
                <td id="pro">        
                <a href="pc.php">
                    <font color="white">PC</font><br>
                    <img src="img/pc.jpeg" id="produto">
                </a>
                    </td>
                <td id="pro">
                    <a href="monitor.php">
                    <font color="white">MONITOR</font>f><br>
                    <img src="img/monitor.jpeg" id="produto">
                    </td>
                <td id="pro">        
                    <a href="mouse.php">
                    <font color="white">MOUSE<br>
                    <img src="img/mouse.jpeg" id="produto">
                    </td>
                <td id="pro">        
                    <a href="teclado.php">
                    <font color="white">TECLADO</font><br>
                    <img src="img/teclado.png" id="produto">
                    </td>
                <td id="pro">        
                    <a href="headset.php">
                    <font color="white">HEADSET</font><br>
                    <img src="img/headset.jpg" id="produto">
                </td>
                    
            </div>
        </td>
            </tr>
            </table> 
        </div>
        <footer>
            <div id="div3">
                |Luis Gabriel C. Ph.|n°14|<br>|Arthur Bertolini|n°4|<br>|Adrian Phellipe S Rhoden|n°2|<br>|3° dev. sist.|colegio prof. victorio|<font color="gray"> por favor me ajuda</font>
            </div>
        </footer>
</body>
</html>