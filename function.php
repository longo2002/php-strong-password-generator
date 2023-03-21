<?php

$data = $_GET;

$length = $_GET["length"];
$useUppercase = boolval($_GET["useUppercase"]);
$useLowercase = boolval($_GET["useLowercase"]);
$useNumbers = boolval($_GET["useNumbers"]);
$useSymbols = boolval($_GET["useSymbols"]);

function generatePassword($length, $useLowercase = true, $useUppercase = true, $useNumbers = true, $useSymbols = true) {
    $chars = '';
    if ($useLowercase) {
        $chars .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if ($useUppercase) {
        $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($useNumbers) {
        $chars .= '0123456789';
    }
    if ($useSymbols) {
        $chars .= '!@#$%^&*()_+-=[]{}|;:,.<>?';
    }
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
}

$password = generatePassword($length, $useLowercase, $useUppercase , $useNumbers , $useSymbols)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Generatore di password</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Generatore di password</h1>
            <div class="form_container">
                <form method="GET" action="./function.php">
                    <label for="length">Lunghezza:</label>
                    <input type="number" name="length" id="length" min="8" max="64" value="16" required>

                    <label for="uppercase">Maiuscole:</label>
                    <input type="checkbox" name="useUppercase" id="uppercase" checked>

                    <label for="lowercase">Minuscole:</label>
                    <input type="checkbox" name="useLowercase" id="lowercase" checked>

                    <label for="numbers">Numeri:</label>
                    <input type="checkbox" name="useNumbers" id="numbers" checked>

                    <label for="symbols">Simboli:</label>
                    <input type="checkbox" name="useSymbols" id="symbols" checked>

                    <input class="btn" type="submit" value="Genera">
                </form>
            <h1>
            <?php echo $password ?>
            </h1>
            </div>
        </div>
    </div>
</body>

</html>