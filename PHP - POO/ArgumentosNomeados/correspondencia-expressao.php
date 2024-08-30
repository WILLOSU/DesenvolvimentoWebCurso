<?php
$busca = 35;

switch ($busca) { // comparação por igualdade/equalidade (==)
    case '1':
        $retornoSwitch = 'Encontrou o texto 1';
        break;

        case 2:
            $retornoSwitch = 'Encontrou o número 2';
            break;    
    
    default:
    $retornoSwitch = 'Não Encontrou';
      

}

echo "Resultado Switch: ".$retornoSwitch;
echo "<hr>";

// COMPARANDO POR IDENTIDADE

/*

$retornoMatch = match($busca){
    '1' => 'Encontrou o texto 1',
    1 => 'Encontrou o número 1',
    5, '8', 12, 'X' => 'Encontrou o valor 5 ou 12, ou os textos 8 ou X',
    default => 'Não encontrado!!'

};

*/

// Match com condicionais e operações lógicas

// usando ternário
$retornoMatch = match(true){
    $busca < 20 => 'Encontrou',
    $busca >= 20 && $busca <= 30 => 'Encontrou um valor maior que 20 e menor que 30',
    default =>'Não Encontrou'


};

echo "Resultado match: ".$retornoMatch;





?>