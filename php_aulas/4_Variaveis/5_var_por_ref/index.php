<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conta = 100;
    $clone = &$conta; // A variável $clone é uma referência para $conta

    $clone= 200; // Alterando o valor de $clone também altera $conta
    echo $conta; // Saída: 200

    function adicionar(&$valor) {
        $valor += 10; // Adiciona 10 ao valor passado por referência
    }
    $numero = 50;
    adicionar($numero);
    echo $numero; // Saída: 60
    $meusalario = 1000;
    function aumentarsalario(&$salario, $percentual) {
        $salario += $salario * ($percentual / 100); // Aumenta o salário em um percentual
    }
    aumentarsalario($meusalario, 10);
    echo $meusalario; // Saída: 1100
?>

</body>
</html>