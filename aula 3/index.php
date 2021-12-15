<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="">
    <title>curso de php</title>
</head>
<body>
    <div>
        <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor)
        echo"a raiz de $valor e igual a " . number_format($rq,2);
        ?>
        <a href="01exercicios.html" >voltar</a>
        




    </div>
    
</body>
</html>