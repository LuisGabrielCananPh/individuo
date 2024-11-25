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
            <a href="index.html">voltar</a>
            <img src="img/individuo.png" alt="" class="cab_img">
            <h1 class="cab_tit">individeo gamer
            </h1>
            <P class="cab_slogan">bem vindo
            </P>
            </div>
        </header>
        <div id="div2f">
            <table id="tab">
                <tr id="tr">
                    <td>
                    <div>
                <td id="pro">        
                <a href="pc.html">
                    <font color="white">PC</font><br>
                    <img src="img/pc.jpeg" id="produto">
                </a>
                    </td>
                <td id="pro">
                    <a href="monitor.html">
                    <font color="white">MONITOR</font><br>
                    <img src="img/monitor.jpeg" id="produto">
                    </td>
                <td id="pro">        
                    <a href="mouse.html">
                    <font color="white">MOUSE<br>
                    <img src="img/mouse.jpeg" id="produto">
                    </td>
                <td id="pro">        
                    <a href="teclado.html">
                    <font color="white">TECLADO</font><br>
                    <img src="img/teclado.png" id="produto">
                    </td>
                <td id="pro">        
                    <a href="headset.">
                    <font color="white">HEADSET</font><br>
                    <img src="img/headset.jpg" id="produto">
                    </td>
                    <td id="div2g">        
                        <a href="carrinho.php"><button id="divgb">carrinho</button></a>
                        </td>
                        <?php
/* include_once('config.php');


Preparando a query SQL para selecionar os dados
$sql = "SELECT nome, tipo, marca, FROM produtos";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // Saída dos dados de cada linha
    while($row = $result->fetch_assoc()) {
      
      echo "<div class='card'>";
      echo "<div class='card-header'>  " . $row["nome"] . "</div>";
      echo "<div class='p'> <img src='" . $row["imagem"] . "' alt='Imagem'><br>" . "</div>";
      echo '<a href="colab.php"><button>LER</button></a>';
  
      echo "</div>";  
        
    }
} else {
    echo "0 resultados";
}

$conexao->close();
*/?>
            </div>
        </td>
            </tr>
            </table> 
        </div>
        <div id="div3">
            |Luis Gabriel C. Ph.|n°14|<br>|Arthur Bertolini|n°4|<br>|Adrian Phellipe S Rhoden|n°2|<br>|3° dev. sist.|colegio prof. victorio|<font color="gray"> por favor me ajuda</font>
                </div>
</body>
</html>