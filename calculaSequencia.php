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
        if (isset($_REQUEST['limite']) && is_numeric($_REQUEST['limite'])) {

            $resultados = [1, 1];
            $limite = $_REQUEST['limite'] - 1;

            print "<h1>Resultados:";

            for ($contador = 2; $contador <= $limite; $contador ++) {
                $resultados[] = $resultados[$contador - 1] + $resultados[$contador - 2];
            }

            foreach ($resultados as $resultado)  {
                print "\n" . $resultado . "</h1>";
            }

        }
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</main>
</body>
</html>
