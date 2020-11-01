
<!--Questao 5 da aula 6-->
<!--Verifica se é nulo, positivo ou negativo-->
Verifica numeros<hr>
<?php

    $n1= mt_rand(-1000, 1000);
    
    if ($n1==0)
    {
        echo "Nulo";
    }else if ($n1<0){
        echo "Negativo";
    }else echo "Positivo";
?>