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
    public function convert(float $value) {

    }
    }
