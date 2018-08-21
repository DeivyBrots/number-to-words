<?php

namespace NumberToWords\Legacy\Numbers\Words\Locale;

use NumberToWords\Exception\NumberToWordsException;
use NumberToWords\Legacy\Numbers\Words;

class Ru extends Words
{
    const LOCALE               = 'ru';
    const LANGUAGE_NAME        = 'Russian';
    const LANGUAGE_NAME_NATIVE = 'Русский';
    const MINUS                = 'минус';

    const MALE   = 0;
    const FEMALE = 1;
    const NEUTER = 2;

    protected $zero = 'ноль';

    protected static $ten = [
        self::MALE => ['', 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'],
        self::FEMALE => ['', 'одна', 'две', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'],
    ];

    protected static $teens = [
        'десять',
        'одиннадцать',
        'двенадцать',
        'тринадцать',
        'четырнадцать',
        'пятнадцать',
        'шестнадцать',
        'семнадцать',
        'восемнадцать',
        'девятнадцать',
    ];

    protected static $tens = [
        2 => 'двадцать',
        'тридцать',
        'сорок',
        'пятьдесят',
        'шестьдесят',
        'семьдесят',
        'восемьдесят',
        'девяносто',
    ];

    protected static $hundred = [
        '',
        'сто',
        'двести',
        'триста',
        'четыреста',
        'пятьсот',
        'шестьсот',
        'семьсот',
        'восемьсот',
        'девятьсот',
    ];

    protected static $mega = [
        [3 => self::FEMALE],
        [3 => self::MALE],
        ['тысяча', 'тысячи', 'тысяч', self::FEMALE],
        ['миллион', 'миллиона', 'миллионов', self::MALE],
        ['миллиард', 'милиарда', 'миллиардов', self::MALE],
        ['триллион', 'триллионы', 'триллионов', self::MALE],
        ['квадриллион', 'квадриллиона', 'квадриллионов', self::MALE],
        ['секстиллион', 'секстильоны', 'секстиллионов', self::MALE],
    ];


    protected static $currencyNames = [
        'ALL' => [
            [self::MALE, 'лек', 'лека', 'леков'],
            [self::FEMALE, 'киндарка', 'киндарки', 'киндарок']
        ],
        'AUD' => [
            [self::MALE, 'австралийский доллар', 'австралийских доллара', 'австралийских долларов'],
            [self::MALE, 'цент', 'цента', 'центов']
        ],
        'BGN' => [
            [self::MALE, 'лев', 'лева', 'левов'],
            [self::FEMALE, 'стотинка', 'стотинки', 'стотинок']
        ],
        'BRL' => [
            [self::MALE, 'бразильский реал', 'бразильских реала', 'бразильских реалов'],
            [self::MALE, 'сентаво', 'сентаво', 'сентаво']
        ],
        'BYN' => [
            [self::MALE, 'белорусский рубль', 'белорусских рубля', 'белорусских рублей'],
            [self::FEMALE, 'копейка', 'копейки', 'копеек']
        ],
        'BYR' => [
            [self::MALE, 'белорусский рубль', 'белорусских рубля', 'белорусских рублей'],
            [self::FEMALE, 'копейка', 'копейки', 'копеек']
        ],
        'CAD' => [
            [self::MALE, 'канадский доллар', 'канадских доллара', 'канадских долларов'],
            [self::MALE, 'цент', 'цента', 'центов']
        ],
        'CHF' => [
            [self::MALE, 'швейцарский франк', 'швейцарских франка', 'швейцарских франков'],
            [self::MALE, 'сантим', 'сантима', 'сантимов']
        ],
        'CYP' => [
            [self::MALE, 'кипрский фунт', 'кипрских фунта', 'кипрских фунтов'],
            [self::MALE, 'цент', 'цента', 'центов']
        ],
        'CZK' => [
            [self::FEMALE, 'чешская крона', 'чешских кроны', 'чешских крон'],
            [self::MALE, 'галирж', 'галиржа', 'галиржей']
        ],
        'DKK' => [
            [self::FEMALE, 'датская крона', 'датских кроны', 'датских крон'],
            [self::MALE, 'эре', 'эре', 'эре']
        ],
        'EEK' => [
            [self::FEMALE, 'эстонская крона', 'эстонских кроны', 'эстонских крон'],
            [self::MALE, 'сенти', 'сенти', 'сенти']
        ],
        'EUR' => [
            [self::MALE, 'евро', 'евро', 'евро'],
            [self::MALE, 'евроцент', 'евроцента', 'евроцентов']
        ],
        'GBP' => [
            [self::MALE, 'фунт стерлингов', 'фунта стерлингов', 'фунтов стерлингов'],
            [self::MALE, 'пенс', 'пенса', 'пенсов']
        ],
        'HKD' => [
            [self::MALE, 'гонконгский доллар', 'гонконгских доллара', 'гонконгских долларов'],
            [self::MALE, 'цент', 'цента', 'центов']
        ],
        'HRK' => [
            [self::FEMALE, 'хорватская куна', 'хорватских куны', 'хорватских кун'],
            [self::FEMALE, 'липа', 'липы', 'лип']
        ],
        'HUF' => [
            [self::MALE, 'венгерский форинт', 'венгерских форинта', 'венгерских форинтов'],
            [self::MALE, 'филлер', 'филлера', 'филлеров']
        ],
        'ISK' => [
            [self::FEMALE, 'исландская крона', 'исландских кроны', 'исландских крон'],
            [self::MALE, 'эре', 'эре', 'эре']
        ],
        'JPY' => [
            [self::FEMALE, 'иена', 'иены', 'иен'],
            [self::FEMALE, 'сена', 'сены', 'сен']
        ],
        'KZT' => [
            [0, 'казахский тенге', 'казахских тенге', 'казахских тенге'],
            [self::MALE, 'тиын', 'тиына', 'тиынов']
        ],
        'LTL' => [
            [self::MALE, 'лит', 'лита', 'литов'],
            [self::MALE, 'цент', 'цента', 'центов']
        ],
        'LVL' => [
            [self::MALE, 'лат', 'лата', 'латов'],
            [self::MALE, 'сентим', 'сентима', 'сентимов']
        ],
        'MKD' => [
            [self::MALE, 'македонский динар', 'македонских динара', 'македонских динаров'],
            [self::MALE, 'дени', 'дени', 'дени']
        ],
        'MTL' => [
            [self::FEMALE, 'мальтийская лира', 'мальтийских лиры', 'мальтийских лир'],
            [self::MALE, 'сентим', 'сентима', 'сентимов']
        ],
        'NOK' => [
            [self::FEMALE, 'норвежская крона', 'норвежских кроны', 'норвежских крон'],
            [0, 'эре', 'эре', 'эре']
        ],
        'PLN' => [
            [self::MALE, 'злотый', 'злотых', 'злотых'],
            [self::MALE, 'грош', 'гроша', 'грошей']
        ],
        'ROL' => [
            [self::MALE, 'румынский лей', 'румынских лей', 'румынских лей'],
            [self::MALE, 'бани', 'бани', 'бани']
        ],
        'RUB' => [
            [self::MALE, 'рубль', 'рубля', 'рублей'],
            [self::FEMALE, 'копейка', 'копейки', 'копеек']
        ],
        'RUR' => [
            [self::MALE, 'российский рубль', 'российских рубля', 'российских рублей'],
            [self::FEMALE, 'копейка', 'копейки', 'копеек']
        ],
        'SEK' => [
            [self::FEMALE, 'шведская крона', 'шведских кроны', 'шведских крон'],
            [self::MALE, 'эре', 'эре', 'эре']
        ],
        'SIT' => [
            [self::MALE, 'словенский толар', 'словенских толара', 'словенских толаров'],
            [self::FEMALE, 'стотина', 'стотины', 'стотин']
        ],
        'SKK' => [
            [self::FEMALE, 'словацкая крона', 'словацких кроны', 'словацких крон'],
            [0, '', '', '']
        ],
        'TRL' => [
            [self::FEMALE, 'турецкая лира', 'турецких лиры', 'турецких лир'],
            [self::MALE, 'пиастр', 'пиастра', 'пиастров']
        ],
        'TMT' => [
            [self::MALE, 'манат', 'маната', 'манатов'],
            [self::MALE, 'тенге', 'тенге', 'тенге']
        ],
        'UAH' => [
            [self::FEMALE, 'гривна', 'гривны', 'гривен'],
            [self::FEMALE, 'копейка', 'копейки', 'копеек']
        ],
        'USD' => [
            [self::MALE, 'доллар США', 'доллара США', 'долларов США'],
            [self::MALE, 'цент', 'цента', 'центов']
        ],
        'YUM' => [
            [self::MALE, 'югославский динар', 'югославских динара', 'югославских динаров'],
            [self::MALE, 'пара', 'пара', 'пара']
        ],
        'ZAR' => [
            [self::MALE, 'ранд', 'ранда', 'рандов'],
            [self::MALE, 'цент', 'цента', 'центов']
        ]
    ];

    /**
     * @param int    $n
     * @param string $f1
     * @param string $f2
     * @param string $f5
     *
     * @return string
     */
    public function morph($n, $f1, $f2, $f5)
    {
        $n = abs((int) $n) % 100;
        if ($n > 10 && $n < 20) {
            return $f5;
        }
        $n = $n % 10;
        if ($n > 1 && $n < 5) {
            return $f2;
        }
        if ($n == 1) {
            return $f1;
        }

        return $f5;
    }

    /**
     * @param int $number
     *
     * @param int $gender
     * @return string
     */
    protected function toWords($number, $finalGender = self::MALE)
    {
        if ($number === 0) {
            return $this->zero;
        }

        $out = [];

        if ($number < 0) {
            $out[] = static::MINUS;
            $number *= -1;
        }

        $megaSize = count(static::$mega);
        $signs = $megaSize * 3;

        // $signs equal quantity of zeros of the biggest number in self::$mega
        // + 3 additional sign (point and two zero)
        list ($unit, $subunit) = explode('.', sprintf("%{$signs}.2F", (float) $number));

        foreach (str_split($unit, 3) as $megaKey => $value) {
            if (!(int) $value) {
                continue;
            }

            $megaKey = $megaSize - $megaKey - 1;
            $gender = $megaKey > 1 ? static::$mega[$megaKey][3] : $finalGender;
            list ($i1, $i2, $i3) = array_map('intval', str_split($value, 1));
            // mega-logic
            $out[] = static::$hundred[$i1]; # 1xx-9xx

            if ($i2 > 1) { # 20-99
                $out[] = static::$tens[$i2] . ' ' . static::$ten[$gender][$i3];
            } else { # 10-19 | 1-9
                $out[] = ($i2 > 0) ? static::$teens[$i3] : static::$ten[$gender][$i3];
            }

            if ($megaKey > 1) {
                $out[] = $this->morph($value, static::$mega[$megaKey][0], static::$mega[$megaKey][1], static::$mega[$megaKey][2]);
            }
        }

        return trim(preg_replace('/\s+/', ' ', implode(' ', $out)));
    }

    /**
     * @param string $currency
     * @param int    $decimal
     * @param int    $fraction
     * @param array  $params
     *
     * @throws NumberToWordsException
     * @return string
     */
    public function toCurrencyWords($currency, $decimal, $fraction = null, $params = [])
    {
        $currency = strtoupper($currency);
        $writeZero = isset($params['writeZero']) && $params['writeZero'] === true;

        if (!array_key_exists($currency, static::$currencyNames)) {
            throw new NumberToWordsException(
                sprintf('Currency "%s" is not available for "%s" language', $currency, get_class($this))
            );
        }

        $currencyNames = static::$currencyNames[$currency];

        if($decimal === 0 && !$writeZero){
            $return = '';
        } else {
            $return = $this->toWords($decimal, $currencyNames[0][0]) . ' ' . $this->morph($decimal, $currencyNames[0][1], $currencyNames[0][2], $currencyNames[0][3]);
        }

        if (null !== $fraction) {
            $return .= ' ' . $this->toWords($fraction, $currencyNames[1][0]) . ' ' . $this->morph($fraction, $currencyNames[1][1], $currencyNames[1][2], $currencyNames[1][3]);
        }

        return $return;
    }
}
