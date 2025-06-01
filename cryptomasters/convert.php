<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversion Results</h1>

    <?php
    //Superglobal Vars
    $amount = $_GET["amount"];
    $crypto = $_GET["crypto"];

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
