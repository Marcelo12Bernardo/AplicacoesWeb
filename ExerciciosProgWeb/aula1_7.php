
    <!--Questao 7 da aula 6-->
    <!--Verifica se os numeros sao iguais ou diferentes-->
    Verifica se os numeros sao iguais ou diferentes<hr>
   
<?php
    $n1=mt_rand(-1000, 1000);
    $n2=mt_rand(-1000, 1000);
    
    
    if ($n1==$n2)
    {
    echo "São iguais";
    }else echo "São diferentes";
    
?>