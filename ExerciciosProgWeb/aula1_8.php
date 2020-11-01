
    <!--Questao 8 da aula 6-->
    <!--Verifica a faixa do numero-->
    Verifica a faixa do numero<hr>
    
<?php

    $n=mt_rand(0, 1000);
    if ($n>=0 and $n<=100)
    {
    echo "Numero: ".$n."<br>Faixa 1: Entre 0 e 100";
    }else if ($n>=101 and $n<=1000){
        echo "Numero: ".$n."<br>Faixa 2: Entre 101 e 1000";
    }else echo "Numero: ".$n."<br>Faixa 3; Maior que 1000";
    
?>