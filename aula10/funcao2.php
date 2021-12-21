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

            $p = "leite";
            $pr = 4.5;
             echo " o $p custa R$" . number_format($p,2);
             printf ("o %s custa R$ %.2f",$p, $pr);



            $nome = "fabio leonardo";
            $nome2 = strtolower($nome);
            echo "seu nome e $nome2";


            $nome = "fabio leonardo";
            $nome2 = strtoupper($nome);
            echo "seu nome e $nome2";



            $nome = "fabio leonardo";
            $nome2 = ucfirst(strtoupper ($nome));
            echo "seu nome e $nome2";



            $nome = "fabio leonardo";
            $nome2 = ucwords($nome);
            echo "seu nome e $nome2";


            $nome = "fabio leonardo";
            print(strrev($nome));



            $frase = "estou aprendendo PHP";
            $pos = stripos ($frase, "PHP");
            echo "$frase <br/> a string foi encontrada na posiçao $pos";



            $frase = "estou aprendendo PHP no curso em videos de PHP";
            $cont = substr_count($frase,"PHP");
            print("PHP encontrado $cont vezes");




            $nome = "fabio leonardo";
            $novo = str_pad($nome,30,"",STR_PAD_RIGHT);













        ?>









    </div>
    
</body>
</html>