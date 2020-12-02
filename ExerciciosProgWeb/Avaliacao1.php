<html>
     
    <header>
        <meta charset="UTF-8">
    </header>
    
    <body >
        <div>
            <h1>Ficha de Inscrição para duelos</h1>
        </div>

    <form action="Avaliacao1.php" method="POST">
        <table  border="0" >
            <tr>
                <td><label for="">Nome Completo</label></td>
                <td><input type=text name=nome placeholder="Digite seu nome completo"></td>
            </tr>
            <th></th><!--Essas linhas vazias são para criar um espaço entre os campos-->
            <tr>
                <td><label for="">CPF</label></td>
                <td><input type=text name=cpf placeholder="Digite seu CPF"></td>
            </tr>

            <th></th><!--Essas linhas vazias são para criar um espaço entre os campos-->
            <tr>
                <td><label for="">Data de nascimento</label></td>
                <td><input id=data name=data type=date></td>
            </tr>
            <th></th><!--Espaço entre os campos-->
            <tr>
                <td><label for="">Cidade</label></td>
                <td><input type=text name=cidade placeholder="Informe sua cidade natal"></td>
            </tr>
            <th></th><!--Espaço entre os campos-->
            <tr>
                <td><label for="">Selecione seu sexo</label></td>
                <td><label for="sexo1"><input name=sexo type=radio value=Masculino id=sexo1>Masculino</label>
                    <label for="sexo2"><input name=sexo type=radio value=Feminino id=sexo2>Feminino</label>
                    <label for="sexo3"><input name=sexo type=radio value=Indefinido id=sexo3>Outro</label>
                    <br>
                </td>
            </tr>
            <th></th><!--Espaço entre os campos-->
            <tr>
                <td><label for="">Nickname</label></td>
                <td><input type=text name=nickname placeholder="Informe seu nickname"></td>
            </tr>
            <th></th><!--Espaço entre os campos-->
            <tr>
                <td><label for="">Senha</label></td>
                <td><input type="password" id="pass" name="senha" placeholder="Informe sua senha"></td>
            </tr>
            <th></th><!--Espaço entre os campos-->
            <tr>
                <td><label for="">Estado</label></td>
                <td>
                    <select name=estado>
                        <option value="">Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </td>
            </tr>
            <th></th><!--Espaço entre os campos-->
            <tr>
                <td><label for="">Modalidades que deseja competir:</label></td>
                <td><label for="s1"><input name=modalidae type=radio value=1vs1 id=s1>1vs1</label>
                    <label for="s2"><input name=modalidae type=radio value=4v4 id=s2>4v4</label>
                    <label for="s3"><input name=modalidae type=radio value=Classificatorias id=s3>Classificatorias VR</label>
                    <label for="s3"><input name=modalidae type=radio value=4 id=Checkpoint>Checkpoint</label>
                    <br>
                </td>
            </tr>
            <th></th><!--Espaço entre os campos-->
            <tr>
                <td><label for="">Sobre sua equipe:</label></td>
                <td>
                    <label for="eq1"><input name=equipe type=radio value=completa id=eq1>Esta completa</label>
                    <label for="eq2"><input name=equipe type=radio value=incompleta id=eq2>Esta buscando mais mebros</label>
                    <label for="eq3"><input name=equipe type=radio value=buscando id=eq3>Estou buscando uma equipe</label>
                    <label for="eq4"><input name=equipe type=radio value=solo id=eq4>Irei jogar apenas o modo solo</label>
                </td>
            </tr>
        </table>
        <br>
        <div>
            <td><button  name=enviar value=1 type=submit>fazer Inscrição</button></td>
            
        </div>
    </form>

    </body>
</html>

<?php

    if(isset($_POST["cpf"]))
    {
        $nome=$_POST['nome'];
        $cpf=$_POST['cpf'];
        $nascimento=$_POST['data'];
        $cidade=$_POST['cidade'];
        $sexo= filter_input(INPUT_POST, 'sexo');
        $nick=$_POST['nickname'];
        $senha=$_POST['senha'];
        $estado=filter_input(INPUT_POST, 'estado');
        $modalidade=filter_input(INPUT_POST, 'modalidade');
        $equipe=filter_input(INPUT_POST, 'equipe');


       
        $conexao=mysqli_connect("200.143.198.37", "aluno35", "y8bivqewv6p");
        mysqli_select_db($conexao,"banco35");
        mysqli_query($conexao,"insert into av2 values('$cpf', '$nome', '$nascimento', '$cidade', '$sexo', '$nick', '$senha', '$estado', '$modalidade', '$equipe')");
        $teste = mysqli_query($conexao,"select * from av2");
        
        while($exibir = mysqli_fetch_array($teste))
        {
           
                echo "<br>CPF:".$exibir['cpf'];
                echo "<br>Nome:".$exibir['nome'];
                echo "<br>Nascimento:".$exibir['nascimento'];
                echo "<br>Cidade:".$exibir['cidade'];
                echo "<br>Sexo:".$exibir['sexo'];
                echo "<br>Nick:".$exibir['nick'];
                echo "<br>Senha:".$exibir['senha'];
                echo "<br>Estado:".$exibir['estado'];
                echo "<br>Modalidade:".$exibir['modalidade'];
                echo "<br>Equipe:".$exibir['equipe'];
                
          
        }
        
    mysqli_close($conexao);
    
    }
    
?>