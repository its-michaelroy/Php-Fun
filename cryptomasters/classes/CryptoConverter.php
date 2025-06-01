<?php
class Converter {

}

interface CanConvert {
    public function convert(float $value);
}

class CryptoConverter extends Converter {
    //properties - Can be public/private/protected
    //php uses garbage collectors
    //Has both constructor/deconstructor
    function __construct(public string $currencyCode) {
        //$this->currencyCode = $currencyCode;
    }

    //methods
    public function convert(float $value): float|bool {
        $code = $this->currencyCode;
        $url = "https://cex.io/api/ticker/{$code}/USD";
        $json = file_get_contents($url);
        if ($json) {
            $data = json_decode($json, true);
            $last = $data['last'];
            return $value * $last;
    } else {
            throw new Exception("Failed to fetch data from API");
        }
    }
}
