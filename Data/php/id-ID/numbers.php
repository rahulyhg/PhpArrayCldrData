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
      'timeSeparator' => '.',
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
          '1000000000-count-other' => '0 miliar',
          '10000000000-count-other' => '00 miliar',
          '100000000000-count-other' => '000 miliar',
          '1000000000000-count-other' => '0 triliun',
          '10000000000000-count-other' => '00 triliun',
          '100000000000000-count-other' => '000 triliun',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-other' => '0',
          '10000-count-other' => '00 rb',
          '100000-count-other' => '000 rb',
          '1000000-count-other' => '0 jt',
          '10000000-count-other' => '00 jt',
          '100000000-count-other' => '000 jt',
          '1000000000-count-other' => '0 M',
          '10000000000-count-other' => '00 M',
          '100000000000-count-other' => '000 M',
          '1000000000000-count-other' => '0 T',
          '10000000000000-count-other' => '00 T',
          '100000000000000-count-other' => '000 T',
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
      'accounting' => '¤#,##0.00',
      'standard' => '¤#,##0.00',
      'unitPattern-count-other' => '{0} {1}',
    ],
    'miscPatterns-numberSystem-latn' => [
      'atLeast' => '⩾{0}',
      'range' => '{0}–{1}',
    ],
  ],
];
