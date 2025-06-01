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
    require_once './classes.php';
    $browserUA = $_SERVER['HTTP_USER_AGENT'];
    if (isset($_POST["amount"]) && isset($_POST["crypto"])) {
        //Superglobal Vars
        $amount = $_POST["amount"];
        $crypto = $_POST["crypto"];


        $converter = new CryptoConverter($crypto);
        $result = $converter->convert($amount);

        echo "<p>You want to convert $amount $crypto.</p>";
        echo "<h2>You have USD $result</h2>";
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
