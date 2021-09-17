<?php
$password= 2536;

echo "Duas variáveis reais. ";
$a=20;
$b=2;

while($password == 2536){    
    
    if ($password == 2536){
        $res = $a / $b;
        printf ("<br> A resposta da divisão é: ".$res);
        break;
    } else {
        echo "<br> ERRO! Senha incorreta! ";
    }
}
?>