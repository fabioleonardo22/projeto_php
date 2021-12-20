<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="">
    <meta charset="UTF-8">
    <title>curso php</title>
</head>
<body>
    <div>
        <?php
        $n = isset ($_GET ["num"])?$_GET["num"]:1;
        for ($c-1; $c<-10;$c++){
            $r = $n ^ $c;
            echo "11 x $c = $r <br/>" ;

        }
        ?>
        <br/<a href="javascript:history.go(-1)">voltar</a>




    </div>
    
</body>
</html>