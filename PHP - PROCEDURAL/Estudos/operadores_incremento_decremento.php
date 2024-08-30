<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <h3>Pós-incremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";// resultado será 7
    echo "O valor contido em a após o incremento é " . $a++ . "<br/>"; // resultado será 7 é feita após,
    echo "O valor atualizado é $a"; // resultado será 8

    

    ?>
    <h3>Pré-incremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a pré o incremento é " . ++$a . // resultado será 8"<br/>";
    echo "O valor atualizado é $a";

    ?>
    <h3>Pós-decremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a após o decremento é " . $a-- . "<br/>";
    echo "O valor atualizado é $a";

    ?>
    <h3>Pré-decremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a pré o decremento é " . --$a . "<br/>";
    echo "O valor atualizado é $a";

    ?>
</body>

</html>