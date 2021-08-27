<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
#Este é um cometário
#echo "Agora da certo!!! "
/*
function teste(){
	$salario = 250000;
	$data = "26 de agosto de 2021";
	print ("<br> O salário imprimido diferente ". $salario);
	printf("<br> O salário do funcionário é %.3f <br>",$salario);
	printf("<br> A data de hoje é %s",$data);
}*/

/* function soma($a,$b){
	$soma = $a + $b;
	return $soma;
}
$result= soma(5,6);
echo $result;
*/

$num1=20;
function teste($num2){
	STATIC $num1;
	$operacao = $num1+$num2;
	return	$operacao;
}
$resp=teste(25);
echo $resp;
echo "<br>";
echo strlen($resp);

# GLOBAL - STATIC 

/*
teste();
*/


/*
$resultado = true;
if ($resultado){
	$x= "<br> Resultado é verdadeiro!!! ";
	echo $x;
}*/

#$teste = $teste1."olá mundo";
#echo ($teste."\n")
?>
</body>
</html>
