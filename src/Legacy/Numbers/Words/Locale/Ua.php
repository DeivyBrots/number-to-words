<?php

namespace NumberToWords\Legacy\Numbers\Words\Locale;

class Ua extends Ru
{
    const LOCALE = 'ua';
    const LANGUAGE_NAME = 'Ukrainian';
    const LANGUAGE_NAME_NATIVE = 'Українська';
    const MINUS = 'минус';

    protected $zero = 'нуль';

    protected static $ten = [
        self::MALE => ['', 'один', 'два', 'три', 'чотири', 'п\'ять', 'шість', 'сім', 'вісім', 'дев\'ять'],
        self::FEMALE => ['', 'одна', 'дві', 'три', 'чотири', 'п\'ять', 'шість', 'сім', 'вісім', 'дев\'ять'],
    ];

    protected static $teens = [
        'десять',
        'одинадцять',
        'дванадцять',
        'тринадцять',
        'чотирнадцять',
        'п\'ятнадцять',
        'шістнадцять',
        'сімнадцять',
        'вісімнадцять',
        'дев\'ятнадцять',
    ];

    protected static $tens = [
        2 => 'двадцять',
        'тридцять',
        'сорок',
        'п\'ятдесят',
        'шістдесят',
        'сімдесят',
        'вісімдесят',
        'дев\'яносто',
    ];

    protected static $hundred = [
        '',
        'сто',
        'двісті',
        'триста',
        'чотириста',
        'п\'ятсот',
        'шістсот',
        'сімсот',
        'вісімсот',
        'дев\'ятсот',
    ];

    protected static $mega = [
        [3 => self::FEMALE],
        [3 => self::MALE],
        ['тисяча', 'тисячі', 'тисяч', self::FEMALE],
        ['мільйон', 'мільйони', 'мільйонів', self::MALE],
        ['мільярд', 'мільярди', 'мільярдів', self::MALE],
        ['трильйон', 'трильйони', 'трильйонів', self::MALE],
        ['квадрильйон', 'квадрильйони', 'квадрильйонів', self::MALE],
        ['секстильйон', 'секстильйони', 'секстильйонів', self::MALE],
    ];

