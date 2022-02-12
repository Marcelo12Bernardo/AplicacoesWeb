<!--Marcelo Bernardo Prudencio-->
<!--Apagar-->
<html>
<header>
        <meta charset="UTF-8">
        <title>Exclusão de Usuario</title> 
        <h1>Exclusão de Usuarios</h1>
    </header>
    <body >
    <form action="av2_apaga.php" method="POST">
    <label for="">Cpf:</label><br>
    <input type=text name=codigo placeholder="Digite o CPF do usuario a ser excluido"><br>
    <br><button  name=enviar value=1 type=submit>Excluir</button>
    <br><a href=av2.php><button  name=enviar value=1 type=submit>Voltar para aba principal</button></a>
    
    </form>
    </body>
</html>

<?php

    if(isset($_POST["cpf"]))
    {
        
        $cpf=$_POST['cpf'];
      
        $conexao=mysqli_connect("200.143.198.37", "aluno35", "y8bivqewv6p");
        mysqli_select_db($conexao,"banco35");
        mysqli_query($conexao,"delete from av2 where av2.cpf = '$cpf'");
        $teste = mysqli_query($conexao,"select * from cpf");
        
        while($exibir = mysqli_fetch_array($teste))
        {
            echo "<br>Nome:".$exibir['nome'];
                echo "<br>CPF: ".$exibir['cpf'];
                echo "<br>Data de nascimento: ".$exibir['nascimento'];
                echo "<br>Cidade Natal: ".$exibir['cidade'];
                echo "<br>Sexo: ".$exibir['sexo'];
                echo "<br>Nick: ".$exibir['nick'];
                echo "<br>Senha: ".$exibir['senha'];
                echo "<br>Estado: ".$exibir['estado'];
                echo "<br>Modalidade: ".$exibir['modalidade'];
                echo "<br>Estatus da Equipe: ".$exibir['equipe'];
                echo "<hr>";
        }
        
    mysqli_close($conexao);
    }
?>
