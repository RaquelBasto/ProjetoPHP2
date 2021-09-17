<?php
/**1.     Criar um programa que receba o valor de um produto e um código de aumento, segundo a tabela: 

Código
Porcentagem
do aumento

1
10
3
25
4
30
8
50

Utilizando a estrutura switch-case, mostrar a saída o novo valor do produto depois de acrescida a porcentagem correspondente.

    */
  ?>
  
 <?php
 
 $cod=1;
 $valor= 100;
 
 switch ($cod){
     case 1:
        $acresc = ($valor * 1.10);
        $desc = $valor - ($valor * 10/100);

        printf ("</br>Você tem ". $desc . " de desconto! ");
        printf ("</br>Você tem ". $acresc. " de acréscimo! ");
        break;

    case 3:
        $acresc = ($valor * 1.25);
        $desc = $valor + ($valor * 25/100);
        printf ("</br>Você tem ".$desc." de desconto! ");
        printf ("</br>Você tem ".$acresc." de acréscimo! ");
        break;

    case 4:
        $acresc = ($valor * 1.10);
        $desc = $valor + ($valor * 30/100);
        printf ("</br>Você tem ".$desc." de desconto! ");
        printf ("</br>Você tem ".$acresc." de acréscimo! ");
        break;

    case 8:
        $acresc = ($valor * 1.50);
        $desc = $valor + (valor * 50/100);
        printf ("</br>Você tem ".$desc." de desconto! ");
        printf ("</br>Você tem ".$acresc." de acréscimo! ");
        break;

    

 }
    
 
 ?>