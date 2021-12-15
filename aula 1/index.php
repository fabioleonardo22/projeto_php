<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/estilo.css">
    <title>operacoes aritmeticas</title>
</head>
<body>
<div>
    <?php
    $n1 = $_GET ["a"];
    $N2 = $_GET ["b"];
    echo "<h2> valores recebido: $n1 e $n2</h2>";
    $m = ($n1 + $n2) / 2;
    echo "a soma vale". ($n1+$n2);
    echo "<br/>A subtracao vale". ($n1-$n2);
    echo "<br/>A multiplicacao vale". ($n1*$n2);
    echo "<br/>A divisao vale". ($n1/$n2);
    echo "<br/>O modulo vale". ($n1%$n2);
    echo "<br/>A media vale $m";
    ?>

<?php
 $v1 = $_GET ["x"];
 $v2 = $_GET ["y"];
 echo "<h2> valores recebido: $v1 e $v2</h2>";
 echo "o valor absoluto de $v2 e " . abs($v2);
 echo "<br/> o valor de $sv1<sup> $sv2</sup> e " . pow($v1,$v2);
 echo "<br/> a raiz de $sv1 e " . sqrt($v1);
 echo "<br/> o valor de $sv2 arredondado e " . round($v2);
 echo "<br/> a parte inteira de $sv2 e " . intval($v2);
 echo "<br/> o valor $sv1 em moeda  e " . number_format($v1,2);
?>


</div>
    
</body>
</html>