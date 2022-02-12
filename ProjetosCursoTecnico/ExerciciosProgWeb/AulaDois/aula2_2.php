<!--Atividade 2-->
<html>
    <header>
        <meta charset="UTF-8">
    </header>
    <body >

    <form action="aula2_2.php" method="POST">
        <label for="">Nome Completo</label><br>
        <input type=text name=nome placeholder="Digite seu nome completo"><br>
        <br><label for="">Curso</label><br>
        <select name=curso>
            <option value="">Selecione</option>
            <option value="i">Informatica</option>
            <option value="m">Mecanica</option>
            <option value="el">Eletro tecnica</option>
            <option value="ed">Edficaçoes</option>
            <option value="ma">Meio Ambiente</option>
        </select>
        <br>
        <br><label for="">Selecione o turno:</label><br>
        <label for="t1"><input name=turno type=radio value=m id=t1>Manha</label><br>
        <label for="t2"><input name=turno type=radio value=t id=t2>Tarde</label><br>
        <label for="t3"><input name=turno type=radio value=n id=t3>Noite</label><br>
        <br>
        <label for="">Materias que deseja cursar:</label><br>
        <label for="m1"><input type=checkbox name=materias value=portugues id=m1>Portugues</label><br>
        <label for="m2"><input type=checkbox name=materias value=matematica id=m2>Matematica</label><br>
        <label for="m3"><input type=checkbox name=materias value=historia id=m3>Historia</label><br>
        <label for="m4"><input type=checkbox name=materias value=geografia id=m4>Geografia</label><br>
        <div>
            <br><button  name=enviar value=1 type=submit>Enviar</button>
            <input type=reset name=apagar value=apagar><br>
        </div>
    </form>
    </body>
</html>

<?php
$nome=$_POST['nome'];
$btn=$_POST['enviar'];
$btn2=$_POST['apagar'];
if($btn==1)
{
if($_POST["turno"]=="m")
{
    echo "<br><span style='color:green;'>Matrícula efetuada com sucesso</span ";
} else if($_POST["turno"]=="t")
{
    echo "<br><i>Turno indisponível no momento</i>";
} else echo "<br><b>Matrícula deve ser confirmada em até 30 dias</b>";
}
if($btn2==2)
{
    echo"    ";
}
?>