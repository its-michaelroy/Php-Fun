<?php
    include_once 'classes/converter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Conversion Results</h1>

    <?php
    require_once 'classes/converter.php';
    $browserUA = $_SERVER['HTTP_USER_AGENT'];
    if (isset($_POST["amount"]) && $amount > 0 && isset($_POST["crypto"])) {
        //Superglobal Vars
        $amount = $_POST["amount"];
        $crypto = $_POST["crypto"];


        $converter = new Converter($crypto);
    }

    echo "<p>Converting $amount $crypto ...</p>";
    // Simulated conversion rates
    $conversionRates = [
        "BTC" => 50000, // 1 BTC = $50,000
        "ETH" => 3000,  // 1 ETH = $3,000
        "LTC" => 200     // 1 LTC = $200
    ];
    if (array_key_exists($crypto, $conversionRates)) {
        $convertedAmount = $amount * $conversionRates[$crypto];
        echo "<p>$amount $crypto is equivalent to $" . number_format($convertedAmount, 2) . "</p>";
    } else {
        echo "<p>Invalid cryptocurrency selected.</p>";
    }
    ?>
</body>
</html>
