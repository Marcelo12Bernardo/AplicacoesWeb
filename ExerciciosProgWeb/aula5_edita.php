<!--Marcelo Bernardo Prudencio-->
<!--Editar-->
<html>
<header>
        <meta charset="UTF-8">
        <title>Edita Cursos</title> 
        <h1>Edita Cursos</h1>
    </header>
    <body >
    <form action="aula5_edita.php" method="POST">
    <label for="">Código:</label><br>
    <input type=text name=codigo placeholder="Digite o código do curso"><br>
    <label for="">Novo Preço:</label><br>
    <input type=text name=newpreco placeholder="Novo Preço do curso"><br>
    <br><button  name=enviar value=1 type=submit>Editar</button>
    
    </form>
    </body>
</html>

<?php

    if(isset($_POST["codigo"]))
    {
        $Codigo=$_POST['codigo'];
        $newpreco=$_POST['newpreco'];

        $conexao=mysqli_connect("200.143.198.37", "aluno35", "y8bivqewv6p");
        mysqli_select_db($conexao,"banco35");
        mysqli_query ($conexao,"update cursos set preco = '$newpreco' where idcursos = $Codigo");
        $teste = mysqli_query($conexao,"select * from cursos");
        
        while($exibir = mysqli_fetch_array($teste))
        {
           
                echo "<br>Código:".$exibir['idcursos'];
                echo "<br>Nome:".$exibir['nome'];
                echo "<br>Turno:".$exibir['turno'];
                echo "<br>Preço:".$exibir['preco'];
                if($newpreco >= 1000){echo "<br>Curso pode ser parcelado";} 
                echo "<hr>";
          
        }
        
    mysqli_close($conexao);
    }
?>
