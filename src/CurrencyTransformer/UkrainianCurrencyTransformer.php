<?php

namespace NumberToWords\CurrencyTransformer;

use NumberToWords\Legacy\Numbers\Words;

class UkrainianCurrencyTransformer implements CurrencyTransformer
{
    /**
     * @param int $amount
     * @param string $currency
     * @return string
     * @throws \NumberToWords\Exception\NumberToWordsException
     */
    public function toWords($amount, $currency)
    {
        $converter = new Words();

        return $converter->transformToCurrency($amount, 'ua', $currency);
    }

    /**
     * @param int $amount
     * @param string $currency
     * @param array $params - optional params for custom results.
     *      param 'writeZero' - output value even if it's zero, ex. 'zero dollars five cents'
     * @return string
     * @throws \NumberToWords\Exception\NumberToWordsException
     */
    public function toWordsOptional($amount, $currency)
    {
        $converter = new Words();

        return $converter->transformToCurrency($amount, 'ua', $currency);
    }
}
