<?php

$data = $_GET;

$length = $_GET["length"];
$useUppercase = boolval($_GET["useUppercase"]);
$useLowercase = boolval($_GET["useLowercase"]);
$useNumbers = boolval($_GET["useNumbers"]);
$useSymbols = boolval($_GET["useSymbols"]);

function generatePassword($length, $useLowercase = false, $useUppercase = false, $useNumbers = false, $useSymbols = false) {
    $chars = '';
    if ($useLowercase === true) {
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
            <h1>
            La tua password é:
            <?php echo $password ?>
            </h1>
            </div>
        </div>
    </div>
</body>

</html>