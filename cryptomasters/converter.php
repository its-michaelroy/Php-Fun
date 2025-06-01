<?php
class Converter {

}

class CryptoConverter extends Converter{
    //properties - Can be public/private/protected
    //php uses garbage collectors
    //Has both constructor/deconstructor
    function __construct(public string $currencyCode) {
        //$this->currencyCode = $currencyCode;
    }

    //methods
    public function convert(float $value) {

    }
    }

    $c = new CryptoConverteer(currencyCode: "BTC");
