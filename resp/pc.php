<?php

if(isset($_POST['submit']))
{
    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone: ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo: ' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Endereço: ' . $_POST['endereco']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,endereco) 
    VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$endereco')");

    header('Location: login.php');
}


?>
<?php
class adicionarProduto{

}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gabinete = $_POST["gabinete"];
    $fans = $_POST["fans"];
    $placavideo = $_POST["placaVideo"];
    $processador = $_POST["processador"];
    $memoriaRam = $_POST["memoriaRam"];
    $armazenamento = $_POST["armazenamento"];
    $fonte = $_POST["fonte"];

    // Move o arquivo de imagem para o diretório de uploads
    if (move_uploaded_file()) {
        $sql = "INSERT INTO pc_cart (gabinete, fans, placaVideo, processador, memoriaRam, armazenamento, fonte) VALUES ('$gabinete','$fans','$placavideo','$processador','$memoriaRam','$armazenamento','$fonte')";

        if ($conn->query($sql) === TRUE) {
        $sql = "INSERT INTO carrinho ()";
            echo "Produto adicionado";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Desculpe, houve um erro";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <div class="fiotao">
            <a href="form3.php"><button>voltar</button></a>
            <br>
            <img src="img/individuo.png" alt="" class="cab_img">
            <h1 class="cab_tit">individio gamer
            </h1>
            <P class="cab_slogan">bem vindo
            </P>
            </div>
        </header>
        <div id="div2h"><br>
            <table id="tab3">
                <tr id="tr2">
                    <td id="demoimg">
            <img src="img/pc.jpeg" id="demo">
        </td>
        <td id="info">
            <Div id="name">
                <br>
                <font size="5px">Pc</font>
            </Div>
            <Div id="opcoes">
                <div id="itens">
                gabinete <select name="gabinet">
                    <option>
                        thermaltake
                    </option>
                    <option>
                        ASUS
                    </option>
                    <option>
                        cooler master
                    </option>
                    <option>
                        corsair    
                    </option>
                    <option>
                        PCYES       
                    </option>
                    </select><br><br>
                <i>fans</i><select name="fans">
                    <option>
                        PCYES
                    </option>
                    <option>
                        Brazil PC
                    </option>
                    <option>
                        gigabyte
                    </option>
                    </select></div><br>
                <div id="itens">
                placa de video <select name="placaVideo">
                                <option>
                                    nvidia series rtx10
                                <option>    
                                    amd  series RX500
                               </option>
                                </option>
                                <option>
                                    nvidia series rtx20
                                    
                                    amd series RX500
                                </option>
                                <option>
                                    nvidia rtx30
                                    
                                    amd series rx6000
                                </option>
                                <option>
                                    nvidia rtx40
                                       amd seris rx7000
                                </option>
                    </select></div><br>
                <div id="itens">
                processador <select name="processador">
                    <option>
                        intel core i3
                     </option>
                     <option>
                        intel core i5
                     </option>
                    <option>
                        intel core i7
                      </option>
                       intel core i9
                    </option>
                    <option>
                    amd ryzen 3
                    </option>
                    <option>
                    amd ryzen 5
                    </option>
                    <option>
                    amd ryzen 7
                    </option>
                    <option>
                    amd ryzen 9
                    </option>

                    <option>
                    </option>

                    <option>
                    </option>
                    </select></div><br>
                <div id="itens">
                memoria ram <select name="memoriaRam">
                    <option>
                        kfb DDR4
                    </option>
                    <option>
                        kfb DDR5
                    </option>
                    <option>
                        
                    </option>
                    </select></div><br>
                <div id="itens">
                armazenamento <select name="armazenamento">
                    <option>
                        SSD NVME
                    </option>
                    <option>
                        SSD SATA
                    </option>
                    </select></div><br>
                <div id="itens">
                fonte <select name="fonte">
                    <option>
                       corsair HX1000i 
                    </option>
                    <option>
                        corsair HX500i 
                     </option>
                     <option>
                        corsair CV650
                     </option>
                    </select></div><br>
            </Div>
            </td>
        </tr>
    </table>
   
</form>

</div> 
<div id="div3">
    |Luis Gabriel C. Ph.|n°14|<br>|Arthur Bertolini|n°4|<br>|Adrian Phellipe S Rhoden|n°2|<br>|3° dev. sist.|colegio prof. victorio|<font color="gray"> por favor me ajuda</font>
</div>
</body>
</html>