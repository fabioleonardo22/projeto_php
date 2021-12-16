<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="" href="">
    <title>cursos php</title>
</head>
<body>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date ("Y") - $a;
        echo"voce nasceu em $a e tera $i anos. <br/>";
        if ($i < 16) {
            $tipovoto = " nao vota";

        }
elseif (($i >= 16 && $i < 18) || ($>65)) {
      $tipovoto = "voto opcional";
}
else {
    $tipovoto = "voto obrigatorio ";
}
echo "para essa idade, $tipovoto";

    ?>
    
</body>
</html>



