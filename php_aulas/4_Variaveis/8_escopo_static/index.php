<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
Function contador   () {
    static $contagem = 0;
    echo "$contagem <br>";
    $contagem++;

    echo "contagem atual: $contagem <br>";

}
contador(); // imprime contagem atual: 0
contador(); // imprime contagem atual: 1
contador(); // imprime contagem atual: 2
?>
</body>
</html>''