<?php


namespace NumberToWords\PartedCurrencyTransformer;


use NumberToWords\CurrencyTransformer\CurrencyOptionalTransformer;
use NumberToWords\Legacy\Numbers\Words;

class UkrainianPartedCurrencyTransformer implements CurrencyOptionalTransformer
{

    /**
     * @param int $amount
     * @param string $currency
     * @param array $params - optional params for custom results.
     *      param 'writeZero' - output value even if it's zero, ex. 'zero dollars five cents'
     * @return string
     * @throws \NumberToWords\Exception\NumberToWordsException
     */
    public function toWords($amount, $currency, array $params = [])
    {
        $converter = new Words();

        return $converter->transformToPartedCurrency($amount, 'ua', $currency, $params);
    }
}