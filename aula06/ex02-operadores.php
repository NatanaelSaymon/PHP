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
                $atual = $_GET["ano_atual"];

                echo "O ano atual é $atual e o ano anterior é " .--$atual;

                // $autal++ é incremento
                // --$autal é decremento
            ?>
        </div>
    </body>
</html>