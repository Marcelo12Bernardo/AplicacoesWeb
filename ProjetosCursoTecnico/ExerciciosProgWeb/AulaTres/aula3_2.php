
<!--Atividade 2, Mercado-->
<html>
    <header>
        <meta charset="UTF-8">
        <title>M & M & M</title> 
        <img  width=90 height=120 src=carrinho.png>
        <h1>Mini Mercado Marcelo</h1>
    </header>
    <body >
    <form action="aula3_2.php" method="POST">

    <label for="">Nome:</label><br>
    <input type=text name=nome placeholder="Digite o nome do produto comprado"><br>

    <label for="">Código:</label><br>
    <input type=text name=codigo placeholder="Digite o código do produto comprado"><br>

    <label for="">Quantidade</label><br>
    <input type=text name=quantidade placeholder="Quantidade de produto comprado"><br>

    <label for="">Preço:</label><br>
    <input type=text name=preco placeholder="Preço unitário do produto"><br>

    <label for="">Tipo de compra:</label><br>
    <label for="a"><input name=tc type=radio value=atacado id=a>Atacado</label><br>
    <label for="v"><input name=tc type=radio value=varejo id=v>Varejo</label><br>

    <br><label for="">Tipo de produto:</label><br>
    <select name=tp>
            <option value="">Selecione</option>
            <option value="Nacional">Nacional</option>
            <option value="importado">Importado</option>
    </select>

    <br><button  name=enviar value=1 type=submit>Calcular</button>
    </form>
    </body>
</html>

<?php
$nome=$_POST['nome'];
$codigo=$_POST['codigo'];
$quantidade=$_POST['quantidade'];
$preco=$_POST['preco'];
$tipocompra=$_POST['tc'];
$tipoproduto=$_POST['tp'];
$btn=$_POST['enviar'];

if($btn==1)
{
$totalcompra=$quantidade*$preco;
$totalinposto=$totalcompra*0.5;
if($tipoproduto=="importado"){
    $taxaimport=$preco*0.08;
}else  $taxaimport=0;
echo "<br>Nome: ".$nome;
echo "<br>Codigo: ".$codigo;
echo "<br>Quantidade: ".$quantidade;
echo "<br>Preço: ".$preco;
echo "<br>Tipo de compra: ".$tipocompra;
echo "<br>Tipo de produto: ".$tipoproduto;
echo "<br>Total da compra: ".$totalcompra;
echo "<br>Total inposto: ".$totalinposto;
echo "<br>Taxa de inportaçao: ".$taxaimport;
$total=$totalcompra+$totalinposto+$taxaimport;
echo "<br>Valor total a ser pago: ".$total;
}

?>




