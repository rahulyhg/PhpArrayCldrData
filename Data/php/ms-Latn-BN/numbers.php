<?php 

return [
  'numbers' => [
    'defaultNumberingSystem' => 'latn',
    'otherNumberingSystems' => [
      'native' => 'latn',
    ],
    'minimumGroupingDigits' => '1',
    'symbols-numberSystem-latn' => [
      'decimal' => ',',
      'group' => '.',
      'list' => ';',
      'percentSign' => '%',
      'plusSign' => '+',
      'minusSign' => '-',
      'exponential' => 'E',
      'superscriptingExponent' => '×',
      'perMille' => '‰',
      'infinity' => '∞',
      'nan' => 'NaN',
      'timeSeparator' => ':',
    ],
    'decimalFormats-numberSystem-latn' => [
      'standard' => '#,##0.###',
      'long' => [
        'decimalFormat' => [
          '1000-count-other' => '0 ribu',
          '10000-count-other' => '00 ribu',
          '100000-count-other' => '000 ribu',
          '1000000-count-other' => '0 juta',
          '10000000-count-other' => '00 juta',
          '100000000-count-other' => '000 juta',
          '1000000000-count-other' => '0 bilion',
          '10000000000-count-other' => '00 bilion',
          '100000000000-count-other' => '000 bilion',
          '1000000000000-count-other' => '0 trilion',
          '10000000000000-count-other' => '00 trilion',
          '100000000000000-count-other' => '000 trilion',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-other' => '0K',
          '10000-count-other' => '00K',
          '100000-count-other' => '000K',
          '1000000-count-other' => '0J',
          '10000000-count-other' => '00J',
          '100000000-count-other' => '000J',
          '1000000000-count-other' => '0B',
          '10000000000-count-other' => '00B',
          '100000000000-count-other' => '000B',
          '1000000000000-count-other' => '0T',
          '10000000000000-count-other' => '00T',
          '100000000000000-count-other' => '000T',
        ],
      ],
    ],
    'scientificFormats-numberSystem-latn' => [
      'standard' => '#E0',
    ],
    'percentFormats-numberSystem-latn' => [
      'standard' => '#,##0%',
    ],
    'currencyFormats-numberSystem-latn' => [
      'currencySpacing' => [
        'beforeCurrency' => [
          'currencyMatch' => '[:^S:]',
          'surroundingMatch' => '[:digit:]',
          'insertBetween' => ' ',
        ],
        'afterCurrency' => [
          'currencyMatch' => '[:^S:]',
          'surroundingMatch' => '[:digit:]',
          'insertBetween' => ' ',
        ],
      ],
      'accounting' => '¤#,##0.00;(¤#,##0.00]',
      'standard' => '¤ #,##0.00',
      'unitPattern-count-other' => '{0} {1}',
    ],
    'miscPatterns-numberSystem-latn' => [
      'atLeast' => '{0}+',
      'range' => '{0}–{1}',
    ],
  ],
];
