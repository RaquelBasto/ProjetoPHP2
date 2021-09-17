<?php
    $valorDaHoraAula = 35.00;
    $numAulaDadaMes= 25;
    
    $salarioLiquid = $valorDaHoraAula * $numAulaDadaMes;
   
    printf ("<br> Valor das horas de aula: R$ ".$valorDaHoraAula);
    printf ("<br> Número de aulas dada no mês: ".$numAulaDadaMes);
    printf ("<br> O salário do(a) professor(a) é: R$ ".$salarioLiquid);
    #Desconto inss
    if ($salarioLiquid <= 1000){
        $inss= $salarioLiquid*8.5/100;
        printf ("<br> Desconto INSS: R$ ".$inss);

    } elseif ($salarioLiquid > 1000){
        $inss= ($salarioLiquid*9/100);
        printf ("<br> Desconto INSS: R$ ".$inss);
    }

    
?>