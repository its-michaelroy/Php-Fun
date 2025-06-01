<?php
include("classes.php");

// if (!isset($_GET["code"])) {
//     $code = "BTC";
//     // echo "{'error': 'No code provided'}";

// } else {
//     $code = $_GET["code"];

//     }

$code = $_GET["code"] ?? "BTC"; // Default to BTC if no code is provided

$converter = getConverter();
$rateInUSD = $converter?->convert(); //safe call operator
echo "{'rate': $rateInUSD}";
