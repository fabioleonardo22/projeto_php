<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <title>curso de php</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "o preco do produto e R$ $preco";
        $preco += $preco*10/100;
        echo "<br/> e o novo preco com 10% de aumento sera R$ $preco";
?>

<?php
    $atual = $_GET["aa"];
    echo "o ano atual e $atual e o ano anterior e " , $atual++;


?>

<?php
    $a = 3;
    $b  =  $a;
    $b  += 5;
    echo " a variavel A vale $a";
    echo "<br/> a variavel B vale $b";

?>



<?php
$x = "abc";
$$x = "def";
echo "o conteudo da variavel x e $x";
echo "a variavel abc criada recebeu o valor $abc";



?>

</body>
</html>