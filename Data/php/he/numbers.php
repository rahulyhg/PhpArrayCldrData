<?php 

return [
  'numbers' => [
    'defaultNumberingSystem' => 'latn',
    'otherNumberingSystems' => [
      'native' => 'latn',
      'traditional' => 'hebr',
    ],
    'minimumGroupingDigits' => '1',
    'symbols-numberSystem-latn' => [
      'decimal' => '.',
      'group' => ',',
      'list' => ';',
      'percentSign' => '%',
      'plusSign' => '‎+',
      'minusSign' => '‎-',
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
          '1000-count-one' => '‏0 אלף',
          '1000-count-two' => '‏0 אלף',
          '1000-count-many' => '‏0 אלף',
          '1000-count-other' => '‏0 אלף',
          '10000-count-one' => '‏00 אלף',
          '10000-count-two' => '‏00 אלף',
          '10000-count-many' => '‏00 אלף',
          '10000-count-other' => '‏00 אלף',
          '100000-count-one' => '‏000 אלף',
          '100000-count-two' => '‏000 אלף',
          '100000-count-many' => '‏000 אלף',
          '100000-count-other' => '‏000 אלף',
          '1000000-count-one' => '‏0 מיליון',
          '1000000-count-two' => '‏0 מיליון',
          '1000000-count-many' => '‏0 מיליון',
          '1000000-count-other' => '‏0 מיליון',
          '10000000-count-one' => '‏00 מיליון',
          '10000000-count-two' => '‏00 מיליון',
          '10000000-count-many' => '‏00 מיליון',
          '10000000-count-other' => '‏00 מיליון',
          '100000000-count-one' => '‏000 מיליון',
          '100000000-count-two' => '‏000 מיליון',
          '100000000-count-many' => '‏000 מיליון',
          '100000000-count-other' => '‏000 מיליון',
          '1000000000-count-one' => '‏0 מיליארד',
          '1000000000-count-two' => '‏0 מיליארד',
          '1000000000-count-many' => '‏0 מיליארד',
          '1000000000-count-other' => '‏0 מיליארד',
          '10000000000-count-one' => '‏00 מיליארד',
          '10000000000-count-two' => '‏00 מיליארד',
          '10000000000-count-many' => '‏00 מיליארד',
          '10000000000-count-other' => '‏00 מיליארד',
          '100000000000-count-one' => '‏000 מיליארד',
          '100000000000-count-two' => '‏000 מיליארד',
          '100000000000-count-many' => '‏000 מיליארד',
          '100000000000-count-other' => '‏000 מיליארד',
          '1000000000000-count-one' => '‏0 טריליון',
          '1000000000000-count-two' => '‏0 טריליון',
          '1000000000000-count-many' => '‏0 טריליון',
          '1000000000000-count-other' => '‏0 טריליון',
          '10000000000000-count-one' => '‏00 טריליון',
          '10000000000000-count-two' => '‏00 טריליון',
          '10000000000000-count-many' => '‏00 טריליון',
          '10000000000000-count-other' => '‏00 טריליון',
          '100000000000000-count-one' => '‏000 טריליון',
          '100000000000000-count-two' => '‏000 טריליון',
          '100000000000000-count-many' => '‏000 טריליון',
          '100000000000000-count-other' => '‏000 טריליון',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-one' => '‏0 אלף',
          '1000-count-two' => '‏0 אלף',
          '1000-count-many' => '‏0 אלף',
          '1000-count-other' => '‏0 אלף',
          '10000-count-one' => '‏00 אלף',
          '10000-count-two' => '‏00 אלף',
          '10000-count-many' => '‏00 אלף',
          '10000-count-other' => '‏00 אלף',
          '100000-count-one' => '‏000 אלף',
          '100000-count-two' => '‏000 אלף',
          '100000-count-many' => '‏000 אלף',
          '100000-count-other' => '‏000 אלף',
          '1000000-count-one' => '‏0 מיל׳',
          '1000000-count-two' => '‏0 מיל׳',
          '1000000-count-many' => '‏0 מיל׳',
          '1000000-count-other' => '‏0 מיל׳',
          '10000000-count-one' => '‏00 מיל׳',
          '10000000-count-two' => '‏00 מיל׳',
          '10000000-count-many' => '‏00 מיל׳',
          '10000000-count-other' => '‏00 מיל׳',
          '100000000-count-one' => '‏000 מיל׳',
          '100000000-count-two' => '‏000 מיל׳',
          '100000000-count-many' => '‏000 מיל׳',
          '100000000-count-other' => '‏000 מיל׳',
          '1000000000-count-one' => '‏0 מלרד',
          '1000000000-count-two' => '‏0 מלרד',
          '1000000000-count-many' => '‏0 מלרד',
          '1000000000-count-other' => '‏0 מלרד',
          '10000000000-count-one' => '‏00 מלרד',
          '10000000000-count-two' => '‏00 מלרד',
          '10000000000-count-many' => '‏00 מלרד',
          '10000000000-count-other' => '‏00 מלרד',
          '100000000000-count-one' => '‏000 מלרד',
          '100000000000-count-two' => '‏000 מלרד',
          '100000000000-count-many' => '‏000 מלרד',
          '100000000000-count-other' => '‏000 מלרד',
          '1000000000000-count-one' => '‏0 ביל׳',
          '1000000000000-count-two' => '‏0 ביל׳',
          '1000000000000-count-many' => '‏0 ביל׳',
          '1000000000000-count-other' => '‏0 ביל׳',
          '10000000000000-count-one' => '‏00 ביל׳',
          '10000000000000-count-two' => '‏00 ביל׳',
          '10000000000000-count-many' => '‏00 ביל׳',
          '10000000000000-count-other' => '‏00 ביל׳',
          '100000000000000-count-one' => '‏000 ביל׳',
          '100000000000000-count-two' => '‏000 ביל׳',
          '100000000000000-count-many' => '‏000 ביל׳',
          '100000000000000-count-other' => '‏000 ביל׳',
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
      'accounting' => '#,##0.00 ¤',
      'standard' => '#,##0.00 ¤',
      'unitPattern-count-one' => '{0} {1}',
      'unitPattern-count-two' => '{0} {1}',
      'unitPattern-count-many' => '{0} {1}',
      'unitPattern-count-other' => '{0} {1}',
    ],
    'miscPatterns-numberSystem-latn' => [
      'atLeast' => '⩾{0}+',
      'range' => '{0}–{1}',
    ],
  ],
];
