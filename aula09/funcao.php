<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="">
    <meta charset="UTF-8">
    <title>cursos php</title>
</head>
<body>
    <div>
    <?php
        function teste (&$x) {
            $x += 2;
            echo "<p> o valor de X e $x </p>";
        }

        $a = 3;
        teste ($a);
        echo "<p> o valor de A e $a </p>"
        
        ?>





    </div>
    
</body>
</html>