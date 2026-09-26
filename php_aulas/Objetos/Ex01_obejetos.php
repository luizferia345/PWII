<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>
</head>
<body>
    <?php

    /*OBJETOS
    PHP possui o paradigma de orientação a objetos
     */

     class Pesosoa {

        function falar(){
        echo "Olá pessoal!";
     }
    }

    $patricia = new Pessoa();

    $patricia->nome = "Patricia";

    echo $patricia->nome;

    echo "<br>";

    $patricia->falar();
    
    ?>
</body>
</html>