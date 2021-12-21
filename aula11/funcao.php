<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $n = array (3,8,5,2);
            $n[] = 7;
            print_r($n);
        ?>

    </div>


        <pre>
            <table border="1"><tr>
        <?php
            $c = range (5,20,2);
            foreach ($c as $v){
                echo "<td>$v";
            }
        ?>
            </table>
        </pre>


        <?php
            $v = array ("nome" => "ana",
                        "idade" => 23,
                        "peso"  => 65.5);
            foreach($v as $k => $c) {
                echo "o campo $k possui o conteudo $c <br/>";
            }           
        ?>


<div>
    <?php
     $m = array (3,
                 4,  
                 5);
    ?>






</div>




  
    
</body>
</html>