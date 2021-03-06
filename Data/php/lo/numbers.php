<?php 

return [
  'numbers' => [
    'defaultNumberingSystem' => 'latn',
    'otherNumberingSystems' => [
      'native' => 'laoo',
    ],
    'minimumGroupingDigits' => '1',
    'symbols-numberSystem-laoo' => [
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
      'nan' => 'ບໍ່​ແມ່ນ​ໂຕ​ເລກ',
      'timeSeparator' => ':',
    ],
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
      'nan' => 'ບໍ່​ແມ່ນ​ໂຕ​ເລກ',
      'timeSeparator' => ':',
    ],
    'decimalFormats-numberSystem-laoo' => [
      'standard' => '#,##0.###',
      'long' => [
        'decimalFormat' => [
          '1000-count-other' => '0ພັນ',
          '10000-count-other' => '00ພັນ',
          '100000-count-other' => '000ພັນ',
          '1000000-count-other' => '0ລ້ານ',
          '10000000-count-other' => '00ລ້ານ',
          '100000000-count-other' => '000ລ້ານ',
          '1000000000-count-other' => '0ພັນລ້ານ',
          '10000000000-count-other' => '00ພັນລ້ານ',
          '100000000000-count-other' => '000ພັນລ້ານ',
          '1000000000000-count-other' => '0000ພັນລ້ານ',
          '10000000000000-count-other' => '00ລ້ານລ້ານ',
          '100000000000000-count-other' => '000ລ້ານລ້ານ',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-other' => '0ພັນ',
          '10000-count-other' => '00ພັນ',
          '100000-count-other' => '000ພັນ',
          '1000000-count-other' => '0ລ້ານ',
          '10000000-count-other' => '00ລ້ານ',
          '100000000-count-other' => '000ລ້ານ',
          '1000000000-count-other' => '0ຕື້',
          '10000000000-count-other' => '00ຕື້',
          '100000000000-count-other' => '000ຕື້',
          '1000000000000-count-other' => '0000ຕື້',
          '10000000000000-count-other' => '00ພັນຕື້',
          '100000000000000-count-other' => '000ພັນຕື້',
        ],
      ],
    ],
    'decimalFormats-numberSystem-latn' => [
      'standard' => '#,##0.###',
      'long' => [
        'decimalFormat' => [
          '1000-count-other' => '0 ພັນ',
          '10000-count-other' => '00 ພັນ',
          '100000-count-other' => '0 ແສນ',
          '1000000-count-other' => '0 ລ້ານ',
          '10000000-count-other' => '00 ລ້ານ',
          '100000000-count-other' => '000 ລ້ານ',
          '1000000000-count-other' => '0 ຕື້',
          '10000000000-count-other' => '00 ຕື້',
          '100000000000-count-other' => '000 ຕື້',
          '1000000000000-count-other' => '0 ລ້ານລ້ານ',
          '10000000000000-count-other' => '00 ລ້ານລ້ານ',
          '100000000000000-count-other' => '000 ລ້ານລ້ານ',
        ],
      ],
      'short' => [
        'decimalFormat' => [
          '1000-count-other' => '0 ພັນ',
          '10000-count-other' => '00 ພັນ',
          '100000-count-other' => '000 ກີບ',
          '1000000-count-other' => '0 ລ້ານ',
          '10000000-count-other' => '00 ລ້ານ',
          '100000000-count-other' => '000 ລ້ານ',
          '1000000000-count-other' => '0 ຕື້',
          '10000000000-count-other' => '00 ຕື້',
          '100000000000-count-other' => '000 ຕື້',
          '1000000000000-count-other' => '0 ລ້ານລ້ານ',
          '10000000000000-count-other' => '00 ລ້ານລ້ານ',
          '100000000000000-count-other' => '000 ລ້ານລ້ານ',
        ],
      ],
    ],
    'scientificFormats-numberSystem-laoo' => [
      'standard' => '#',
    ],
    'scientificFormats-numberSystem-latn' => [
      'standard' => '#',
    ],
    'percentFormats-numberSystem-laoo' => [
      'standard' => '#,##0%',
    ],
    'percentFormats-numberSystem-latn' => [
      'standard' => '#,##0%',
    ],
    'currencyFormats-numberSystem-laoo' => [
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
      'accounting' => '¤#,##0.00;¤-#,##0.00',
      'standard' => '¤#,##0.00;¤-#,##0.00',
      'unitPattern-count-other' => '{0} {1}',
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
      'accounting' => '¤#,##0.00;¤-#,##0.00',
      'standard' => '¤#,##0.00;¤-#,##0.00',
      'unitPattern-count-other' => '{0} {1}',
    ],
    'miscPatterns-numberSystem-laoo' => [
      'atLeast' => '{0}+',
      'range' => '{0}–{1}',
    ],
    'miscPatterns-numberSystem-latn' => [
      'atLeast' => '{0}+',
      'range' => '{0}–{1}',
    ],
  ],
];
