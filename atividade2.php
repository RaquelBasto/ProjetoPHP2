<?php

$horasTrabalhadas = 1000;
$salHora = 50;
$numDeDepen = 2;

$salarioBruto = $horasTrabalhadas* $salHora / (50* $numDeDepen);
printf ("Esse é o sálario bruto: R$ ".$salarioBruto);

#Desconto inss
if ($salarioBruto <= 1000){
    $inss= $salarioBruto*8.5/100;
    printf ("<br> Desconto INSS: R$ ".$inss);

} elseif ($salarioBruto > 1000){
    $inss= ($salarioBruto*9/100);
    printf ("<br> Desconto INSS: R$ ".$inss);
}


#Desconto IR
if($salarioBruto <= 500){
    $ir = 0;
    printf ("<br> Desconto IR: R$ ".$ir);

}elseif($salarioBruto > 500 and $salarioBruto <= 1000){
    $ir = $salarioBruto * 5 / 100;
    printf ("<br> Desconto IR: R$ ".$ir);
}else {
    $ir = $salarioBruto * 7 / 100;
    printf ("<br> Desconto IR: R$ ".$ir);
}


?>