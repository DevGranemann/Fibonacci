<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sequência de Fibonacci</title>
</head>
<body>
<main>
    <?php

        $primeiroValor = 0;
        $segundoValor = 1;
        $contador;
        $limite = $_REQUEST['limite'];

        print "<h2>Os primeiros $limite da sequência de Fibonacci são:</h2>";
        print "<p>$primeiroValor, $segundoValor";

        for ($contador = 3; $contador <= $limite; $contador ++) {
            
            $resultado = $primeiroValor + $segundoValor;

            print ", $resultado";

            $primeiroValor = $segundoValor;
            $segundoValor = $resultado;
        }

        print "</p>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</main>
</body>
</html>
