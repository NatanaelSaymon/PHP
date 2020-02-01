<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Curso de PHP - Opreadores</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/estilo.css" type="text/css">
    </head>

    <body>
        <div>
            <?php 
                $preco = $_GET["p"];
                echo "O preço do produto é R$ " .number_format($preco, 2);
                $preco = $preco + ($preco*10/100); //calculo de porcentagem "aumento"
                //$preco = $preco - ($preco*10/100); //calculo de porcentagem "desconto"
                echo "<br>Com o aumento de 10% ficou R$ " .number_format($preco, 2);
            ?>
        </div>
    </body>
</html>