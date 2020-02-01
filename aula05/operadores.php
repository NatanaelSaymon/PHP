<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Opreadores Aritmeticos</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/estilo.css" type="text/css">
    </head>

    <body>
        <div>
            <h1>Operações Aritmeticas em PHP</h1>

            <?php 
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];

                $soma = $n1 + $n2;
                $sub = $n1 - $n2;
                $mult = $n1 * $n2;
                $div = $n1 / $n2;
                $mod = $n1 % $n2;
                
                echo "<h2>Valores recebido: $n1 e $n2</h2>";
                echo "A Soma de $n1 e $n2 é $soma <br>";
                echo "A Subtração de $n1 e $n2 é $sub <br>";
                echo "A Multiplicação de $n1 e $n2 é $mult <br>";
                echo "A Divisão de $n1 e $n2 é $div <br>";
                echo "O Modulo de $n1 e $n2 é $mod <br>";
                echo "O valor absoluto de $n2 é " .abs($n2); /* VALOR ABSOLUTO */
                echo "<br>O valor de $n1<sup>$n2</sup> é " .pow($n1, $n2);
                echo "<br>A raiz quadrada de $n1 é " .sqrt($n1);
                echo "<br>O valor de $n2 arredondando é " .round($n2);
                echo "<br>A parte inteira de $n2 é " .intval($n2);
                echo "<br>O valor de $n1 em moeda é R$" .number_format($n1,2); 
            ?>
        </div>
    </body>
</html>