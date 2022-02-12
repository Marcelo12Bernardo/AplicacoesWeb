<!--Atividade 1-->
<html>
    <header>
        <meta charset="UTF-8">
    </header>
    <body >
        
    <form action="aula2_1.php" method="POST">
        <label for="">Nome Completo</label><br>
        <input type=text name=nome placeholder="Digite seu nome completo"><br>
        <label for="">P1</label><br>
        <input type=text name=p1 placeholder="Informe P1"><br>
        <label for="">P2</label><br>
        <input type=text name=p2 placeholder="Informe P2"><br>
  
        <div>
            <button  name=enviar value=1 type=submit>Enviar</button><br>
        </div>
    </form>
    </body>
</html>

<?php
$nome=$_POST['nome'];
$vp1=$_POST['p1'];
$vp2=$_POST['p2'];
$media=($_POST["p1"]+$_POST["p2"])/2;
$btn=$_POST['enviar'];
if($btn==1)
{
if($media>=6)
{
    echo "($vp1 + $vp2)/2 = $media";
    echo "<br>O aluno $nome está APROVADO";
} else 
{
    echo "($vp1 + $vp2)/2 = $media";
    echo "<br>O aluno $nome está REPROVADO";
}
}
?>
