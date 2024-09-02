<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_primo">Verifica se é um número primo:</label>
        <input type="number" name="numero_primo" id="numero_primo" required>
        <button type="submit" name="verificar_primo">Enviar</button>
    </form>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['verificar_primo'])) {
                $numero = $_POST['numero_primo'];
                $ehPrimo = true;

                if ($numero <= 1) {
                    $ehPrimo = false;

                } else {
                    for ($i = 2; $i <= sqrt($numero); $i++) {
                        if ($numero % $i == 0) {
                            $ehPrimo = false;
                            break;
                        }
                    }
                }
                echo "O número $numero ", ($ehPrimo ? 'é primo' : 'não é primo');
            }
        }  
    
    ?>
</body>
</html>