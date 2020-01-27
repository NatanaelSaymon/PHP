<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Ola mundo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/estilo.css" type="text/css">
        <style>
            *{
                font-family: arial;
            }
        </style>
    </head>

    <body>
        <div>
            <h1>Variaveis em PHP</h1>

            <?php 
                $idade = 28;
                $nome = (string)"Natanael";
                echo $nome. " tem ". $idade. " anos! <br>";
                echo "$nome tem $idade anos!";
            ?>
        </div>
    </body>
</html>