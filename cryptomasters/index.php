<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Masters</title>
</head>
<body>
    <h1>Crypto Masters</h1>
    <form action=convert.php>
        <label for="amount">Amount:</label>
        <input id="amount" name="amount" type="number">
        <label for="crypto">Cryptocurrency</label>
        <select id="crypto" name="crypto">
            <option value="BTC">Bitcoin (BTC)</option>
            <option value="ETH">Ethereum (ETH)</option>
            <option value="LTC">Litecoin (LTC)</option>
        </select>
        <br>
        <button type="submit">Convert</button>
    </form>
</body>
</html>
