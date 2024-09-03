<?php
class produto {
    private $id;
    private $nome;
    private $preco;

    public function __construct($id,$nome,$preco){
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    } 

    public function getPreco(){
        return $this->preco;
    }
}
?>
<?php
require_once 'classes/Produto.php';
require_once 'classes/Carrinho.php';

//criando alguns produtos
$produto1 = new Produto(1,"Produto 1",10.00);
$produto2 = new Produto(1,"Produto 2",20.00);
$produto3 = new Produto(1,"Produto 3",30.00);

$carrinho = new Carrinho();
$carrinho->adicionarProduto($produto1);
$carrinho->adicionarProduto($produto2);
$carrinho->adicionarProduto($produto3);

foreach($carrinho->listarProdutos() as $produto){
    echo "ID:".$produto->getId().
    "-Nome:".$produto->getNome().
    "-Preço: R$".$produto->getPreco()."<br>";
}


echo "Total:R$". $carrinho->calcularTotal();
?>
<?php
class Carrinho {
    private $itens = [];

    public function adicionarProduto(Produto $produto){
        $this->itens[$produto->getId()] = $produto;
    }

    public function removerProduto($id){
        unset($this->itens[$id]);
    }
    
    public function listarProduto($id){
        return $this->itens;
    }

    public function calcularTotal(){
        $total = 0;
        foreach ($this->itens as $item){
            $total += $item->getPreco();
        }
        return $total;
    }
}
?>
<!DOCTYPE html>-Nome
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header class="cabecalho">
    <div class="fiotao">
        <img src="img/individuo.png" alt="" class="cab_img">
        <h1 class="cab_tit">INDIVIDEO GAMER </h1>
        <P class="cab_slogan">bem vindo
        </P>
        </div>
    </header>
    <table id="tab">
        <tr id="tr">
            <td>
            <div id="div2">

            <button type="submit" class="botao-enviar">pagar</button>
                <a href="pag.php"><button></button></a><br>
            </div>
    <div id="div3">
        |Luis Gabriel C. Ph.|n°14|<br>|Arthur Bertolini|n°4|<br>|Adrian Phellipe S Rhoden|n°2|<br>|3° dev. sist.|colegio prof. victorio|<font color="gray"> por favor me ajuda</font>
        </div>

</body>
</html>