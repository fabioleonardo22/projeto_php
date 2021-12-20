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
            function soma () {
                $p = func_get_args(); 
                $t = func_num_args();
                $s = 0;
                for ($i=0; $i<$t; $i++){
                    $s += $p[$i];
                }
                return $s;
            }


         $r = Soma(3,5,2,4);
         echo "a soma dos valores e $r";
        ?>







    </div>
    
</body>
</html>