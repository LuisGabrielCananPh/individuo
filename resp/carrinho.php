<?php
session_start();

// Função para adicionar produto ao carrinho
function addToCart($productId, $quantity) {
    if(isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] += $quantity;
    } else {
        $_SESSION['cart'][$productId] = $quantity;
    }
}

// Função para remover produto do carrinho
function removeFromCart($productId) {
    if(isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
    }
}

// Função para exibir o carrinho
function displayCart() {
    if(!empty($_SESSION['cart'])) {
        echo "<table>";
        echo "<tr><th>Produto</th><th>Quantidade</th></tr>";
        foreach($_SESSION['cart'] as $productId => $quantity) {
            echo "<tr><td>$productId</td><td>$quantity</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Seu carrinho está vazio.";
    }
}
?>

<?php
require_once 'pc.php';
/*require_once 'classes/monitor.php';
require_once 'classes/teclado.php';
require_once 'classes/Carrinho.php';*/

//criando alguns produtos
$produto1 = new Produto(1,"pc",10.00);
$produto2 = new Produto(1,"monitor",20.00);
$produto3 = new Produto(1,"teclado",30.00);

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
    <div id="div3">
        |Luis Gabriel C. Ph.|n°14|<br>|Arthur Bertolini|n°4|<br>|Adrian Phellipe S Rhoden|n°2|<br>|3° dev. sist.|colegio prof. victorio|<font color="gray"> por favor me ajuda</font>
        </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="style.css">
    <h1>Produtos</h1>
    <form method="post" action="carrinho.php">
        <div>
            <label for="produto1">Produto 1</label>
            <input type="hidden" name="produto_id" value="1">
            <input type="number" name="quantidade" value="1" min="1">
            <button type="submit">Adicionar ao Carrinho</button>
        </div>
    </form>

    <h2>Seu Carrinho</h2>
    <?php include 'carrinho.php'; ?>

</body>
</html>
