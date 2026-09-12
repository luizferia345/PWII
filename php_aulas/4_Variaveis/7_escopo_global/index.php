<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
   $teste = "asd";
    echo "$teste global 1 <br>";
    if (5 > 2) {        
        $teste = "qwe";
        echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

function funcao() {
    $teste = "zxc";
    echo "$teste local <br>";
}
funcao();
function testandoglobal() {
    global $teste;
    $teste = "rty";
    echo "$teste local 2 <br>";
}
testandoglobal();
?>


</body>
</html>