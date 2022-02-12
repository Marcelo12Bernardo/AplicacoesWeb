<!--Questao 4 da aula 6-->
<!--Calcula media do aluno-->
Calculo da media do aluno<hr>
<?php

    $n1=8;
    $n2=6;
    $m=($n1+$n2)/2;
    if ($m>=6)
    {
        echo "Resultado: (".$n1."+".$n2.")/2 = ".$m."  -<b>Aprovado</b>";
    }else echo "Resultado: (".$n1."+".$n2.")/2 = ".$m."  -<i>Reprovado</i>";
?>
