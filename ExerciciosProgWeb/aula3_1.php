<!--Marcelo Bernardo Prudencio-->
<!--Atividade 1-->
<html>
<header>
        <meta charset="UTF-8">
    </header>
    <body >
    <form action="aula3_1.php" method="POST">

    <label for="">Nome Completo</label><br>
    <input type=text name=nome placeholder="Digite seu nome completo"><br>

    <label for="">Sexo:</label><br>
    <label for="s1"><input name=sexo type=radio value=m id=s1>Masculino</label><br>
    <label for="s2"><input name=sexo type=radio value=f id=s2>Feminino</label><br>
    <label for="s3"><input name=sexo type=radio value=o id=s3>Prefiro não informar</label><br>

    <label for="">Idade</label><br>
    <input type=text name=idade placeholder="Digite sua idade"><br>

    <label for="">Preço inicial do ingresso</label><br>
    <input type=text name=preco placeholder="Digite o preço do ingresso sem desconto"><br>

    <br><button  name=enviar value=1 type=submit>Calcular</button>
    </form>
    </body>
</html>

<?php
$nome=$_POST['nome'];
$btn=$_POST['enviar'];
$idade=$_POST['idade'];
$preco=$_POST['preco'];
if($btn==1)
{
if($idade>=10 && $idade<=17)
{
    $newpreco=$preco-($preco*0.3);
    echo "<br>Idade entre 10 e 17, desconto de 30%, valor do ingresso: ".$newpreco;
} else if($idade>=18 )
{
    $newpreco=$preco-($preco*0.1);
    echo "<br>Maior de 18 anos, desconto de 10%, valor do ingresso: ".$newpreco;

}
}
?>