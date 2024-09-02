<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
    <link rel="stylesheet" href="../styles/atividade5.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h2>Cálculo da área do triângulo</h2>

            <label for="base_triangulo">Digite a medida da base do triângulo:</label>
            <br>
            <input type="number" name="base_triangulo" id="base_triangulo" required>
            <br>

            <label for="altura_triangulo">Digite a medida da altura do triângulo:</label>
            <br>
            <input type="number" name="altura_triangulo" id="altura_triangulo" required>
            <br>

            <button type="submit" name="calcular_area" id="botao-calcular">Calcular</button>
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (isset($_POST['calcular_area'])) {
                    $baseTriangulo = $_POST['base_triangulo'];
                    $alturaTriangulo = $_POST['altura_triangulo'];
                    
                    $areaTriangulo = ($baseTriangulo * $alturaTriangulo) / 2;
                    echo "A área do triângulo é igual a: ", $areaTriangulo, ".<br>";

                    if ($areaTriangulo > 100) {
                        echo "A área do triângulo ultrapassa o limite de 100.";
                    } else {
                        echo "A área do triângulo está dentro do limite de 100.";
                    }
                }

            }
        ?>
    </div>    
</body>
</html>