<!--Marcelo Bernardo Prudencio-->
<!--Att PHP e MYSQL-->
<html>
<header>
        <meta charset="UTF-8">
        <title>Cadastro de Produto</title> 
        <h1>Cadastro de Produto</h1>
    </header>
    <body >
    <form action="aula4_1.php" method="POST">

    <label for="">Nome:</label><br>
    <input type=text name=nome placeholder="Digite o nome do produto comprado"><br>

    <label for="">Código:</label><br>
    <input type=text name=codigo placeholder="Digite o código do produto comprado"><br>

    <label for="">Quantidade</label><br>
    <input type=text name=quantidade placeholder="Quantidade de produto comprado"><br>

    <label for="">Preço:</label><br>
    <input type=text name=preco placeholder="Preço do produto"><br>

    <br><button  name=enviar value=1 type=submit>Cadastrar</button>
    
    </form>
    </body>
</html>

<?php

    if(isset($_POST["codigo"]))
    {
        $nome=$_POST['nome'];
        $codigo=$_POST['codigo'];
        $quantidade=$_POST['quantidade'];
        $preco=$_POST['preco'];
        $conexao=mysqli_connect("200.143.198.37", "aluno35", "y8bivqewv6p");
        mysqli_select_db($conexao,"banco35");
        mysqli_query($conexao,"insert into produtos values('$codigo','$nome', '$preco', '$quantidade')");
        $teste = mysqli_query($conexao,"select * from produtos");
        
        while($exibir = mysqli_fetch_array($teste))
        {
            $total=$exibir['preco']*$exibir['quantidade'];
            echo "<br>Código:".$exibir['codigo'];
            echo "<br>Nome:".$exibir['nome'];
            echo "<br>Quantidade:".$exibir['quantidade'];
            echo "<br>Preço:".$exibir['preco'];
            echo "<br>Calculo do total: ".$total;
            echo "<hr>";
        }
        
    mysqli_close($conexao);
    }
?>
