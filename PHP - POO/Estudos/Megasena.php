<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>


<!-- 
1) Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos
numéricos aleatórios entre 1 e 60, simulando o funcionamento do sorteio da mega sena. Atente-se ao
fato de que os números aleatórios contidos dentro do array não podem ser repetidos.





-->
<body>
    <?php

        $numeros = array();
        while(count($numeros) <= 5){
        $num = rand(1, 60);
            if(!in_array($num, $numeros)) {
                $numeros[] = $num;
            }
        }    
            print_r($numeros) ;
    
    ?>
</body>

</html>