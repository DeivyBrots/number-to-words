<?php


namespace NumberToWords\CurrencyTransformer;


interface CurrencyOptionalTransformer
{
    public function toWords($amount, $currency, array $params = []);
}