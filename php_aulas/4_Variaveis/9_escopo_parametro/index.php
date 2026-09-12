<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function calculardesconto($valor, $desconto) {
    $valorfinal = $valor - ($valor * ($desconto / 100));
    return $valorfinal;
}
echo calculardesconto(100, 10); // Saída: 90
 ?>
</body>
</html>