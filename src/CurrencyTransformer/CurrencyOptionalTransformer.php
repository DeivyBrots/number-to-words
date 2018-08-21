<?php


namespace NumberToWords\CurrencyTransformer;


interface CurrencyOptionalTransformer
{
    public function toWordsOptional($amount, $currency, array $params = []);
}