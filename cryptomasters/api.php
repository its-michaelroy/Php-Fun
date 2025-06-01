<?php
include("classes.php");

// Export a JSON to the client
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$code = $_GET["code"] ?? "BTC";

$converter = new CryptoConverter($code);
$rateInUSD = $converter->convert(); //safe call operator
echo "{\"rate\": $rateInUSD}";
