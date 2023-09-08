<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $altura = ($_POST['altura'] / 100);
    $peso = ($_POST['peso']);


    $imc = ($peso / $altura ** 2);
    $test = "";

    if ($imc < 18.5) {
        $text = "You are thin";
    } elseif ($imc < 24.5) {
        $text = "You are normal";
    } elseif ($imc < 29.9) {
        $text = "You are overweight I";
    } elseif ($imc < 34.9) {
        $text = "You are obese I";
    } elseif ($imc < 39.9) {
        $text = "You are obese II";
    } else {
        $text = "You are morbidly obese III";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/imc.css">
    <title>Document</title>
</head>

<body>
    <form action="../php/imc.php" method="POST">
        <div class="container">
            <h1 class="h-1">Calculator</h1>
            <div class="all-input">
                <span> Altura(cm):</span> <input type="text" name='altura' id="altura" required>
            </div>
            <div class="all-input">
                <span>Peso(kg):</span> <input type="text" name='peso' id="peso" required>
            </div>
            <div id="button">
                <input type="submit" id="button" value="Calcular">
                <div id="text-area">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        echo $text;
                    }
                    ?>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
