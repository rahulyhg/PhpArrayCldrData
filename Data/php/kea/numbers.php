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
      'group' => ' ',
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
          '1000-count-other' => '0 mil',
          '10000-count-other' => '00 mil',
          '100000-count-other' => '000 mil',
          '1000000-count-other' => '0 milhãu',
          '10000000-count-other' => '00 milhãu',
          '100000000-count-other' => '000 milhãu',
          '1000000000-count-other' => '0 mil milhãu',
          '10000000000-count-other' => '00 mil milhãu',
          '100000000000-count-other' => '000 mil milhãu',
          '1000000000000-count-other' => '0 bilhãu',
          '10000000000000-count-other' => '00 bilhãu',
          '100000000000000-count-other' => '000 bilhãu',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-other' => '0 mil',
          '10000-count-other' => '00 mil',
          '100000-count-other' => '000 mil',
          '1000000-count-other' => '0 M',
          '10000000-count-other' => '00 M',
          '100000000-count-other' => '000 M',
          '1000000000-count-other' => '0 MM',
          '10000000000-count-other' => '00 MM',
          '100000000000-count-other' => '000 MM',
          '1000000000000-count-other' => '0 Bi',
          '10000000000000-count-other' => '00 Bi',
          '100000000000000-count-other' => '000 Bi',
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
      'accounting' => '#,##0.00 ¤;(#,##0.00 ¤]',
      'standard' => '#,##0.00 ¤',
      'unitPattern-count-other' => '{0} {1}',
    ],
    'miscPatterns-numberSystem-latn' => [
      'atLeast' => '+{0}',
      'range' => '{0}–{1}',
    ],
  ],
];