    protected static $currencyNames = [
        'ALL' => [
            [self::MALE, 'лек', 'лека', 'леков'],
            [self::FEMALE, 'киндарка', 'киндарки', 'киндарок'],
        ],
        'AUD' => [
            [self::MALE, 'австралийский доллар', 'австралийских доллара', 'австралийских долларов'],
            [self::MALE, 'цент', 'цента', 'центов'],
        ],
        'BGN' => [
            [self::MALE, 'лев', 'лева', 'левов'],
            [self::FEMALE, 'стотинка', 'стотинки', 'стотинок'],
        ],
        'BRL' => [
            [self::MALE, 'бразильский реал', 'бразильских реала', 'бразильских реалов'],
            [self::MALE, 'сентаво', 'сентаво', 'сентаво'],
        ],
        'BYR' => [
            [self::MALE, 'белорусский рубль', 'белорусских рубля', 'белорусских рублей'],
            [self::FEMALE, 'копейка', 'копейки', 'копеек'],
        ],
        'CAD' => [
            [self::MALE, 'канадский доллар', 'канадских доллара', 'канадских долларов'],
            [self::MALE, 'цент', 'цента', 'центов'],
        ],
        'CHF' => [
            [self::MALE, 'швейцарский франк', 'швейцарских франка', 'швейцарских франков'],
            [self::MALE, 'сантим', 'сантима', 'сантимов'],
        ],
        'CYP' => [
            [self::MALE, 'кипрский фунт', 'кипрских фунта', 'кипрских фунтов'],
            [self::MALE, 'цент', 'цента', 'центов'],
        ],
        'CZK' => [
            [self::FEMALE, 'чешская крона', 'чешских кроны', 'чешских крон'],
            [self::MALE, 'галирж', 'галиржа', 'галиржей'],
        ],
        'DKK' => [
            [self::FEMALE, 'датская крона', 'датских кроны', 'датских крон'],
            [self::MALE, 'эре', 'эре', 'эре'],
        ],
        'EEK' => [
            [self::FEMALE, 'эстонская крона', 'эстонских кроны', 'эстонских крон'],
            [self::MALE, 'сенти', 'сенти', 'сенти'],
        ],
        'EUR' => [
            [self::MALE, 'евро', 'евро', 'евро'],
            [self::MALE, 'евроцент', 'евроцента', 'евроцентов'],
        ],
        'GBP' => [
            [self::MALE, 'фунт стерлингов', 'фунта стерлингов', 'фунтов стерлингов'],
            [self::MALE, 'пенс', 'пенса', 'пенсов'],
        ],
        'HKD' => [
            [self::MALE, 'гонконгский доллар', 'гонконгских доллара', 'гонконгских долларов'],
            [self::MALE, 'цент', 'цента', 'центов'],
        ],
        'HRK' => [
            [self::FEMALE, 'хорватская куна', 'хорватских куны', 'хорватских кун'],
            [self::FEMALE, 'липа', 'липы', 'лип'],
        ],
        'HUF' => [
            [self::MALE, 'венгерский форинт', 'венгерских форинта', 'венгерских форинтов'],
            [self::MALE, 'филлер', 'филлера', 'филлеров'],
        ],
        'ISK' => [
            [self::FEMALE, 'исландская крона', 'исландских кроны', 'исландских крон'],
            [self::MALE, 'эре', 'эре', 'эре'],
        ],
        'JPY' => [
            [self::FEMALE, 'иена', 'иены', 'иен'],
            [self::FEMALE, 'сена', 'сены', 'сен'],
        ],
        'LTL' => [
            [self::MALE, 'лит', 'лита', 'литов'],
            [self::MALE, 'цент', 'цента', 'центов'],
        ],
        'LVL' => [
            [self::MALE, 'лат', 'лата', 'латов'],
            [self::MALE, 'сентим', 'сентима', 'сентимов'],
        ],
        'MKD' => [
            [self::MALE, 'македонский динар', 'македонских динара', 'македонских динаров'],
            [self::MALE, 'дени', 'дени', 'дени'],
        ],
        'MTL' => [
            [self::FEMALE, 'мальтийская лира', 'мальтийских лиры', 'мальтийских лир'],
            [self::MALE, 'сентим', 'сентима', 'сентимов'],
        ],
        'NOK' => [
            [self::FEMALE, 'норвежская крона', 'норвежских кроны', 'норвежских крон'],
            [0, 'эре', 'эре', 'эре'],
        ],
        'PLN' => [
            [self::MALE, 'злотый', 'злотых', 'злотых'],
            [self::MALE, 'грош', 'гроша', 'грошей'],
        ],
        'ROL' => [
            [self::MALE, 'румынский лей', 'румынских лей', 'румынских лей'],
            [self::MALE, 'бани', 'бани', 'бани'],
        ],
        // both RUR and RUR are used, Some users use RUB for shorter form
        'RUB' => [
            [self::MALE, 'рубль', 'рубля', 'рублів'],
            [self::FEMALE, 'копійка', 'копійки', 'копійок'],
        ],
        'RUR' => [
            [self::MALE, 'российский рубль', 'российских рубля', 'российских рублей'],
            [self::FEMALE, 'копейка', 'копейки', 'копеек'],
        ],
        'SEK' => [
            [self::FEMALE, 'шведская крона', 'шведских кроны', 'шведских крон'],
            [self::MALE, 'эре', 'эре', 'эре'],
        ],
        'SIT' => [
            [self::MALE, 'словенский толар', 'словенских толара', 'словенских толаров'],
            [self::FEMALE, 'стотина', 'стотины', 'стотин'],
        ],
        'SKK' => [
            [self::FEMALE, 'словацкая крона', 'словацких кроны', 'словацких крон'],
            [0, '', '', ''],
        ],
        'TRL' => [
            [self::FEMALE, 'турецкая лира', 'турецких лиры', 'турецких лир'],
            [self::MALE, 'пиастр', 'пиастра', 'пиастров'],
        ],
        'UAH' => [
            [self::FEMALE, 'гривня', 'гривні', 'гривень'],
            [self::FEMALE, 'копійка', 'копійки', 'копійок'],
        ],
        'USD' => [
            [self::MALE, 'доллар США', 'доллара США', 'долларов США'],
            [self::MALE, 'цент', 'цента', 'центов'],
        ],
        'YUM' => [
            [self::MALE, 'югославский динар', 'югославских динара', 'югославских динаров'],
            [self::MALE, 'пара', 'пара', 'пара'],
        ],
        'ZAR' => [
            [self::MALE, 'ранд', 'ранда', 'рандов'],
            [self::MALE, 'цент', 'цента', 'центов'],
        ]
    ];
}
