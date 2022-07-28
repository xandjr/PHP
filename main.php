<?php
/*==============================Atividades==============================*/

$funcionario = "Doug Viktor";
$salario = 1600;
$horas_semanais = 40;
$valor_hora = $salario/160;
$hora_extra = 5;
$valor_hora_extra = $valor_hora/2*$hora_extra;
echo ">>>>>> HOSPITAL PORTA DO CÉU <<<<<<\n\n";
echo "   Funcionário: $funcionario\n";
echo "   Mês:" . date('m') . "\n";
echo "   Horas Trabalhadas: " . ($hora_extra + $horas_semanais) . "\n";
echo "   Salário por Hora: R$" . $valor_hora . "\n";
echo "   Horas Extras: $hora_extra hrs\n";
echo "   Salário do Mês " . date('m') . ": R$" . ($salario + $valor_hora_extra) . "\n";

/*==============================Atividades==============================*/

$times = ["Flamengo", "Corinthians"];
$gols = [3, 1];
echo ">>>>> LIBERTADORES <<<<<\n\n";
echo "2º Jogo das Quartas de Finais\n\n";
echo "       Resultado:\n";
echo "$times[0] $gols[0] x $gols[1] $times[1]";

/*==============================Atividades==============================*/

$numeros = [5, 6];
if($numeros[0]==$numeros[1]){
	echo "Os números " . $numeros[0] . " e " . $numeros[1] . " são iguais.";
}
elseif($numeros[0]>$numeros[1]){
	echo "Entre os números " . $numeros[0] . " e " . $numeros[1] . ", o primeiro é maior.";
}
else{
	echo "Entre os números " . $numeros[0] . " e " . $numeros[1] . ", o segundo é maior.";
}

/*==============================Atividades==============================*/

for($numeros=1; $numeros<=10; $numeros++){
	echo "$numeros ";
}

/*==============================Atividades==============================*/

for($numeros=100; $numeros<=110; $numeros++){
	echo "$numeros ";
}